<?php

/**
 * gituser: JonathanMackie
 * Date: 17-01-2019
 * Time: 10:30
 * PHP Password Gen & API key Gen
 * Can be read by postman
 */

//if type isn't set, ignores. This is to stop a index warning from breaking the json
if (isset($_GET['type']))
{
  $whattogen = $_GET['type'];
}
else
{
  $whattogen = "pass";
}

switch($whattogen) {

default:
break;

//  password part
case "pass";
function randomPassword() {
    $alphabet =
<<<EOT
abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*/'`~,;:.
EOT;
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 30; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
//if num
if (isset($_GET['num'])) {
    $dyepass = array();
    $numberofpasswords = $_GET['num'];
    if ($numberofpasswords < 100001) {
      foreach (range(1, $numberofpasswords) as $curnum) {
        $dyepass["password".$curnum] = randomPassword();
      }
      header('Content-Type: application/json');
      $dyepassjson = json_encode($dyepass);
      print_r ($dyepassjson);
    }
    else {
      $passworders = [
        "ERROR" => "You can't have more than 100000 passwords",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $passwordersjson = json_encode($passworders);
      print_r ($passwordersjson);
    }

} else {
  $passworders = [
    "password1" => randomPassword(),
  ];
  header('Content-Type: application/json');
  $passwordersjson = json_encode($passworders);
  print_r ($passwordersjson);
}
break;

case "api":
// api stuff
function gen_uuid() {
  return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
      mt_rand( 0, 0xffff ),
      mt_rand( 0, 0x0fff ) | 0x4000,
      mt_rand( 0, 0x3fff ) | 0x8000,
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
  );
}
//if num
if (isset($_GET['num'])) {
  $apipass = array();
  $numberofapis = $_GET['num'];
  if ($numberofapis < 100001) {
    foreach (range(1, $numberofapis) as $curnum) {
      $apipass["APIUser".$curnum] = gen_uuid();
      $apipass["APIPass".$curnum] = gen_uuid();
    }
    header('Content-Type: application/json');
    $apipassjson = json_encode($apipass);
    print_r ($apipassjson);
  }
  else {
    $warnings = [
      "ERROR" => "You can't have more than 100000 apis",
      "Why?" => "Because my server can take only so much traffic",
      "And" => "Because it can crash the client"
    ];
    header('Content-Type: application/json');
    $warningsjson = json_encode($warnings);
    print_r ($warningsjson);
  }

} else {
$apiers = [
  "APIUser1" => gen_uuid(),
  "APIPass1" => gen_uuid(),
];
header('Content-Type: application/json');
$apiersjson = json_encode($apiers);
print_r ($apiersjson);
}
break;
// Help Command
case "help":
  $help = array(
    "Who" => array(
    "gituser" => "JonathanMackie",
    "Date" => "17-01-2019",
    "Time" => "10:30",
    "Name" => "Random Generator",),
    "What can it do" => array(
    "." => "Supports creating high level secure password and standard api keys. More to come",
    ".." => "Can be read by postman",
    "...." => "100% secure",
    "...." => "0 logs kept",
    "....." => "Keep things internal don't risk personal & private data",),
    "Options:" => array(
    "?type=pass" => "For passwords",
    "?type=api" => "For API",
    "?type=help" => " <==== You are here",
    "?num=(number here)" => "Can be mixed with api or pass will return how many you ask for",),
  );
  header('Content-Type: application/json');
  $helpjson = json_encode($help);
  print_r ($helpjson);
break;
}


?>
