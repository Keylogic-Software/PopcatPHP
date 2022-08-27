<?php

namespace Keylogic\Popcatwrapper;

class Main {
  public function welcome(string $avatar, string $name, string $servername, string $membercount): string {
    $newmembercount = $membercount + 1;
    $servername = str_replace(" ", "+", $servername);
    $name = str_replace(" ", "+", $name);
    $avatar = str_replace(" ", "+", $avatar);
    return "https://api.popcat.xyz/welcomecard?background=https://cdn.discordapp.com/attachments/850808002545319957/859359637106065408/bg.png&text1=".$name."&text2=Welcome+To+".$servername."&text3=Member+".$newmembercount."&avatar=".$avatar;
  }
  public function color(string $hex): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/color/".$hex));
  }
  public function lyrics(string $songname): object {
    $songname = str_replace(" ", "+", $songname);
    return json_decode(file_get_contents("https://api.popcat.xyz/lyrics?song=".$songname));
  }
  public function element(string $element): object {
    return json_decode(file_get_contents("https://api.popcat.xyz/periodic-table?element=".$element));
  }
}