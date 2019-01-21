<?php

/**
 * gituser: JonathanMackie
 * Date: 21-01-2019
 * Time: 16:47
 * Example of JonathanMackie/PHP-Random-Generator
 */

require 'PHPRandomGenerator.php';
use JMackie\PHPRandomGenerator\GeneratorFunctions as JM;

//Random Male First Name
echo "Random Male First Name: ".JM::malefirstname()."\n";
//Random Female First Name
echo "Random Female First Name: ".JM::femalefirstname()."\n";
//Random Lastname
echo "Random Lastname: ".JM::lastname()."\n";
//Random Adjectives
echo "Random Adjectives: ".JM::adjectives()."\n";
//Random Noun
echo "Random Noun: ".JM::nouns()."\n";
//Random API key generation
echo "Random API Key: ".JM::gen_uuid()."\n";
//Random pass arguments (LENGH OF PASSWORD, USE LOWERCASE LETTERS [TRUE OR FALSE], USE UPPERCASE LETTERS [TRUE OR FALSE], USE NUMBERS [TRUE OR FALSE], USE SYMBOLS [TRUE OR FALSE],)
echo "Random password: ".JM::randomPassword(50,TRUE,TRUE,FALSE,TRUE)."\n";
?>
