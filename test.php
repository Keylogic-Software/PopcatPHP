<?php
require __DIR__ . '/vendor/autoload.php';

$popcat = new Keylogic\Popcatwrapper\Main();

echo $popcat->element('He') . PHP_EOL;
echo $popcat->imdb('The bee movie') . PHP_EOL;
echo $popcat->screenshot('https://google.com') . PHP_EOL;
echo 'Tests completed!';
?>
