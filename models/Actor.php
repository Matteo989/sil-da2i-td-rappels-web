<?php

class Actor extends Person
{
    function getAllActors() {
        $result = parent::getAllPerson("actor");
        return $result;
    }

    function getActorInfos($id = 0) {
        $result = parent::getPersonDetails($id);
        return $result;
    }
}