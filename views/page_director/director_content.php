<div class="content">
    <img id="interstellar_affiche" src="../<?php echo $data['path'] ?>" title="<?php echo $data['firstname'].' '.$data['lastname']; ?>"
         alt="<?php echo $data['firstname'].' '.$data['lastname']; ?> Réalisateur">
    <p>Réalisateur, scénariste, monteur et producteur de cinéma britanno-américain, né le 30 juillet 1970 à
        Westminster. Il se fait connaître à la fin des années 1990 par un premier long métrage, Following,
        tourné en noir et blanc.</p>
    <?php getBlock("page_director/table_poster.php", Movie::getAllMoviesPoster())?>
</div>