<?php

class Director extends Person
{
    function getBestDirector() {
        $result = parent::getAllPerson("director");
        return $result;
    }

    function getDirectorInfos($id = 0) {
        $result = parent::getPersonDetails($id);
        return $result;
    }
}