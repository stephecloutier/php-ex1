<?php

    // echo get_include_path();
    // -- Attention, chemins à écrire au complet !
    // set_include_path();
    // pour utilise include();
    // require();  => stop la suite du script si erreur, pas comme include

    include('./configs/settings.php');

    if (isset($_POST['nbRow'])){
        if(is_numeric($_POST['nbRow'])){
            if($_POST['nbRow'] !== ''){
                $nbRow = $_POST['nbRow'];
            }
        }
    };

    if (isset($_POST['nbCol'])){
        if(is_numeric($_POST['nbCol'])){
            if($_POST['nbCol'] !== ''){
                $nbCol = $_POST['nbCol'];
            }
        }
    };

    if( (!ctype_digit($nbRow)) && (isset($_POST['nbRow'])) ){
        echo $errors['nbRow_notNum'];
    }elseif ( ($nbRow < 1) && (isset($_POST['nbCol'])) ) {
        echo $errors['nbRow_notPos'];
    };

    if( (!ctype_digit($nbCol)) && (isset($_POST['nbCol'])) ){
        echo $errors['nbCol_notNum'];
    }elseif ( ($nbCol < 1) && (isset($_POST['nbCol'])) ) {
        echo $errors['nbCol_notPos'];
    };

    include('./views/layout.php');
