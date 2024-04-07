<?php

namespace Keylogic\Popcatwrapper;

class Main {
    private $baseUrl = "https://api.popcat.xyz/";

    public function welcome(string $avatar, string $name, string $servername, string $membercount): string {
        if (empty($avatar) || empty($name) || empty($servername) || empty($membercount)) {
            return "Error: Missing required parameter(s).";
        }

        $newmembercount = $membercount + 1;
        $servername = str_replace(" ", "+", $servername);
        $name = str_replace(" ", "+", $name);
        $avatar = str_replace(" ", "+", $avatar);

        return $this->baseUrl . "welcomecard?background=https://cdn.discordapp.com/attachments/850808002545319957/859359637106065408/bg.png&text1=" . $name . "&text2=Welcome+To+" . $servername . "&text3=Member+" . $newmembercount . "&avatar=" . $avatar;
    }

    public function color(string $hex): object {
        if (empty($hex)) {
            return (object) ["error" => "Missing required parameter: hex."];
        }

        return json_decode(file_get_contents($this->baseUrl . "color/" . $hex));
    }

    public function lyrics(string $songname): object {
        if (empty($songname)) {
            return (object) ["error" => "Missing required parameter: songname."];
        }

        $songname = str_replace(" ", "+", $songname);
        return json_decode(file_get_contents($this->baseUrl . "lyrics?song=" . $songname));
    }

    public function element(string $element): object {
        if (empty($element)) {
            return (object) ["error" => "Missing required parameter: element."];
        }

        return json_decode(file_get_contents($this->baseUrl . "periodic-table?element=" . $element));
    }

    public function imdb(string $movie): object {
        if (empty($movie)) {
            return (object) ["error" => "Missing required parameter: movie."];
        }

        $movie = str_replace(" ", "+", $movie);
        return json_decode(file_get_contents($this->baseUrl . "imdb?q=" . $movie));
    }

    public function screenshot(string $url): string {
        if (empty($url)) {
            return "Error: Missing required parameter: url.";
        }

        $url = str_replace(" ", "+", $url);
        return $this->baseUrl . "screenshot?url=" . $url;
    }

    public function randomcolor(): object {
      return json_decode(file_get_contents($this->baseUrl . "randomcolor"));
    }
  
    public function steam(string $gamename): object {
        if (empty($gamename)) {
            return (object) ["error" => "Missing required parameter: gamename."];
        }
    
        $gamename = str_replace(" ", "+", $gamename);
        return json_decode(file_get_contents($this->baseUrl . "steam?q=" . $gamename));
    }
    
    public function sadcat(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "sadcat?text=" . $text;
    }
    
    public function oogway(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "oogway?text=" . $text;
    }
    
    public function communist(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "communism?image=" . $image;
    }
    
    public function car(): object {
        return json_decode(file_get_contents($this->baseUrl . "car"));
    }
    
    public function chatbot(string $message): string {
        if (empty($message)) {
            return "Error: Missing required parameter: message.";
        }
    
        $message = str_replace(" ", "+", $message);
        return json_decode(file_get_contents($this->baseUrl . "chatbot?msg=" . $message))->response;
    }
    
    public function pooh(string $text1, string $text2): string {
        if (empty($text1) || empty($text2)) {
            return "Error: Missing required parameter(s): text1, text2.";
        }
    
        $text1 = str_replace(" ", "+", $text1);
        $text2 = str_replace(" ", "+", $text2);
        return $this->baseUrl . "pooh?text1=" . $text1 . "&text2=" . $text2;
    }
    
    public function showerthought(): string {
        return json_decode(file_get_contents($this->baseUrl . "showerthoughts"))->result;
    }
    
    public function quote(): string {
        return json_decode(file_get_contents($this->baseUrl . "quote"))->quote;
    }
    
    public function wanted(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "wanted?image=" . $image;
    }
    
    public function reddit(string $subreddit): object {
        if (empty($subreddit)) {
            return (object) ["error" => "Missing required parameter: subreddit."];
        }
    
        return json_decode(file_get_contents($this->baseUrl . "subreddit/" . $subreddit));
    }
    
