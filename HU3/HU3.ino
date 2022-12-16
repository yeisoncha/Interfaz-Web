// PROGRAMA DENOMINADO programa1.ino
// PARA CAPTURAR DATOS DE LOS SENSORES
// Y ENVIAR A UNA BASE DE DATOS EN UN SERVIDOR WEB.

#include <WiFi.h>
#include <HTTPClient.h>
//#include <Arduino_JSON.h>
#include <ArduinoJson.h>


const char* ssid     = "HP_DESKTOP";      // SSID
const char* password = "Jefferson_Steven23#";      // Password
const char* host = "192.168.137.1";  // Dirección IP local o remota, del Servidor Web
const int   port = 80;            // Puerto, HTTP es 80 por defecto, cambiar si es necesario.
const int   watchdog = 2000;        // Frecuencia del Watchdog
unsigned long previousMillis = millis(); 
unsigned long onOffDelay;
unsigned long previousonOffDelay;
unsigned long auto_millis=0;
unsigned long temp_millis=0;


#define hab1 13 // Salida para el control de un relay, control iluminación habitacion 1
#define hab2 14 // Salida para el control de un relay, control iluminación habitacion 2
#define hab3 15 // Salida para el control de un relay, control iluminación habitacion 3
#define pir1 16 // lectura sensor de movimiento pir, Sensor de movimiento habitacion 1
#define pir2 17 // lectura sensor de movimiento pir, Sensor de movimiento habitacion 2
#define pir3 18 // lectura sensor de movimiento pir, Sensor de movimiento habitacion 3


int ID_TARJ=1; // Este dato identificará cual es la tarjeta que envía los datos, tener en cuenta que se tendrá más de una tarjeta. 
              // Se debe cambiar el dato (a 2,3,4...) cuando se grabe el programa en las demás tarjetas.
String serverPath="";

int SensorState[]={0,0,0};
int roomState[]={0,0,0};
int previousRoomState[]={0,0,0};
int automaticState[]={0,0,0};
int previousAutomaticState[]={0,0,0};
int previousMode=1;
unsigned long OnOffDelay;
unsigned long PreviousOnOffD1;
unsigned long PreviousOnOffD2;
unsigned long PreviousOnOffD3;
 
void setup() {
//-------------------------
  pinMode(hab1, OUTPUT);
  pinMode(hab2, OUTPUT);
  pinMode(hab3, OUTPUT);
//-------------------------
//-------------------------
  Serial.begin(115200);//inicializar puerto serie
  wifi_connect();
//-------------------------
//-------------------------
  digitalWrite(hab1,LOW);
  digitalWrite(hab2,LOW);
  digitalWrite(hab3,LOW);
//-------------------------
}
 
void loop() {
  unsigned long currentMillis = millis();

  int modeState;

  serverPath = "http://";
  serverPath += host;
  serverPath += "/Interfaz-Web/apiArd/modeConsult.php";
  serverPath += "?ID_TARJ=";
  serverPath += ID_TARJ;

  String estadoResponse = get_request(serverPath);
  if(estadoResponse != ""){
    modeState = estadoResponse.toInt();
    //Serial.println(estado);
  }
  if(modeState!= previousMode){
    previousMode = modeState;
    switch (modeState) {
      case 0:
        Serial.println("Remote mode activated");
        break;
      case 1:
        Serial.println("Automatic mode activated");
        break;
      case 2:
        Serial.println("Sensing mode activated");
        break;
    }
  }
  switch (modeState) {
    case 0:
      remote_mode();
      break;
    case 1:
      automatic_mode();
      break;
    case 2: 
      sensing_mode();
      break;
  }
  
}

void onOff(){
  for(int i=0;i<3;i++){
    if(roomState[i]!=previousRoomState[i]){
      previousRoomState[i]=roomState[i];
      switch(i){
        case 0:
          if(roomState[0]==1){
            Serial.println("HABITACION 1 ENCENDIDA");
            digitalWrite(hab1,HIGH);
          }
          else{
            Serial.println("HABITACION 1 APAGADA");
            digitalWrite(hab1,LOW);
          }
          break;
        case 1:
          if(roomState[1]==1){
            Serial.println("HABITACION 2 ENCENDIDA");
            digitalWrite(hab2,HIGH);
          }
          else{
            Serial.println("HABITACION 2 APAGADA");
            digitalWrite(hab2,LOW);
          }
        break;
        case 2:
          if(roomState[2]==1){
            Serial.println("HABITACION 3 ENCENDIDA");
            digitalWrite(hab3,HIGH);
          }
          else{
            Serial.println("HABITACION 3 APAGADA");
            digitalWrite(hab3,LOW);
          }
        break;
      }  
    }
  }
  if(temp_millis == 0){
    temp_millis = millis();
  }
  else{
    if(millis()-temp_millis > 30000){
      temp_millis = millis();
      serverPath = "http://";
      serverPath += host;
      serverPath += "/Interfaz-Web/apiArd/registerSave.php?ID_TARJ=";
      serverPath += ID_TARJ;
      serverPath += "&hab1=";
      serverPath += roomState[0];
      serverPath += "&hab2=";
      serverPath += roomState[1];
      serverPath += "&hab3=";
      serverPath += roomState[2];
      String response = get_request(serverPath);
    }
  }
     
}
