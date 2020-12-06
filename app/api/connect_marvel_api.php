<?php

include_once 'env.php';

$ts = time();
$public_key = getenv('public_key');
$private_key = getenv('private_key');
$hash = md5($ts . $private_key . $public_key);
$search = $_GET['search'];


$returnedCharacters = "http://gateway.marvel.com/v1/public/characters?ts=$ts&apikey=$public_key&hash=$hash&name=$search";


 
$apiCharacters = file_get_contents( $returnedCharacters );
$apiCharacters = json_decode($apiCharacters);
