<?php

namespace App\dashboard\models;

use App\database\ConnMySql;
use Exception;

class Inserts extends ConnMySql{

    public function newdate($idNew, $nomNew, $prixNew)
    {
        try {
            
            $newItem = "INSERT INTO `produits`(`ID`, `nom`, `PRIX`, `COMMENTAIRE`, `menu_id`) VALUES ('','$nomNew','$prixNew','','$idNew');";
            $itemsMenuNew = $this->crudMySql()->query($newItem);
            return $itemsMenuNew;

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        
    }


}