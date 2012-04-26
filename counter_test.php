<?php

require __DIR__ . '/vendor/autoload.php';

$counter = new Counter();

$counter['A'] += 1;
$counter['A'] += 1;
$counter['A'] += 1;
$counter['B'] += 1;
$counter['B'] += 1;
$counter['C'] += 1;

print_r($counter->getArray());