    public function github(string $username): object {
        if (empty($username)) {
            return (object) ["error" => "Missing required parameter: username."];
        }
    
        return json_decode(file_get_contents($this->baseUrl . "github/" . $username));
    }
    
    public function weather(string $loc): array {
        if (empty($loc)) {
            return (object) ["error" => "Missing required parameter: loc."];
        }
    
        $loc = str_replace(" ", "+", $loc);
        return json_decode(file_get_contents($this->baseUrl . "weather?q=" . $loc));
    }
    
    public function whowouldwin(string $img1, string $img2): string {
        if (empty($img1) || empty($img2)) {
            return "Error: Missing required parameter(s): img1, img2.";
        }
    
        return $this->baseUrl . "whowouldwin?image1=" . $img1 . "&image2=" . $img2;
    }
    
    public function gun(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "gun?image=" . $image;
    }
    
    public function lulcat(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "lulcat?text=" . $text))->text;
    }
    
    public function opinion(string $image, string $text): string {
        if (empty($image) || empty($text)) {
            return "Error: Missing required parameter(s): image, text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "opinion?image=" . $image . "&text=" . $text;
    }
    
    public function drake(string $text, string $text2): string {
        if (empty($text) || empty($text2)) {
            return "Error: Missing required parameter(s): text, text2.";
        }
    
        $text = str_replace(" ", "+", $text);
        $text2 = str_replace(" ", "+", $text2);
        return $this->baseUrl . "drake?text1=" . $text . "&text2=" . $text2;
    }
    
    public function instagram(string $username): object {
        if (empty($username)) {
            return (object) ["error" => "Missing required parameter: username."];
        }
    
        return json_decode(file_get_contents($this->baseUrl . "instagram?user=" . $username));
    }
    
    public function npm(string $package): object {
        if (empty($package)) {
            return (object) ["error" => "Missing required parameter: package."];
        }
    
        return json_decode(file_get_contents($this->baseUrl . "npm?q=" . $package));
    }
    
    public function fact(): string {
        return json_decode(file_get_contents($this->baseUrl . "fact"))->fact;
    }
    
    public function ship(string $user1, $user2): string {
        if (empty($user1) || empty($user2)) {
            return "Error: Missing required parameter(s): user1, user2.";
        }
    
        return $this->baseUrl . "ship?user1=" . $user1 . "&user2=" . $user2;
    }
    
    public function joke(): string {
        return json_decode(file_get_contents($this->baseUrl . "joke"))->joke;
    }
    
    public function biden(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "biden?text=" . $text;
    }
    
    public function pikachu(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "pikachu?text=" . $text;
    }
    
    public function mock(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "mock?text=" . $text))->text;
    }
    
    public function wyr(string $text): object {
        if (empty($text)) {
            return (object) ["error" => "Missing required parameter: text."];
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "wyr"));
    }
    
    public function meme(): object {
        return json_decode(file_get_contents($this->baseUrl . "meme"));
    }
    
    public function colorify(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "colorify?image=" . $image;
    }
    
    public function drip(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "drip?image=" . $image;
    }
    
    public function clown(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "clown?image=" . $image;
    }
    
    public function translate(string $lang, string $text): string {
        if (empty($lang) || empty($text)) {
            return "Error: Missing required parameter(s): lang, text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "translate?to=" . $lang . "&text=" . $text))->transalted;
    }
    
    public function binary(string $mode, string $text): string {
        if (empty($mode) || empty($text)) {
            return "Error: Missing required parameter(s): mode, text.";
        }
    
        if ($mode == "encode") {
            $text = str_replace(" ", "+", $text);
            return json_decode(file_get_contents($this->baseUrl . "encode?text=" . $text))->binary;
        }
    
        if ($mode == "decode") {
            $text = str_replace(" ", "+", $text);
            return json_decode(file_get_contents($this->baseUrl . "decode?binary=" . $text))->text;
        }
    }
    
    public function uncover(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "uncover?image=" . $image;
    }
    
    public function ad(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "ad?image=" . $image;
    }
    
    public function blur(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "blur?image=" . $image;
    }
    
    public function invert(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "invert?image=" . $image;
    }
    
    public function greyscale(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "greyscale?image=" . $image;
    }
    
    public function eightball(): string {
        return json_decode(file_get_contents($this->baseUrl . "eightball"))->answer;
    }
    
    public function playstore(string $app): object {
        if (empty($app)) {
            return (object) ["error" => "Missing required parameter: app."];
        }
    
        $app = str_replace(" ", "+", $app);
        return json_decode(file_get_contents($this->baseUrl . "playstore?q=" . $app));
    }
    
    public function itunes(string $q): object {
        if (empty($q)) {
            return (object) ["error" => "Missing required parameter: q."];
        }
    
        $q = str_replace(" ", "+", $q);
        return json_decode(file_get_contents($this->baseUrl . "itunes?q=" . $q));
    }
    
    public function reverse(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "reverse?text=" . $text))->text;
    }
    
    public function jokeoverhead(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "jokeoverhead?image=" . $image;
    }
    
    public function doublestruck(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "doublestruck?text=" . $text))->text;
    }
    
    public function mnm(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "mnm?image=" . $image;
    }
    
    public function pet(string $image): string {
        if (empty($image)) {
            return "Error: Missing required parameter: image.";
        }
    
        return $this->baseUrl . "pet?image=" . $image;
    }
    
    public function texttomorese(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return json_decode(file_get_contents($this->baseUrl . "texttomorese?text=" . $text))->morse;
    }
    
    public function facts(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "facts?text=" . $text;
    }
    
    public function alert(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "alert?text=" . $text;
    }
    
    public function caution(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "+", $text);
        return $this->baseUrl . "caution?text=" . $text;
    }
    
    public function pickupline(): string {
        return json_decode(file_get_contents($this->baseUrl . "pickuplines"))->pickupline;
    }
    
    public function gay(string $avatar): string {
        if (empty($avatar)) {
            return "Error: Missing required parameter: avatar.";
        }
    
        return $this->baseUrl . "gay?avatar=" . $avatar;
    }
    
    public function jail(string $avatar): string {
        if (empty($avatar)) {
            return "Error: Missing required parameter: avatar.";
        }
    
        return $this->baseUrl . "jail?avatar=" . $avatar;
    }
    
    public function skulls(string $text): string {
        if (empty($text)) {
            return "Error: Missing required parameter: text.";
        }
    
        $text = str_replace(" ", "%20", $text);
        return $this->baseUrl . "skulls?text=" . $text;
    }
    
    public function rgb(string $avatar): string {
        if (empty($avatar)) {
            return "Error: Missing required parameter: avatar.";
        }
    
        return $this->baseUrl . "rgb?avatar=" . $avatar;
    }
    
    public function happysad(string $text1, string $text2): string {
        if (empty($text1) || empty($text2)) {
            return "Error: Missing required parameter(s): text1, text2.";
        }
    
        return $this->baseUrl . "happysad?text1=" . $text1 . "&text2=" . $text2;
    }
    
    public function huerotate(string $img_url, string $deg): string {
        if (empty($img_url) || empty($deg)) {
            return "Error: Missing required parameter(s): img_url, deg.";
        }
    
        return $this->baseUrl . "happysad?img=" . $img_url . "&deg=" . $deg;
    }
    
    public function periodictablerandom(): object {
        return json_decode(file_get_contents($this->baseUrl . "periodic-table/random"));
    }
    
    public function nokia(string $img_url): string {
        if empty($img_url) {
            return "Error: Missing required parameter: img_url";
        }
    
        return $this->baseUrl . "nokia?image=" . $img_url;
    }

    public function userquote(string $quote, string $image, string $name): string {
        if (empty($quote) || empty($image) || empty($name)) {
            return "Error: Missing required parameter(s): quote, image, name";
        }

        return $this->baseUrl . "user-quote?text=" . $quote . "&image=" . $image . "&name=" . $name;
    }
  
}
  
?>
  