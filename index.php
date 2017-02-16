<?php

    // echo get_include_path();
    // -- Attention, chemins à écrire au complet !
    // set_include_path();
    // pour utilise include();
    // require();  => stop la suite du script si erreur, pas comme include


    $nbRow = 0;
    if (isset($_POST['nbRow'])){
        if(is_numeric($_POST['nbRow'])){
            if($_POST['nbRow'] !== ''){
                $nbRow = $_POST['nbRow'];
            }
        }
    };

    $nbCol = 0;
    if (isset($_POST['nbCol'])){
        if(is_numeric($_POST['nbCol'])){
            if($_POST['nbCol'] !== ''){
                $nbCol = $_POST['nbCol'];
            }
        }
    };

    $errors = array(
        'nbRow_notNum' => '<p>Veuillez préciser un nombre de rangés avec une valeur numérique</p>',
        'nbRow_notPos' => '<p>Veuillez préciser un nombre entier de rangés de valeur positive supérieure à 0</p>',
        'nbCol_notNum' => '<p>Veuillez préciser un nombre de colonnes avec une valeur numérique</p>',
        'nbCol_notPos' => '<p>Veuillez préciser un nombre entier de colonnes de valeur positive supérieure à 0</p>'
    );

    // if( (!ctype_digit($nbRow)) && (isset($_POST['nbRow'])) ){
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

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Mon premier script php</title>
</head>
<body>
    <h1>Mes tables de multiplication</h1>

    <form action="index.php" method="post">
        <label for="nbRow">Quels chiffres voulez-vous&nbsp?</label>

        <input type="text" name="nbRow" id="nbRow">
        <?php if( (!ctype_digit($nbRow)) && (isset($_POST['nbRow'])) ){
            echo $errors['nbRow_notNum'];
        }elseif ( ($nbRow < 1) && (isset($_POST['nbCol'])) ) {
            echo $errors['nbRow_notPos'];
        }; ?>

        <input type="text" name="nbCol" id="nbCol">
        <?php if( (!ctype_digit($nbCol)) && (isset($_POST['nbCol'])) ){
            echo $errors['nbCol_notNum'];
        }elseif ( ($nbCol < 1) && (isset($_POST['nbCol'])) ) {
            echo $errors['nbCol_notPos'];
        }; ?>

        <input type="submit" value="Calculer">

    </form>

    <?php if($nbRow&&$nbCol): ?>

    <table border="1">
        <legend>Les <?= $nbCol; ?> premières valeurs des  <?= $nbRow; ?> premières tables de multiplication</legend>
        <tr>
            <th></th>
            <?php for($i = 1; $i <= $nbRow; $i++): ?>
            <th>
                <?= $i;?>
            </th>
            <?php endfor; ?>
        </tr>
        <?php for($i = 1; $i <= $nbCol; $i++): ?>
        <tr>
            <th>
                <?= $i;?>
            </th>
            <?php for($j = 1; $j <= $nbRow; $j++): ?>
                <td>
                    <?= $i*$j; ?>
                </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

    <?php endif; ?>

</body>
</html>
