<?php

declare(strict_types=1);

namespace App\Entity;


class Liste
{
    private $secteurs = [];


    public function getSecteurs()
    {
        return $this->secteurs;
    }

    public function setSecteurs(Secteur $secteur)
    {
        $this->secteurs[] = $secteur;
    }






}