<?php

class Person
{
    protected static function getDatabase() {
        $link = mysqli_connect('mysql-matteo989.alwaysdata.net', 'matteo989', 'mattdu13200')
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        mysqli_select_db($link, 'matteo989_solminihac_tp1')
        or die ('Erreur de sélection de la BD : ' . mysqli_error($link));
        mysqli_set_charset($link, 'utf8');
        return $link;
    }

    protected static function getContent($content) {
        $link = static::getDatabase();
        $stmt = mysqli_prepare($link, $content)
        or die('Échec de préparation de la requête : ' . mysqli_error($link));
        mysqli_stmt_execute($stmt)
        or die('Erreur dans la requête : ' . mysqli_error($link));
        $result = mysqli_stmt_get_result($stmt);
        $content = [];
        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $content[] = $row;
            }
        } else {
            return null;
        }
        return $content;
    }

    function getAllPerson($role = null) {
        if (!empty($role)) {
            $result = static::getContent('Select * from person join personhaspicture on person.id = personhaspicture.idPerson join picture on picture.id = personhaspicture.idPicture');
        } else {
            $result = static::getContent('Select * from person join moviehasperson on person.id = moviehasperson.idPerson join personhaspicture on person.id = personhaspicture.idPerson join picture on picture.id = personhaspicture.idPicture where role = '.$role);
        }
        return $result;
    }

    function getPersonDetails($id) {
        $result = static::getContent('Select * from person join personhaspicture on person.id = personhaspicture.idPerson join picture on picture.id = personhaspicture.idPicture where person.id='.$id);
        return $result;
    }
}