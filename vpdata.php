<?php

$url= $_SERVER['REQUEST_URI'];    
$vid = explode("-", explode("/", $url)[1])[1];
$cfirstname = explode("-", explode("/", $url)[0])[0];

echo $cfirstname ;
If(!$vid OR !$cfirstname){
echo "Invalid Url";
die;
}

$url = "https://api.asknavigator.com/?o=vendors_view&a=read&i=".$vid;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);

$res = json_decode($resp, true);
$vendor = $res['data'] ?? null; 
if($res["res"] != 'success' or $vendor == null ){
  // die('Wrong Id');
}

// use $vendor['column name'];

echo $vendor['capacity'];
?>

