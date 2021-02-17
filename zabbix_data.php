<?php

include('./assets/class/Snoopy.class.php');
$snoopy = new Snoopy;

  $snoopy->referer = "http://192.168.0.10/";
  $snoopy->agent = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1Trident/5.0)";
  $snoopy->rawheaders["Pragma"] = "application/x-www-form-urlencoded";
  $submit_url = "http://192.168.0.10/index.php";
  $submit_vars["name"] = "Admin";
  $submit_vars["password"] = "zabbix";
  $snoopy->submit($submit_url,$submit_vars);
  $snoopy->setcookies();
  $snoopy->fetch("http://192.168.0.10/zabbix/zabbix.php?action=dashboard.view");
  print $snoopy->results;

 

 
?>