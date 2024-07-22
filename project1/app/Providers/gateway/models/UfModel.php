<?php

namespace App\Providers\gateway\models;

class UfModel
{
    private $uf;

    public function __construct($uf)
    {
        $this->uf = $uf;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }
}
