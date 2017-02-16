<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/styles.css">
        <title><?= SITE_TITLE; ?></title>
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