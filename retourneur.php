<?php
function retourneur($words){
    $reverseTable =[];
    foreach($words as $word) {
        if($word != "retourneur.php") {
            array_push($reverseTable, strrev($word));
        }
    }
    $reverseSentence = implode(" ", $reverseTable);
    echo($reverseSentence);
}
retourneur($argv);
