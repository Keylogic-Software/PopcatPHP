<?php
require __DIR__ . '/vendor/autoload.php';

$popcat = new Keylogic\Popcatwrapper\Main();

$popcat->element('He');
$popcat->imdb('The bee movie');
