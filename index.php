<?php

    //$prenom = 'Inconnu';
    //if (isset($_POST['prenom'])){
    //    if($_POST['prenom'] !== ''){
    //        $prenom = $_POST['prenom'];
    //    }
    //};


    // LA MÊME CHOSE
    //$prenom = isset($_POST['prenom']?$_POST['prenom']:'Titi';
    //$prenom = $_POST['prenom'] ?? 'Titi';  (null coalescing operator)

    //$mainTitle = 'Salut ' . $prenom ;


    $chiffre1 = 0;
    if (isset($_POST['chiffre1'])){
        if(is_numeric($_POST['chiffre1'])){
            if($_POST['chiffre1'] !== ''){
                $chiffre1 = $_POST['chiffre1'];
            }
        }
    };

    $chiffre2 = 0;
    if (isset($_POST['chiffre2'])){
        if(is_numeric($_POST['chiffre2'])){
            if($_POST['chiffre2'] !== ''){
                $chiffre2 = $_POST['chiffre2'];
            }
        }
    };


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
        <label for="chiffre1">Quels chiffres voulez-vous&nbsp?</label>
        <input type="text" name="chiffre1" id="chiffre1">
        <?php if(!ctype_digit($chiffre1)): ?>
            <p class="notNumeric">Veuillez préciser un nombre entier positif</p>
        <?php endif; ?>
        <input type="text" name="chiffre2" id="chiffre2">
        <?php if(!ctype_digit($chiffre2)): ?>
            <p class="notNumeric">Veuillez préciser un nombre entier positif</p>
        <?php endif; ?>
        <input type="submit" value="Calculer">

    </form>

    <?php if($chiffre1&&$chiffre2): ?>

    <table border="1">
        <legend>Les <?= $chiffre2; ?> premières valeurs des  <?= $chiffre1; ?> premières tables de multiplication</legend>
        <tr>
            <th></th>
            <?php for($i = 1; $i <= $chiffre1; $i++): ?>
            <th>
                <?= $i;?>
            </th>
            <?php endfor; ?>
        </tr>
        <?php for($i = 1; $i <= $chiffre2; $i++): ?>
        <tr>
            <th>
                <?= $i;?>
            </th>
            <?php for($j = 1; $j <= $chiffre1; $j++): ?>
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
