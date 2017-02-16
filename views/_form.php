<form action="index.php" method="post">
    <label for="nbRow">Quels chiffres voulez-vous&nbsp? (Rangés/Colonnes)</label>

    <input
        type="text"
        name="nbRow"
        id="nbRow"
        <?php if($nbRow !==0): ?>
            value="<?= $nbRow; ?>"
        <?php endif; ?>
    >
    <p><?= $errors['nbRow'] ?></p>

    <input
        type="text"
        name="nbCol"
        id="nbCol"
        <?php if($nbCol !==0): ?>
            value="<?= $nbCol; ?>"
        <?php endif; ?>
    >
    <p><?= $errors['nbCol'] ?></p>

    <input type="submit" value="Calculer">

</form>
