<?php

include_once 'env.php';

$ts = time();
$public_key = getenv('public_key');
$private_key = getenv('private_key');
$hash = md5($ts . $private_key . $public_key);


$url = "http://gateway.marvel.com/v1/public/characters?ts=$ts&apikey=$public_key&hash=$hash&name=hulk";


 
$result = file_get_contents( $url );

echo $result;