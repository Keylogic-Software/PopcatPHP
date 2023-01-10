<?php

namespace Keylogic\Popcatwrapper;

class Main {
  public static function makeServer(string $name, boolean $default = true) {
    if ($default) {
      $name = str_replace(' ', '+', $name);
      return string "Welcome+To+{$name}!";
    } else {
      return string str_replace(' ', '+', $name);
    }
  }
  
  public static function welcome(string $avatar, string $name, string $server, string $membercount, string $background = 'https://cdn.discordapp.com/attachments/850808002545319957/859359637106065408/bg.png'): string {
    $newmembercount = $membercount + 1;
    $servername = str_replace(" ", "+", $servername);
    $name = str_replace(" ", "+", $name);
    $avatar = str_replace(" ", "+", $avatar);
    return "https://api.popcat.xyz/welcomecard?background={$background}&text1={$name}&text2={$server}&text3=Member+{$newmembercount}&avatar={$avatar}";
  }
  
  public static function color(string $hex): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/color/".$hex));
  }
  public static function lyrics(string $songname): object {
    $songname = str_replace(" ", "+", $songname);
    return json_decode(file_get_contents("https://api.popcat.xyz/lyrics?song=".$songname));
  }
  public static function element(string $element): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/periodic-table?element=".$element));
  }
  public static function imdb(string $movie): object {
    $movie = str_replace(" ", "+", $movie);
    return json_decode(file_get_contents("https://api.popcat.xyz/imdb?q=".$movie));
  }
  public static function screenshot(string $url): string {
    $url = str_replace(" ", "+", $url);
    return "https://api.popcat.xyz/screenshot?url=".$url;
  }
  public static function randomcolor(): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/randomcolor"));
  }
  public static function steam(string $gamename): object {
    $gamename = str_replace(" ", "+", $gamename);
    return json_decode(file_get_contents("https://api.popcat.xyz/steam?q=".$gamename));
  }
  public static function sadcat(string $text): string {
    $test = str_replace(" ", "+", $text);
    return "https://api.popcat.xyz/sadcat?text=".$test;
  }
  public static function oogway(string $text): string {
    $test = str_replace(" ", "+", $text);
    return "https://api.popcat.xyz/oogway?text=".$test;
  }
  public static function communist(string $image): string {
    return "https://api.popcat.xyz/communism?image=".$image;
  }
  public static function car(): object {
    return json_decode(file_get_contents('https://api.popcat.xyz/car'));
  }
  public static function chatbot(string $message): string {
    $message = str_replace(" ", "+", $message);
    return json_decode(file_get_contents("https://api.popcat.xyz/chatbot?msg=".$message))->response;
  }
  public static function pooh(string $text1, string $text2): string {
    $text1 = str_replace(" ", "+", $text1);
    $text2 = str_replace(" ", "+", $text2);
    return "https://api.popcat.xyz/pooh?text1=".$text1."&text2=".$text2;
  }
  public static function showerthought(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/showerthoughts'))->result;
  }
  public static function quote(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/quote'))->quote;
  }
  public static function wanted(string $image): string {
    return "https://api.popcat.xyz/wanted?image=".$image;
  }
  public static function reddit(string $subreddit): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/subreddit/".$subreddit));
  }
  public static function github(string $username): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/github/".$username));
  }
  public static function weather(string $loc): array {
    $loc = str_replace(" ", "+", $loc);
    return json_decode(file_get_contents("https://api.popcat.xyz/weather?q=".$loc));
  }
  public static function whowouldwin(string $img1, string $img2): string {
    return "https://api.popcat.xyz/whowouldwin?image1=".$img1."&image2=".$img2;
  }
  public static function gun(string $image): string {
    return "https://api.popcat.xyz/gun?image=".$image;
  }
  public static function lulcat(string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(\file_get_contents("https://api.popcat.xyz/lulcat?text=".$text))->text;
  }
  public static function opinion(string $image, string $text): string {
    $text = str_replace(" ", "+", $text);
    return "https://api.popcat.xyz/opinion?image=".$image."&text=".$text;
  }
  public static function drake(string $text, string $text2): string {
    $text = str_replace(" ", "+", $text);
    $text2 = str_replace(" ", "+", $text2);
    return "https://api.popcat.xyz/drake?text1=".$text."&text2=".$text2;
  }
  public static function instagram(string $username): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/instagram?user=".$username));
  }
  public static function npm(string $package): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/npm?q=".$package));
  }
  public static function fact(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/fact'))->fact;
  }
  public static function ship(string $user1, $user2): string {
    return "https://api.popcat.xyz/ship?user1=".$user1."&user2=".$user2;
  }
  public static function joke(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/joke'))->joke;
  }
  public static function biden(string $text): string {
    $text = str_replace(" ", "+", $text);
    return "https://api.popcat.xyz/biden?text=".$text;
  }
  public static function pikachu(string $text): string {
    $text = str_replace(" ", "+", $text);
    return "https://api.popcat.xyz/pikachu?text=".$text;
  }
  public static function mock(string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents("https://api.popcat.xyz/mock?text=".$text))->text;
  }
  public static function wyr(string $text): object {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents("https://api.popcat.xyz/wyr"));
  }
  public static function meme(): object {
    return json_decode(file_get_contents('https://api.popcat.xyz/meme'));
  }
  public static function colorify(string $image): string {
    return "https://api.popcat.xyz/colorify?image=".$image;
  }
  public static function drip(string $image): string {
    return "https://api.popcat.xyz/drip?image=".$image;
  }
  public static function clown(string $image): string {
    return "https://api.popcat.xyz/clown?image=".$image;
  }
  public static function translate(string $lang, string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents("https://api.popcat.xyz/translate?to=".$lang."&text=".$text))->transalted;
  }
  public static function binary(string $mode, string $text): string {
    if ($mode = "encode") {
      $text = str_replace(" ", "+", $text);
      return json_decode(file_get_contents("https://api.popcat.xyz/encode?text=".$text))->binary;
    }
    if ($mode = "decode") {
      $text = str_replace(" ", "+", $text);
      return json_decode(file_get_contents("https://api.popcat.xyz/decode?binary=".$text))->text;
    }
  }
  public static function uncover(string $image): string {
    return "https://api.popcat.xyz/uncover?image=".$image;
  }
  public static function ad(string $image): string {
    return "https://api.popcat.xyz/ad?image=".$image;
  }
  public static function blur(string $image): string {
    return "https://api.popcat.xyz/blur?image=".$image;
  }
  public static function invert(string $image): string {
    return "https://api.popcat.xyz/invert?image=".$image;
  }
  public static function greyscale(string $image): string {
    return "https://api.popcat.xyz/greyscale?image=".$image;
  }
  public static function eightball(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/eightball'))->answer;
  }
  public static function playstore(string $app): object {
    $app = str_replace(" ", "+", $app);
    return json_decode(file_get_contents('https://api.popcat.xyz/playstore?q='.$app));
  }
  public static function itunes(string $q): object {
    $q = str_replace(" ", "+", $q);
    return json_decode(file_get_contents('https://api.popcat.xyz/itunes?q='.$q));
  }
  public static function reverse(string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents('https://api.popcat.xyz/reverse?text='.$text))->text;
  }
  public static function jokeoverhead(string $image): string {
    return "https://api.popcat.xyz/jokeoverhead?image=".$image;
  }
  public static function doublestruck(string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents('https://api.popcat.xyz/doublestruck?text='.$text))->text;
  }
  public static function mnm(string $image): string {
    return "https://api.popcat.xyz/mnm?image=".$image;
  }
  public static function pet(string $image): string {
    return "https://api.popcat.xyz/pet?image=".$image;
  }
  public static function texttomorese(string $text): string {
    $text = str_replace(" ", "+", $text);
    return json_decode(file_get_contents('https://api.popcat.xyz/texttomorese?text='.$text))->morse;
  }
  public static function facts(string $text): string {
    $text = str_replace(" ", "+", $text);
    return 'https://api.popcat.xyz/facts?text='.$text;
  }
  public static function alert(string $text): string {
    $text = str_replace(" ", "+", $text);
    return 'https://api.popcat.xyz/alert?text='.$text;
  }
  public static function caution(string $text): string {
    $text = str_replace(" ", "+", $text);
    return 'https://api.popcat.xyz/caution?text='.$text;
  }
  public static function pickupline(): string {
    return json_decode(file_get_contents('https://api.popcat.xyz/pickuplines'))->pickupline;
  }
}
