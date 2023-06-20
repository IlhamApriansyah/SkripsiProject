#include <ESP8266WebServer.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>


#define relay D2
//Koneksi Wifi
const char *ssid = "ilham_wifi";
const char *password = "ilham123";

ESP8266WebServer server(80);
 
String webpage;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  pinMode(relay, OUTPUT);
  delay(10);
  Serial.print("terhubung ke : ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".....");
  }

Serial.print("\n");
Serial.print("IP Adress :");
Serial.print(WiFi.localIP());
Serial.print("\n");
Serial.print("Terhubung ke : ");
Serial.print("\n");
Serial.print(ssid);

// Tampilan Website
  webpage+="<head>";
  webpage+="<meta name=\"viewport\"content=\"width=device-width, initial-scale=1\">";
  webpage+="<title>QR Scanner</title>";
  webpage+="<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">";
  webpage+="<h1><center>QR Code Apps</center></h1><br></br>";
  webpage+="</head>";
  webpage+="<body>";
  webpage+="<center><a href=\"on\"\"><button class='btn btn-primary'>Buka Kunci</button><br></br>";
  webpage+="<center><a href=\"off\"\"><button class='btn btn-primary'>Tutup Kunci</button><br></br>";
  webpage+="<center><a href=\"http://localhost:8000/\"><button class='btn btn-primary'>Kembali</button><br></br>";
  webpage+="</body>";
  webpage+="<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>";
  webpage+="<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js\" integrity=\"sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS\" crossorigin=\"anonymous\"></script>";


  server.on("/", [] (){
    server.send(200, "text/html", webpage);
  });

  // Fungsi on off
  server.on("/on", [] (){
    server.send(200, "text/html", webpage);

      digitalWrite(relay, HIGH);
      Serial.println("aktif");
  });

  server.on("/off", [] (){
    server.send(200, "text/html", webpage);

      digitalWrite(relay, LOW);
      Serial.println("nonaktif");
  });

  server.begin();
  Serial.print("\n");
  Serial.println("Webserver dijalankan");
}

void loop() {
  // put your main code here, to run repeatedly:
 server.handleClient(); 
}
