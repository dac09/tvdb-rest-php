<?php
header('Access-Control-Allow-Origin: *');

include __DIR__.'/src/TvDb/CurlException.php';
include __DIR__.'/src/TvDb/Client.php';
include __DIR__.'/src/TvDb/Serie.php';
include __DIR__.'/src/TvDb/Banner.php';
include __DIR__.'/src/TvDb/Episode.php';

use TvDb\Client;

define('TVDB_URL', 'http://thetvdb.com');
define('TVDB_API_KEY', ' your-api-key-here ');

$tvdb = new Client(TVDB_URL, TVDB_API_KEY);
?>