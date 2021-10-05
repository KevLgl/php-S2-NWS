<?php
function reverseWord($word){

    $splitedWord= str_split($word[1]);
    asort($splitedWord);
    $stringWord = implode("", $splitedWord);

    foreach (count_chars($stringWord, 1) as $letter => $val) {
        echo  "$val => \"" , chr($letter) , "\" \n";
    }
}
reverseWord($argv);
