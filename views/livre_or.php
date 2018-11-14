<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" media="screen" href="../assets/css/sweetalert2.min.css"/>
    <link rel="stylesheet" media="screen" href="../assets/css/style.css"/>
    <title>Mon Petit Cinéma - Livre d'or</title>
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

    <section>
        <article>
            <div class="content" style="text-align: center">
                <form method="post" action="livre_or.php">
                    <p>Mon site vous plaît ? Laissez-moi un message !</p>
                    <p>
                        Pseudo : <input name="pseudo"/><br/>
                        Message :<br/>
                        <textarea name="message" rows="8" cols="35"></textarea><br/>
                        <input type="submit" value="Envoyer"/>
                    </p>
                </form>

                <p class="pages">
                    <?php
                    $mysqli = new mysqli("phpmyadmin.alwaysdata.com", "matteo989", "mattdu13200", "matteo989_mysql-user");

                    /* Vérification de la connexion */
                    if (mysqli_connect_errno()) {
                        printf("Échec de la connexion : %s\n", mysqli_connect_error());
                        exit();
                    } ?>
                </p>

                <?php
                $reponse = $mysqli->query('SELECT * FROM livre_or ORDER BY id DESC');
                foreach ($reponse as $donnees) {
                    echo '<p><strong>' . $donnees['pseudo'] . '</strong> a écrit :<br />' . $donnees['message'] . '</p>';
                }
                $mysqli->close(); // On n'oublie pas de fermer la connexion à MySQL ;o)
                ?>
            </div>
        </article>
    </section>

    <?php getBlock("footer.php"); ?>

</section>
</body>

<script type="text/javascript" src="../assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
</html>