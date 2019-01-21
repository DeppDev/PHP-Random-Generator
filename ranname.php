<?php
/**
 * gituser: JonathanMackie
 * Date: 21-01-2019
 * Time: 14:22
 * PHP Random Generator
 * Can be read by postman
 */

require 'PHPRandomGenerator.php';
use JMackie\PHPRandomGenerator\GeneratorFunctions as JM;

if (isset($_GET['type']))
{
  $ptype = $_GET['type'];
}
else
{
  $ptype = "help";
}




if(empty($ptype)) {
    echo "nothing";
}

//  nouns
$nounsAlias = array('Nouns','N','NounsOnly');

if(in_array($ptype,$nounsAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $nouns = array();
    $numberofnouns = $_GET['num'];
    if ($numberofnouns < 100001) {
      foreach (range(1, $numberofnouns) as $curnum) {
        $nouns["Nouns".$curnum] = JM::nouns();
      }
      header('Content-Type: application/json');
      $nounsjson = json_encode($nouns);
      print_r ($nounsjson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $nounsers = [
    "Nouns1" => JM::nouns(),
  ];
  header('Content-Type: application/json');
  $nounsersjson = json_encode($nounsers);
  print_r ($nounsersjson);
  }
}

//  adjectives
$adjectivesAlias = array('Adjectives','A','AdjectivesOnly');

if(in_array($ptype,$adjectivesAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $adjectives = array();
    $numberofadjectives = $_GET['num'];
    if ($numberofadjectives < 100001) {
      foreach (range(1, $numberofadjectives) as $curnum) {
        $adjectives["Adjectives".$curnum] = JM::adjectives();
      }
      header('Content-Type: application/json');
      $adjectivesjson = json_encode($adjectives);
      print_r ($adjectivesjson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $adjectivesers = [
    "Adjectives" => JM::adjectives(),
  ];
  header('Content-Type: application/json');
  $adjectivesersjson = json_encode($adjectivesers);
  print_r ($adjectivesersjson);
  }
}

//  male first name
$MaleFirstAlias = array('MaleFirstName','MFN','MaleOnly');

if(in_array($ptype,$MaleFirstAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $malefirstname = array();
    $numberofmalefirstname = $_GET['num'];
    if ($numberofmalefirstname < 100001) {
      foreach (range(1, $numberofmalefirstname) as $curnum) {
        $malefirstname["MaleFirstName".$curnum] = JM::malefirstname();
      }
      header('Content-Type: application/json');
      $malefirstnamejson = json_encode($malefirstname);
      print_r ($malefirstnamejson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $malefirstnamers = [
    "MaleFirstName1" => JM::malefirstname(),
  ];
  header('Content-Type: application/json');
  $malefirstnamersjson = json_encode($malefirstnamers);
  print_r ($malefirstnamersjson);
  }
}

//  female first name
$FemaleFirstAlias = array('FemaleFirstName','FFN','FemaleOnly');

if(in_array($ptype,$FemaleFirstAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $femalefirstname = array();
    $numberoffemalefirstname = $_GET['num'];
    if ($numberoffemalefirstname < 100001) {
      foreach (range(1, $numberoffemalefirstname) as $curnum) {
        $femalefirstname["FemaleFirstName".$curnum] = JM::femalefirstname();
      }
      header('Content-Type: application/json');
      $femalefirstnamejson = json_encode($femalefirstname);
      print_r ($femalefirstnamejson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $femalefirstnamers = [
    "FemaleFirstName1" => JM::femalefirstname(),
  ];
  header('Content-Type: application/json');
  $femalefirstnamersjson = json_encode($femalefirstnamers);
  print_r ($femalefirstnamersjson);
  }
}

//  female first name
$LastAlias = array('LastName','LN','LastOnly');

if(in_array($ptype,$LastAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $lastname = array();
    $numberoflastname = $_GET['num'];
    if ($numberoflastname < 100001) {
      foreach (range(1, $numberoflastname) as $curnum) {
        $lastname["LastName".$curnum] = JM::lastname();
      }
      header('Content-Type: application/json');
      $lastnamejson = json_encode($lastname);
      print_r ($lastnamejson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $lastnamers = [
    "LastName1" => JM::lastname(),
  ];
  header('Content-Type: application/json');
  $lastnamersjson = json_encode($lastnamers);
  print_r ($lastnamersjson);
  }
}

//  full female name
$FemaleAlias = array('FemaleName','FN', 'FemaleFullName');

if(in_array($ptype,$FemaleAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $femalename = array();
    $numberoffemalename = $_GET['num'];
    if ($numberoffemalename < 100001) {
      foreach (range(1, $numberoffemalename) as $curnum) {
      $temp = array("FemaleName".$curnum => array(
          "FirstName" => JM::femalefirstname(),
          "LastName" => JM::lastname(),
      ));
      array_push($femalename, $temp);
      }
      header('Content-Type: application/json');
      $femalenamejson = json_encode($femalename);
      print_r ($femalenamejson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $femalenamers = [
    "FemaleName1" => array(
      "FirstName" => JM::femalefirstname(),
      "LastName" => JM::lastname(),
    )
  ];
  header('Content-Type: application/json');
  $femalenamersjson = json_encode($femalenamers);
  print_r ($femalenamersjson);
  }
}

//  male full name
$MaleAlias = array('MaleName','MN','MaleFullName');

if(in_array($ptype,$MaleAlias)) {
  //if num
  if (isset($_GET['num'])) {
    $malename = array();
    $numberofmalename = $_GET['num'];
    if ($numberofmalename < 100001) {
      foreach (range(1, $numberofmalename) as $curnum) {
      $temp = array("MaleName".$curnum => array(
          "FirstName" => JM::malefirstname(),
          "LastName" => JM::lastname(),
      ));
      array_push($malename, $temp);
      }
      header('Content-Type: application/json');
      $malenamejson = json_encode($malename);
      print_r ($malenamejson);
    }
    else {
      $warnings = [
        "ERROR" => "You can't have more than 100000 names",
        "Why?" => "Because my server can take only so much traffic",
        "And" => "Because it can crash the client"
      ];
      header('Content-Type: application/json');
      $warningsjson = json_encode($warnings);
      print_r ($warningsjson);
    }

  } else {
  $malenamers = [
    "MaleName1" => array(
      "FirstName" => JM::malefirstname(),
      "LastName" => JM::lastname(),
    )
  ];
  header('Content-Type: application/json');
  $malenamersjson = json_encode($malenamers);
  print_r ($malenamersjson);
  }
}

$helpmeplease = array('help','HELP','helpme');

if(in_array($ptype,$helpmeplease)) {
  $help = array(
    "Who" => array(
    "gituser" => "JonathanMackie",
    "Date" => "21-01-2019",
    "Time" => "14:01",
    "Name" => "Random Generator",),
    "What can it do" => array(
    "." => "Supports creating random male, female names, nouns & adjectives",
    ".." => "Can be read by postman",
    "Options:" => array(
    "?type=FFN" => "For Female First Name",
    "?type=MFN" => "For Male First Name",
    "?type=LN" => "For Last Name",
    "?type=FN" => "For Female Name",
    "?type=MN" => "For Male Name",
    "?type=A" => "For Randome adjectives",
    "?type=N" => "For Random Nouns",
    "?type=help" => " <==== You are here",
    "?num=(number here)" => "Can be mixed with api or pass will return how many you ask for",),
  ));
  header('Content-Type: application/json');
  $helpjson = json_encode($help);
  print_r ($helpjson);
}

 ?>
