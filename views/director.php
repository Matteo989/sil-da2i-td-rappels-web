<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" media="screen" href="../assets/css/sweetalert2.min.css"/>
    <link rel="stylesheet" media="screen" href="../assets/css/style.css"/>
    <title>Mon Petit Cinéma - Le réalisateur</title>
    <meta name="author" content="Matthieu NOURRY"/>
    <meta name="description" content="Mon petit cinéma"/>
    <meta name="keywords" content="cinéma"/>
</head>
<body>
<section id="page">

    <?php

    include '../models/Person.php';
    include '../models/Director.php';
    include '../models/Actor.php';
    include '../models/Movie.php';

    function getBlock($file, $data = [])
    {
        require $file;
    }

    getBlock('entete.php'); ?>
    <?php getBlock("menu.php"); ?>

    <section id="real">
        <article>
            <header>
                <h2>Christopher Nolan</h2>
                Né le 30 juillet 1970 à Westminster (Londres)
            </header>
            <?php
            $director_content = Director::getBestDirector()[0];
            getBlock("page_director/director_content.php", $director_content);
            ?>
            <br/>
            <?php
            $artistes_fetiches = [
                Actor::getActorInfos(4)[0],
                Actor::getActorInfos(3)[0]
            ];
            getBlock("page_director/artistes_fetiches.php", $artistes_fetiches);
            ?>
            <br/>
            <table id="filmographie">
                <thead>
                <tr>
                    <th rowspan="2">Année</th>
                    <th id="film" rowspan="2">Film</th>
                    <th colspan="3">En tant que</th>
                </tr>
                <tr>
                    <th>Réalisateur</th>
                    <th>Producteur</th>
                    <th>Scénariste</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1989</th>
                    <td>Tarentella</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2005</th>
                    <td>Batman Begins</td>
                    <td class="x">X</td>
                    <td class="x"></td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2008</th>
                    <td>The Dark Knight</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2010</th>
                    <td>Inception</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2012</th>
                    <td>The Dark Knight Rises</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2013</th>
                    <td>Man of Steel</td>
                    <td class="x"></td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2014</th>
                    <td>Interstellar</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2016</th>
                    <td>Superman : L'aube de la Justice</td>
                    <td class="x"></td>
                    <td class="x">X</td>
                    <td class="x"></td>
                </tr>
                <tr>
                    <th>2017</th>
                    <td>Dunkerque</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                    <td class="x">X</td>
                </tr>
                <tr>
                    <th>2017</th>
                    <td>Justice League</td>
                    <td class="x"></td>
                    <td class="x">X</td>
                    <td class="x"></td>
                </tr>
                </tbody>
            </table>
        </article>
    </section>

    <?php getBlock("footer.php"); ?>

</section>
</body>

<script type="text/javascript" src="../assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
</html>