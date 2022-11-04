String get_request(String serverPath){
  String payload="";
  //if(WiFi.status()== WL_CONNECTED){
    HTTPClient http;
    http.begin(serverPath.c_str());
    int httpResponseCode = http.GET();
    if (httpResponseCode>0) {
        //Serial.print("HTTP Response code: ");
        //Serial.println(httpResponseCode);
        payload = http.getString();
    }
    else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
    }
      // Free resources
      http.end();
  //}
  //else{
    //Serial.println("WiFi Disconnected");
  //}
  return payload;
}
