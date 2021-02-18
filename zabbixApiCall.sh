#!/bin/bash

#CHECK API VERSION
# curl -H "Content-Type: application/json" --data '{ "jsonrpc" :  "2.0" , "method" :  "apiinfo.version" , "params" :  [ ] , "id" :  1 }' http://192.168.0.10/zabbix/api_jsonrpc.php
# > 5.2.4

#GET AUTH
curl -H "Content-Type: application/json" --data '{ "jsonrpc" :  "2.0" , "method" :  "user.login" , "params" : {"user" :  "Admin" , "password" :  "zabbix" } , "id" :  1 , "auth" : null}' http://192.168.0.10/zabbix/api_jsonrpc.php > auth.text

AUTH=$(cat auth.text | jq ".result")
echo $AUTH


#GET AUTH INFO
# curl -H "Content-Type: application/json" --data '{ "jsonrpc" :  "2.0" , "method" :  "authentication.get" , "params" :  { "output" :  "extend" } , "auth" :  $AUTH , "id" :  1 }' http://192.168.0.10/zabbix/api_jsonrpc.php


#GET ZABBIX MONITERING INFO
#curl -H "Content-Type: application/json" --data '{ "jsonrpc" :  "2.0" , "method" :  "host.get" , "params" : {"output" : [ "hostid" , "host" ], "selectInterfaces": [ "interfaceid", "ip" ] } , "id" :  2 , "auth" : "d19e33fc3a6613ecb95f122f55f99149" }' http://192.168.0.10/zabbix/api_jsonrpc.php

echo -e "\n"
echo -e "\n"
echo -e "\n"



hostStr='{ "jsonrpc": "2.0", "method": "host.get", "params": { "filter": { "host": [ "php_web_server" ] } }, "auth": $AUTH, "id": 1 }'
#TARGET HOST INFO
curl -H "Content-Type: application/json" --data ${hostStr} http://192.168.0.10/zabbix/api_jsonrpc.php



#TARGET HOST SERVICE INFO
#curl -H "Content-Type: application/json" --data '{ "jsonrpc" :  "2.0" , "method" :  "dhost.get" , "params" :  { "output" :  "extend" , "selectDServices" :  "extend" , "druleids" :  "4" } , " auth " :  "492d4c9553c1ad368e74b82597197565 " , "id " :  1 }' http://192.168.0.10/zabbix/api_jsonrpc.php
 
echo -e "\n"
echo -e "\n"
echo -e "\n"



