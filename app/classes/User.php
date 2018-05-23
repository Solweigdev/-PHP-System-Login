<?php

namespace App\classes;

class User
{
    public function __construct()
    {
        // Vérifier si le fomulaire vient d'être envoyé
        if (!empty($_POST)) {
            $this->isDataLogging($_POST);
        }
    }

    private function isDataLogging($data)
    {
        echo "<pre>" . var_dump($data) . "</pre>";
    }
}