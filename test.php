<?php
require __DIR__ . '/vendor/autoload.php';

$popcat = new Keylogic\Popcatwrapper\Main();

echo $popcat->element('He');
echo $popcat->imdb('The bee movie');
echo $popcat->screenshot('https://google.com');
echo 'Tests completed!';