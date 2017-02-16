<?php

    include('settings.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['nbRow'])){
            if(is_numeric($_POST['nbRow'])){
                if($_POST['nbRow'] >= 1){
                    $nbRow = $_POST['nbRow'];
                }else{
                    $errors['nbRow'] = 'Veuillez préciser un nombre entier de rangés de valeur positive supérieure à 0';
                }
            }else{
                $errors['nbRow'] = 'Veuillez préciser un nombre de rangés avec une valeur numérique';
            }
        }else{
            $errors['nbRow'] = 'Oops, on dirait que vous essayez de tricher. nbRow est absent de la requête';
        }
    };

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['nbCol'])){
            if(is_numeric($_POST['nbCol'])){
                if($_POST['nbCol'] >= 1){
                    $nbCol = $_POST['nbCol'];
                }else{
                    $errors['nbCol'] = 'Veuillez préciser un nombre entier de colonnes de valeur positive supérieure à 0';
                }
            }else{
                $errors['nbCol'] = 'Veuillez préciser un nombre de colonnes avec une valeur numérique';
            }
        }else{
            $errors['nbCol'] = 'Oops, on dirait que vous essayez de tricher. nbRow est absent de la requête';
        }
    };

    include('layout.php');

    // if( (!ctype_digit($nbRow)) && (isset($_POST['nbRow'])) ){ // À voir si && nécessaire
    //     echo $errors['nbRow_notNum'];
    // }elseif ( ($nbRow < 1) && (isset($_POST['nbCol'])) ) {
    //     echo $errors['nbRow_notPos'];
    // };
    //
    // if( (!ctype_digit($nbCol)) && (isset($_POST['nbCol'])) ){
    //     echo $errors['nbCol_notNum'];
    // }elseif ( ($nbCol < 1) && (isset($_POST['nbCol'])) ) {
    //     echo $errors['nbCol_notPos'];
    // };
