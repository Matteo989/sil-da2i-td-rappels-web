<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" media="screen" href="../assets/css/sweetalert2.min.css"/>
    <link rel="stylesheet" media="screen" href="../assets/css/style.css"/>
    <title>Mon Petit Cinéma - Le film</title>
    <meta name="author" content="Matthieu NOURRY"/>
    <meta name="description" content="Mon petit cinéma"/>
    <meta name="keywords" content="cinéma"/>
</head>
<body>
<section id="page">

    <?php
    function getBlock($file, $data = [])
    {
        require $file;
    }
    getBlock('entete.php'); ?>
    <?php getBlock("menu.php"); ?>

    <section id="interstellar">
        <article>
            <header>
                <h2>Interstellar</h2>
                Christopher Nolan, 2014 (2h49min)
            </header>
            <div class="content">
                <img id="interstellar_affiche" src="../assets/img/affiches_films/interstellar.jpg" title="interstellar"
                     alt="affiche du film interstellar"/>
                Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte
                dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances
                astronomiques dans un voyage interstellaire.
            </div>
            <br/>
            <table class="actors">
                <tr>
                    <td>
                        <img class="actors" src="../assets/img/photos_acteurs/matthew.jpg" title="Matthew McConaughey"
                             alt="Matthew McConaughey">
                        <br/>
                        <small>Matthew McConaughey</small>
                    </td>
                    <td>
                        <img class="actors" src="../assets/img/photos_acteurs/anne.jpg" title="Anne Hathaway"
                             alt="Anne Hathaway">
                        <br/>
                        <small>Anne Hathaway</small>
                    </td>
                    <td>
                        <img class="actors" src="../assets/img/photos_acteurs/jessica.jpg" title="Jessica Chastain"
                             alt="Jessica Chastain">
                        <br/>
                        <small>Jessica Chastain</small>
                    </td>
                    <td>
                        <img class="actors" src="../assets/img/photos_acteurs/michael.jpg" title="Michael Caine"
                             alt="Michael Caine">
                        <br/>
                        <small>Michael Caine</small>
                    </td>
                </tr>
            </table>
            <br/>
            <img id="note" src="../assets/img/note.png" title="notations allociné" alt="notes allociné">
            <aside>
                <h3>Galerie</h3>
                <div class="wrapper" align="center">
                    <div class="carousel">
                        <button type="button" id="carousel-arrow-prev" class="carousel-arrow carousel-arrow-prev"
                                arial-label="Image précédente"></button>
                        <button type="button" id="carousel-arrow-next" class="carousel-arrow carousel-arrow-next"
                                arial-label="Image suivante"></button>

                        <img id="carousel-0" class="carousel-img carousel-img-displayed" src="../assets/img/inter1.jpg"
                             alt="Winter"/>
                        <img id="carousel-1" class="carousel-img carousel-img-noDisplay" src="../assets/img/inter2.jpg"
                             alt="Sea"/>
                        <img id="carousel-2" class="carousel-img carousel-img-noDisplay" src="../assets/img/inter3.jpg"
                             alt="Night"/>
                        <img id="carousel-3" class="carousel-img carousel-img-noDisplay" src="../assets/img/inter4.jpg"
                             alt="Moutain"/>
                    </div>
                </div>
                <p align="center">Images tirées du film</p>
            </aside>
            <footer>"Interstellar" de Christopher Nolan est tout de même un film diablement intéressant et assurément
                bien meilleur que ne l'était...
            </footer>
        </article>
    </section>
    <aside id="sidebar">
        <h2>Le Réalisateur</h2>
        <div class="content">
            <a href="director.php"><img src="../assets/img/christopher.jpg" title="Christopher Nolan"
                                        alt="Christopher Nolan Réalisateur"></a>
            <a href="director.php"><p>Christopher Nolan</p></a>
            <p>Réalisateur, scénariste, monteur et producteur de cinéma britanno-américain, né le 30 juillet 1970 à
                Westminster. Il se fait connaître à la fin des années 1990 par un premier long métrage, Following,
                tourné en noir et blanc.</p>
        </div>
    </aside>

    <?php getBlock("footer.php"); ?>

</section>
</body>

<script type="text/javascript" src="../assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
</html>