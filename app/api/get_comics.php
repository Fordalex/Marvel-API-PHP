<?php
session_start();

include_once 'env.php';

$ts = time();
$public_key = getenv('public_key');
$private_key = getenv('private_key');
$hash = md5($ts . $private_key . $public_key);
$search = $_SESSION['search'];

// character
$returnedCharacters = "http://gateway.marvel.com/v1/public/characters?ts=$ts&apikey=$public_key&hash=$hash&name=$search";

$apiCharacters = file_get_contents( $returnedCharacters );
$apiCharacters = json_decode($apiCharacters);

// comic
$comicUrl = $apiCharacters->data->results[0]->comics->collectionURI;
$returnedComic = "$comicUrl?ts=$ts&apikey=$public_key&hash=$hash";

$apiComic = file_get_contents( $returnedComic );
$apiComic = json_decode($apiComic);

