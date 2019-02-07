<?php
require __DIR__ . '/../vendor/autoload.php';

//$client = new Predis\Client('');
//$client->set('foo', 'bar');
//$value = $client->get('foo');
//echo $value;

$r = 'https://www.google.com/search?safe=strict&biw=1440&bih=648&tbs=isz%3Ai%2Citp%3Aface&tbm=isch&sa=1&ei=TWtVXO3YCcOv9QOEopiwBw&q=blonde&oq=blonde';

$r = file_get_contents($r);