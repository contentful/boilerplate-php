<?php

use Contentful\Delivery\Client;

require_once __DIR__ . '/vendor/autoload.php';

$spaceID = 'cfexampleapi';
$accessToken = 'b4c0n73n7fu1';

$client = new Client($accessToken, $spaceID);

$entries = $client->getEntries();

if (count($entries) === 0) {
    echo "Ups, you got no entries in your space. How about creating some?<br />";
}
else {
    echo "You have entries with these IDs:<br />";
    foreach ($entries as $entry) {
        echo $entry->getId() . "<br />";
    }
}
