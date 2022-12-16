#!/usr/bin/env python
# coding: utf-8

# In[3]:


get_ipython().system('pip3 install seaborn')
get_ipython().system('pip3 install sklearn')
get_ipython().system('pip3 install mysqlclient')


# In[1]:


hostname = 'localhost'
username = 'root'
password = ''
database = 'automode'


# In[2]:


import MySQLdb
myConnection = MySQLdb.connect(host=hostname,user=username, passwd=password,db=database)


# In[4]:


import pandas as pd


# In[5]:


dataframe_am=pd.read_sql("SELECT * FROM caracteristicas_auto_mo", myConnection)
print(dataframe_am)


# In[6]:


myConnection.close()


# In[8]:


X=dataframe_am[["room", "week_day","range"]]
X.shape
y=dataframe_am['state']
y.shape


# In[9]:


from sklearn.tree import DecisionTreeClassifier
model = DecisionTreeClassifier()


# In[10]:


from sklearn.model_selection import train_test_split


# In[11]:


Xtrain, Xtest, ytrain, ytest = train_test_split(X, y, random_state=1, train_size=0.7)
model.fit(Xtrain, ytrain)
y_model = model.predict(Xtest)


# In[12]:


from sklearn.metrics import accuracy_score
print("Accuracy:")
print(accuracy_score(ytest, y_model))


# In[13]:


from sklearn.metrics import recall_score
print("Recall:")
print(recall_score(ytest, y_model, average='macro'))


# In[15]:


from sklearn.metrics import precision_score
print("Precision:")
print(precision_score(ytest, y_model, average='macro'))


# In[22]:


y_model=model.predict([[10,111,1]])
print("Accion predicha con los valores ingresados en el algoritmo:")
print(y_model)


# In[23]:


respuesta_prediccion= format(y_model)
respuesta_prediccion = respuesta_prediccion.replace('[', '')
respuesta_prediccion = respuesta_prediccion.replace(']', '')
print("Prediccion:")
print(respuesta_prediccion)


# In[24]:


mynewConnection = MySQLdb.connect( host=hostname, user=username, passwd=password, db=database )
cur = mynewConnection.cursor()


# In[25]:


from datetime import datetime
now = datetime.now()
fecha = format(now.date()) 
hora = format(now.time())
cadena_SQL= "INSERT INTO predicciones (prediccion, fecha, hora) VALUES (" + respuesta_prediccion + ",'" + fecha + "','" + hora + "')"
print (cadena_SQL)


# In[26]:


cur.execute(cadena_SQL)
print("Registro creado.")
mynewConnection.commit()
mynewConnection.close()


# In[ ]:




