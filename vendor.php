<?php


function parse_nameid(&$ven_id, &$first_name)
{
  $url = $_SERVER['REQUEST_URI'];

  $ven_id = explode("-", explode("/", $url)[1])[1];
  $first_name = explode("-", explode("/", $url)[1])[0];

  if (!$ven_id or !$first_name) {
    echo "Invalid Url";
    die;
  }
}

function main()
{
  include_once("php/Http.php");
  $ven_id = null;
  $first_name = null;
  parse_nameid($ven_id, $first_name);

  $url = "https://api.asknavigator.com/?o=vendors_view&a=read&i=$ven_id";
  $resp = Http->get($url);

  echo $resp;
  $res = json_decode($resp, true);
  $vendor = $res['data'] ?? null;

  if ($res["res"] != 'success' or $vendor == null) {
  // die('Wrong Id');
  }

  // use $vendor['column name'];
  $cfirstnamedb = $vendor['company'];
  $cfirstnamedb = explode(" ", $cfirstnamedb)[0];
  $cfirstnamedb = strtolower($cfirstnamedb);

  if ($cfirstnamedb != $cfirstname) {
  // echo "Invalid Url";
  // die;
  // do nothing for now
  }

  return $vendor;

}

try {
  // $vendor = main();
}
catch (\Throwable $th) {
  echo $th->getMessage();
}

?>

