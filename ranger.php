<?php
function ranger($words){
    $file = "contenu.json";
    asort($words);
    $finalArray = [];

    foreach($words as $word) {
        if($word != "ranger.php") {
            array_push($finalArray, $word);
        }
    }
    file_put_contents($file,json_encode($finalArray));

}
ranger($argv);
