<?php

namespace App\Vue;
use App\Modele\Modele_Salarie;
use App\Utilitaire\Vue_Composant;

class Vue_detail_compte_salarie  extends Vue_Composant
{
    private string $idCategorie;

    public function __construct(string $idCategorie ="")
    {
        $this->idCategorie=$idCategorie;
    }

    function donneTexte(): string
    {


        return   ('
<div>
            <h1>details compte</h1>
            <p>id : '.$_SESSION["idSalarie"].'</p>
         
</div>
        ')

 ;
    }
}