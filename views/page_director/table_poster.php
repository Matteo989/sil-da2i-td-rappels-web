<table id="table_affiches">
    <tr>
        <?php foreach ($data as $poster) { ?>
            <td>
                <img onclick="affiche_<?php echo strtolower($poster['title']); ?>()" class="affiches_films"
                     src="../<?php echo $poster['path']?>"
                     title="<?php echo $poster['title']?>"
                     alt="<?php echo $poster['legend']?>">
            </td>
        <?php } ?>
    </tr>
</table>