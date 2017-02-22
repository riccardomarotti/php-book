<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$csv = \League\Csv\Reader::createFromPath($argv[1]);
foreach($csv as $csvRow) {
    try {
        $httpResponse = $client->get($csvRow[0]);
    } catch(\Exception $e) {
	echo $csvRow[0] . PHP_EOL;
    }
}
