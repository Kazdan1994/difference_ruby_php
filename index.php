<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 26/06/2015
 * Time: 15:37
 */

//Afficher une string
    $string = "Afficher une string avec echo";
    echo $string . '<br />';



//Afficher un tableau
    $tableau = array(
                    'Bonjour',
                    1,
                    true,
                    );
    var_dump($tableau);
    echo '<br />';

//Afficher un boolean
    $boolean = true;
    echo $boolean . '<br />';

//Afficher un objet
    //D'abord IL FAUT DEFINIR L'OBJET
    class Objet {
        public function objet ()
        {
            echo 'On affiche un objet';
        }
    }

$object = new Objet();
$object->objet();