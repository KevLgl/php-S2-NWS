<?php

function game(){
     $randomNumber = rand(1,3);
     $compteurVie  = 3;


    $typedNumber = readline('Entre de nouveau un nombre, et tentez de decouvrir le nombre mystere:');
    //LA PARTIE SE JOUE
    while($compteurVie != 0) {
        if ($randomNumber > $typedNumber)
        {
            $compteurVie = $compteurVie -1;
            echo 'C\'est plus !' . PHP_EOL;
            echo 'Il vous reste '. $compteurVie .' vie(s)' . PHP_EOL;
            $typedNumber = readline('Entre de nouveau un nombre:'). PHP_EOL;
        }
        elseif ($randomNumber < $typedNumber)
        {
            $compteurVie = $compteurVie -1;
            echo 'C\'est moins !' . PHP_EOL;
            echo 'Il vous reste '. $compteurVie .' vie(s)'. PHP_EOL;
            $typedNumber = readline('Entre de nouveau un nombre:'). PHP_EOL;
        }
        else
        {
            echo 'Bravo, vous avez trouvé le nombre mystère !'. PHP_EOL;
            $replay="a";
            while($replay != "o" && $replay != "oui" && $replay != "n" && $replay != "non") {
                $replay = readline('Voulez vous rejouer ?(oui - o / non - n):');
            }
            if($replay === "o" OR $replay ==="oui"){
                game();
            }else if($replay === "n" OR $replay ==="non"){
                die;
            }
        }
    }
    //    LE JOUEUR A PERDU
    echo 'Mince, vous avez perdu !'. PHP_EOL;
    while($replay != "o" && $replay != "oui" && $replay != "n" && $replay != "non") {
        $replay = readline('Voulez vous rejouer ?(oui - o / non - n):');
    }
        if ($replay === "o" or $replay === "oui") {
            game();
        } else if ($replay === "n" or $replay === "non") {
            die;
        }

}
game();
