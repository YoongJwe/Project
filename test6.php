<?php

$hostname = $_GET [ 'host' ]; $historylimit = 1 ; 
$url = 'http://192.168.0.10/zabbix/api_jsonrpc.php' ; 
$header = array ( "Content-type: application/json-rpc " ); 
//get token start  
function  Curl ( $url , $header , $info ) { 
    $ch = curl_init (); 
    curl_setopt ( $ch , CURLOPT_URL, $url );
    curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1);
    curl_setopt ( $ch , CURLOPT_HTTPHEADER, $header );
    curl_setopt ( $ch , CURLOPT_POST, 1 );
    curl_setopt ( $ch , CURLOPT_POSTFIELDS, $info );
    $response = curl_exec ( $ch ); curl_close ( $ch );
    return json_decode ( $response );
} 
    
function  get_token ( $url , $header ) {
    $user = 'Admin';
    $password = 'zabbix' ;
    $logininfo = array ('jsonrpc' => '2.0' , 'method' => 'user.login' , 'params' => array ( 'user' => $user , 'password' => $password ,), 'id' => 1 ,); 
    $data = json_encode ( $logininfo );
    $result = Curl( $url , $header , $data ); 
    $token = $result-> result; 
    return  $token ;
} 
//get token end 

//Use it to return classobject as an array  
function  object_array ( $array ) { 
    if (is_object ( $array )) {
         $array = ( array ) $array ;
    } 
    
    if (is_array ( $array )) {
        foreach ( $array  as  $key => $value ) {
            $array [ $key ] = object_array ( $value );
        }
    } 
    return  $array ;
} 

//get hostid 
function  get_hostid ( $hostname , $token, $header , $url ) {
    $gethostid = array ( 'jsonrpc' => '2.0' , 'method' => 'host.get' , "params" => array ( "output" => [ "hostid" ] , "filter" => array ( "host" => [ $hostname ])), "auth" => $token , "id" => 1 );$data = json_encode ( $gethostid ); $result= Curl ( $URL , $header , $Data ); $Hostinfo = $Result -> Result; IF ( empty ( $Hostinfo )) { $the hostid = '' ;} the else { $the hostid = $Hostinfo [ 0 ] -> hostid;} 
    return  $hostid ;
}
//get itemid
function  get_itemid ( $hostid , $key , $token , $header , $url ) {

    $getitemid = array ( "jsonrpc" => "2.0" , "method" => "item.get" , "params" => array ( "output" => [ "itemids" ], "hostids" => $hostid , "search" => array ( "key_" => $key ), "sortfield" => "name" ), "auth" => $token , "id"=> 1 );
    $data = json_encode ($getitemid );
    $Result = Curl ( $URL , $header , $Data );
    $ItemInfo = $Result -> Result;
    IF ( empty ( $ItemInfo )) {
        $ItemID = 'null' ;
    } the else {
        $ItemID = $iteminfo [ 0 ]-> itemid;} return  $itemid ;
}
    
//get  zabbix value 
function  get_resource ( $itemid , $token , $header , $url, $history , $historylimit ) { 
    $gethistory = array ( "jsonrpc" => "2.0" , "method" => "history.get" , "params" => array ( "output" => "extend" , " history " => $history , " itemids " => $itemid , " sortfield " => " clock " , " sortorder " => " DESC ", "limit" => $historylimit ),"auth" => $token , "id" => 1 );
    $data = json_encode ( $gethistory );
    $result = Curl ( $url , $header , $data );
    $historytotal = $result- > result;
    $resource = object_array ( $historytotal );
    return  $resource ;
} 

//logical start  
if ( empty ( $hostname )) { 
    echo  "hostname not exists" ; 
    exit ;
} else {
    $hostlist = explode ( "," , $hostname );
    $hostlistarr = array ( 'hostlist' => array ()); foreach ( $hostlist  as  $hostname ) {
        $source = array ( 'vm.memory.size [available ] ' , ' vm.memory.size [total] ' , ' system.cpu.util [, idle] ' , ' vfs.fs.size [/, used] ' , ' vfs.fs.size [/, total] ' );
        $hostarr = array ( ' hostlist ' =>array ($hostname => array ()));
        foreach ( $source  as  $key ) { 
            if ( $key == 'system.cpu.util [, idle]' ) { $history = 0 ;} else { $history = 3 ;}

            $zabbix_info = get_info ($url, $header, $token, $hostname, $key, $history, $historylimit);  
            $token = get_token ( $url , $header );
            $hostid = get_hostid ( $hostname , $token , $header , $url);
            if ( empty ( $hostid )) ( $json_info = array ( 'hostlist' => array ( $hostname => array ( $key =>           'null' )))); 
            $hostarr = array_merge_recursive ( $hostarr , $json_info ); 
            continue ;
} 

$itemid = get_itemid ( $hostid , $key , $token , $header , $url ); 
if ( empty ($itemid )) { 
    $json_info = array ( 'hostlist' => array ( $hostname => array ( $key => 'null' ))); $hostarr = array_merge_recursive ( $hostarr , $json_info ); 
    continue ;
} 

$Resource = get_resource ( $ItemID , $token , $header , $URL , $History , $historylimit ); 
$zabbix_info = $Resource [ 0] [ 'value' ]; 
$json_info = array ( 'hostlist' => array ( $hostname => array ( $key => $zabbix_info ))); 
$hostarr = array_merge_recursive ( $hostarr , $json_info );
} 
$hostlistarr = array_merge_recursive ( $hostlistarr , $hostarr );
} 
echo json_encode ( $hostlistarr );
}
?>