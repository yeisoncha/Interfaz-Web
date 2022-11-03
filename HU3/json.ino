void deserializeJSON(String json,int option){
  StaticJsonDocument<200> doc;
  DeserializationError error = deserializeJson(doc, json);
  if (!error) {
    switch(option){
      case 0:
        char valueStateRoom=doc["hab1"];
        roomState[0]=int(valueStateRoom);
        valueStateRoom=doc["hab2"];
        roomState[1]=int(valueStateRoom);
        valueStateRoom=doc["hab3"];
        roomState[2]=int(valueStateRoom);
        break;
    }
  }
  else{
    Serial.print(F("deserializeJson() failed: "));
    Serial.println(error.f_str());
  }
}

void SeralizeJSON(){
  StaticJsonDocument<200> doc;
  doc["hello"] = "world";
  serializeJson(doc, Serial);
}
