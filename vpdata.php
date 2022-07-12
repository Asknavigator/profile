<?php

$vid= $_GET['v'];

If(!$vid){
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

$res = json_encode($resp, true);
$vendor = $res['data'] ?? null; 
if($res["res"] != 'success' or $vendor == null ){
  // die('Wrong Id');
}

// use $vendor['column name'];

echo $res['name'];
?>

