<?php

    // echo get_include_path();
    // -- Attention, chemins à écrire au complet !
    // set_include_path();
    // pour utilise include();
    // require();  => stop la suite du script si erreur, pas comme include

    set_include_path('/Applications/MAMP/htdocs/Sites/php-ex1');

    include('configs/settings.php');

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

    include('views/layout.php');
