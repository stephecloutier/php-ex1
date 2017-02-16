<?php include('_form.php'); ?>


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
