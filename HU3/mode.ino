void remote_mode(){
  serverPath = "http://";
  serverPath += host;
  serverPath += "/Interfaz-Web/apiArd/statesConsult.php?ID_TARJ=";
  serverPath += ID_TARJ;
  String response = get_request(serverPath);
  String rooms[]={"hab1","hab2","hab3"};
  deserializeJSON(response,0);
  onOff();
}

void automatic_mode(){
  if(auto_millis == 0){
    auto_millis = millis();
  }
  else{
    if((millis() - auto_millis) > 30000){
      auto_millis = millis();
      serverPath = "http://";
      serverPath += host;
      serverPath += "/Interfaz-Web/apiArd/auto_mode.php?room=";
      serverPath += 1;
      String response = get_request(serverPath);
      
      serverPath = "http://";
      serverPath += host;
      serverPath += "/Interfaz-Web/apiArd/auto_mode.php?room=";
      serverPath += 10;
      response = get_request(serverPath);
      
      serverPath = "http://";
      serverPath += host;
      serverPath += "/Interfaz-Web/apiArd/auto_mode.php?room=";
      serverPath += 11;
      response = get_request(serverPath);
    }
  }

}

void sensing_mode(){
  OnOffDelay=millis();
  if(digitalRead(pir1)== HIGH){
    SensorState[0]=1;
    roomState[0]=1;
    //digitalWrite(hab1,HIGH);
    PreviousOnOffD1 = millis();
  }
  else{
    SensorState[0]=0;
  }
  if(digitalRead(pir2)== HIGH){
    SensorState[1]=1;
    roomState[1]=1;
    //digitalWrite(hab2,HIGH);
    PreviousOnOffD2 = millis();
  }
  else{
      SensorState[1]=0;
  }

  if(digitalRead(pir3)== HIGH){
    SensorState[2]=1;
    roomState[2]=1;
    //digitalWrite(hab3,HIGH);
    PreviousOnOffD3 = millis();
  }
  else{
    SensorState[2]=0;
  }

  if(OnOffDelay-PreviousOnOffD1 >= 30000){
    //digitalWrite(hab1,LOW);
    roomState[0]=0;
  }
  if(OnOffDelay-PreviousOnOffD2 >= 30000){
    //digitalWrite(hab2,LOW);
    roomState[1]=0;
  }
  if(OnOffDelay-PreviousOnOffD3 >= 30000){
    //digitalWrite(hab3,LOW);
    roomState[2]=0;
  }
  onOff();
}
