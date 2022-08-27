<?php
require __DIR__ . '/vendor/autoload.php';

// do not use in production, tests only
//require __DIR__ . '/src/Popcatwrapper.php';

use Keylogic\Popcatwrapper\Main;

$popcat = new Keylogic\Popcatwrapper\Main();

print_r($popcat->imdb('iron man'));