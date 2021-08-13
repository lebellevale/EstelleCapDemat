<?php

declare(strict_types=1);

namespace App\Entity;



class Secteur
{
    private string $label;

    private $assMats = [];

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label): void
    {
        $this->label = $label;
    }

    public function getAssMats(): ?array
    {
        return $this->assMats;
    }

    public function setAssMats(AssMat $assMat)
    {
        $this->assMats[] = $assMat;
    }



}