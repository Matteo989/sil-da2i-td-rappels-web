<table class="actors">
    <thead>
        <tr><h2>Acteurs préférés</h2></tr>
    </thead>
    <tr>
        <?php foreach ($data as $artiste) { ?>
            <td>
                <img style="width: 120px; padding: 10px;" src="../<?php echo $artiste['path']; ?>" title="<?php echo $artiste['firstname'].' '.$artiste['lastname']; ?>"
                     alt="<?php echo $artiste['firstname'].' '.$artiste['lastname']; ?>">
                <br/>
                <i><?php echo $artiste['firstname'].' '.$artiste['lastname']; ?></i>
            </td>
        <?php } ?>
    </tr>
</table>