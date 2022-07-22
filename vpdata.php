<?php

$url= $_SERVER['REQUEST_URI'];    
$vid = explode("-", explode("/", $url)[1])[1];
$cfirstname = explode("-", explode("/", $url)[1])[0];

If(!$vid OR !$cfirstname){
echo "Invalid Url";
die;
}


include_once("php/Http.php");
$resp = Http->get($url);
echo $resp;
$res = json_decode($resp, true);
$vendor = $res['data'] ?? null; 
if($res["res"] != 'success' or $vendor == null ){
  // die('Wrong Id');
}

// use $vendor['column name'];
$cfirstnamedb = $vendor['company'];
$cfirstnamedb = explode(" ", $cfirstnamedb)[0];
$cfirstnamedb = strtolower($cfirstnamedb);

if ($cfirstnamedb != $cfirstname){
   // echo "Invalid Url";
   // die;
   // do nothing for now
}
?>

