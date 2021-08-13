<?php

namespace App\Entity;




class ListeAssmat
{

    private $id;

    private $assMats = [];

    public function __construct()
    {
        $this->assMats = [];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssMats(): ?array
    {
        return $this->assMats;
    }

    public function setAssMats(array $assMats): void
    {
        $this->assMats = $assMats;
    }

    public function ajoutAssMat(AssMat $assMat) : void
    {
        $this->assMats[] = $assMat;
    }
}
