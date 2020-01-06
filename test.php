<?php 

require_once('vendor/autoload.php');

use Symfony\Component\DomCrawler\Crawler;

$htmlDisabled = file_get_contents('form_disabled.html');
$crawlerDisabled = new Crawler($htmlDisabled, 'http://localhost/');
print_r($crawlerDisabled->filter('form')->form()->getValues()); // Will return an empty array
