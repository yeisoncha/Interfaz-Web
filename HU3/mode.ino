void remote_mode(){
  serverPath = "http://";
  serverPath += host;
  serverPath += "/programas_php/sprint1/statesConsult.php?ID_TARJ=";
  serverPath += ID_TARJ;
  String response = get_request(serverPath);
  String rooms[]={"hab1","hab2","hab3"};
  deserializeJSON(response,0);
  onOff();
}

void automatic_mode(){
  delay(10000);
  roomState[0]=1;
  roomState[1]=1;
  roomState[2]=1;
  onOff();
  delay(10000);
  roomState[0]=0;
  roomState[1]=0;
  roomState[2]=0;
  onOff();
  delay(10000);
}

void sensing_mode(){
  OnOffDelay=millis();
  if(digitalRead(pir1)== HIGH){
    SensorState[0]=1;
    digitalWrite(hab1,HIGH);
    PreviousOnOffD1 = millis();
  }
  else{
    SensorState[0]=0;
  }
  if(digitalRead(pir2)== HIGH){
    SensorState[1]=1;
    digitalWrite(hab2,HIGH);
    PreviousOnOffD2 = millis();
  }
  else{
      SensorState[1]=0;
  }

  if(digitalRead(pir3)== HIGH){
    SensorState[2]=1;
    digitalWrite(hab3,HIGH);
    PreviousOnOffD3 = millis();
  }
  else{
    SensorState[2]=0;
  }

  if(OnOffDelay-PreviousOnOffD1 >= 30000){
    digitalWrite(hab1,LOW);
  }
  if(OnOffDelay-PreviousOnOffD2 >= 30000){
    digitalWrite(hab2,LOW);
  }
  if(OnOffDelay-PreviousOnOffD3 >= 30000){
    digitalWrite(hab3,LOW);
  }

  serverPath = "http://";
  serverPath += host;
  serverPath += "/programas_php/sprint1/registerSave.php?ID_TARJ=";
  serverPath += ID_TARJ;
  serverPath += "&sens1=";
  serverPath += SensorState[0];
  serverPath += "&sens2=";
  serverPath += SensorState[1];
  serverPath += "&sens3=";
  serverPath += SensorState[0];
  String response = get_request(serverPath);
}
