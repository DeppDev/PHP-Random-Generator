<?php

/**
 * gituser: JonathanMackie
 * Date: 21-01-2019
 * Time: 16:47
 * PHP Random Generator
 * Can be read by postman
 */

namespace JMackie\PHPRandomGenerator;

class GeneratorFunctions {
  //adds male first name file
  public function malefirstname()
  {
    $direct = getcwd();
    $directfirstmalename = $direct."/static/malefirstnames.txt";
    $male_first_filename = file($directfirstmalename);
    $trimmed_array=array_map('trim',$male_first_filename);
    $random_male_first_name=array_rand($male_first_filename);
    $male_first_filenamestring = trim(preg_replace('/\s+/', ' '  , $male_first_filename[$random_male_first_name]));
    $male_first_filenamestring = preg_replace('/\s+/', '', $male_first_filenamestring);
    return $male_first_filenamestring;
  }
  //adds female first name file
  public function femalefirstname()
  {
    $direct = getcwd();
    $directfirstfemalename = $direct."/static/femalefirstnames.txt";
    $female_first_filename = file($directfirstfemalename);
    $trimmed_array=array_map('trim',$female_first_filename);
    $random_female_first_name=array_rand($female_first_filename);
    $female_first_filenamestring = trim(preg_replace('/\s+/', ' '  , $female_first_filename[$random_female_first_name]));
    $female_first_filenamestring = preg_replace('/\s+/', '', $female_first_filenamestring);
    return $female_first_filenamestring;
  }

  //adds last name file
  public function lastname()
  {
    $direct = getcwd();
    $directlastname = $direct."/static/lastnames.txt";
    $lastfilename = file($directlastname);
    $trimmed_array=array_map('trim',$lastfilename);
    $random_last_name=array_rand($lastfilename);
    $last_filenamestring = trim(preg_replace('/\s+/', ' '  , $lastfilename[$random_last_name]));
    $last_filenamestring = preg_replace('/\s+/', '', $last_filenamestring);
    return $last_filenamestring;
  }

  //adds adjectives file
  public function adjectives()
  {
    $direct = getcwd();
    $directadjectives = $direct."/static/adjectives.txt";
    $lastadjectives = file($directadjectives);
    $trimmed_array=array_map('trim',$lastadjectives);
    $random_adjectives=array_rand($lastadjectives);
    $adjectives_filenamestring = trim(preg_replace('/\s+/', ' '  , $lastadjectives[$random_adjectives]));
    $adjectives_filenamestring = preg_replace('/\s+/', '', $adjectives_filenamestring);
    return $adjectives_filenamestring;
  }

  //adds nouns file
  public function nouns()
  {
    $direct = getcwd();
    $directnouns = $direct."/static/nouns.txt";
    $lastnouns = file($directnouns);
    $trimmed_array=array_map('trim',$lastnouns);
    $random_nouns=array_rand($lastnouns);
    $nouns_filenamestring = trim(preg_replace('/\s+/', ' '  , $lastnouns[$random_nouns]));
    $nouns_filenamestring = preg_replace('/\s+/', '', $nouns_filenamestring);
    return $nouns_filenamestring;
  }

  //Generates API keys
  function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
  }

  //Generates Passwords
  function randomPassword($lengh = 30, $uselower = TRUE, $useupper = TRUE, $usenumbers = TRUE, $usesymbols = TRUE) {

    $errorcatcher = 0;
    $errorerrorerror = "";

      if ($uselower == TRUE) {
        $abcalphabetlower = "abcdefghijklmnopqrstuwxyz";
        $errorcatcher = 1;
      } else {
        $abcalphabetlower = "";
      }
      if ($useupper == TRUE) {
        $abcalphabetupper = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
        $errorcatcher = 1;
      } else {
        $abcalphabetupper = "";
      }
      if ($usenumbers == TRUE) {
        $numbersalphabet = "1234567890";
        $errorcatcher = 1;
      } else {
        $numbersalphabet = "";
      }
      if ($usesymbols == TRUE) {
        $symbolalphabet = "!@#$%^&*/'`~,;:.";
        $errorcatcher = 1;
      } else {
        $symbolalphabet = "";
      }
      if ($errorcatcher == 0) {
        $errorerrorerror = "You can't have a blank password";
        return $errorerrorerror;
        exit;
      }

      $alphabet = $abcalphabetlower.$abcalphabetupper.$numbersalphabet.$symbolalphabet;
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;
      for ($i = 0; $i < $lengh; $i++) {
          $n = rand(0, $alphaLength);
          $pass[] = $alphabet[$n];
      }
      return implode($pass);
  }
}

?>
