<?php


class chat
{
    protected $prenom;
    protected $age;
    protected $couleur;
    protected $sexe;
    protected $race;

    public function recupTout() {
        return get_object_vars($this);
    }
}

