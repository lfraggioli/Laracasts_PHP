<?php

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

$ninjas = new Collection(
    [['name' => 'Naruto'], ['name' => 'Sasuke'], ['name' => 'Sakura']]
);
