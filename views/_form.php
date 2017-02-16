<form action="index.php" method="post">
    <label for="nbRow">Quels chiffres voulez-vous&nbsp? (Rangés/Colonnes)</label>

    <input type="text" name="nbRow" id="nbRow">
    <p><?= $errors['nbRow'] ?></p>

    <input type="text" name="nbCol" id="nbCol">
    <p><?= $errors['nbCol'] ?></p>

    <input type="submit" value="Calculer">

</form>
