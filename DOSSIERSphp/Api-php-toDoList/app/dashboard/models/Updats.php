<?php

namespace App\dashboard\models;

use App\database\ConnMySql;
use Exception;

class Updats extends ConnMySql{

    public function updateListMenu(int $idUpd, $nomUpd, $prixUpd)
    {
        try {
            
            $itemsMenu = "UPDATE `produits` SET `nom` = '$nomUpd' , `PRIX` = $prixUpd WHERE `ID` = $idUpd;";
            $itemsMenuUpdate = $this->crudMySql()->query($itemsMenu);
            return $itemsMenuUpdate;

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        
    }


}