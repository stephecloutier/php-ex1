<?php

// echo get_include_path();
// -- Attention, chemins à écrire au complet !
// set_include_path();
// pour utilise include();
// require();  => stop la suite du script si erreur, pas comme include

// -- Constantes avec les chemins vers les répertoires vers les fichiers dont j'aurai besoin

define('CONFIGS_DIR', __DIR__.'/configs');
define('CONTROLLERS_DIR', __DIR__.'/controllers');
define('VIEWS_DIR', __DIR__.'/views');

set_include_path(get_include_path().PATH_SEPARATOR.CONFIGS_DIR.PATH_SEPARATOR.CONTROLLERS_DIR.PATH_SEPARATOR.VIEWS_DIR);

include('tableController.php');
