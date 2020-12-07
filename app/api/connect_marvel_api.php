<?php

include_once 'env.php';

$ts = time();
$public_key = getenv('public_key');
$private_key = getenv('private_key');
$hash = md5($ts . $private_key . $public_key);
$search = $_GET['search'];

// character
$returnedCharacters = "http://gateway.marvel.com/v1/public/characters?ts=$ts&apikey=$public_key&hash=$hash&name=$search";

$apiCharacters = file_get_contents( $returnedCharacters );
$apiCharacters = json_decode($apiCharacters);

// comic
$comicUrl = $apiCharacters->data->results[0]->comics->items[rand(0, 15)]->resourceURI;
$returnedComic = "$comicUrl?ts=$ts&apikey=$public_key&hash=$hash";

$apiComic = file_get_contents( $returnedComic );
$apiComic = json_decode($apiComic);

// stories
$storiesUrl = $apiCharacters->data->results[0]->stories->items[rand(0, 15)]->resourceURI;
$returnStory = "$storiesUrl?ts=$ts&apikey=$public_key&hash=$hash";

$apiStories = file_get_contents( $returnStory );
$apiStories = json_decode($apiStories);

// events
$eventsUrl = $apiCharacters->data->results[0]->events->items[rand(0, 15)]->resourceURI;
$returnedEvent = "$eventsUrl?ts=$ts&apikey=$public_key&hash=$hash";

$apiEvent = file_get_contents( $returnedEvent );
$apiEvent = json_decode($apiEvent);

// series
$seriesUrl = $apiCharacters->data->results[0]->series->items[rand(0, 15)]->resourceURI;
$returnedSeries = "$seriesUrl?ts=$ts&apikey=$public_key&hash=$hash";

$apiSeries = file_get_contents( $returnedSeries );
$apiSeries = json_decode($apiSeries);