<?php
require __DIR__ . '/vendor/autoload.php';

$popcat = new Keylogic\Popcatwrapper\Main();

$elementResult = $popcat->element('He');
if (isset($elementResult->name)) {
    echo "Element Name: " . $elementResult->name . "\n";
    echo "Element Symbol: " . $elementResult->symbol . "\n";
} else {
    echo "Error: " . $elementResult->error . "\n";
}

$imdbResult = $popcat->imdb('The bee movie');
if (isset($imdbResult->Title)) {
    echo "Movie Title: " . $imdbResult->Title . "\n";
    echo "IMDB Rating: " . $imdbResult->imdbRating . "\n";
} else {
    echo "Error: " . $imdbResult->error . "\n";
}

echo $popcat->screenshot('https://google.com');

echo 'Tests completed!';
?>
