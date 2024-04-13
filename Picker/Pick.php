<?php
namespace Picker;
class Pick{
   public static function some(int $length = 8, string $string_option = null):string{
    $numbers = "1234567890";
    $lowercase_letters = "abcdefghijklmnopqrstuvwxyz";
    $charactors = $string_option===null? $numbers.$lowercase_letters.strtoupper($lowercase_letters):$string_option;
    $picked_charactors ='';
    for ($i = 0; $i < $length; $i++) { 
        $picked_charactors .= $charactors[rand(0, strlen($charactors)-1)];
    }
    return $picked_charactors;
   }
}
