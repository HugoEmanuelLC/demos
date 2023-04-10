<?php

namespace App\dashboard\models;

use App\database\ConnMySql;
use Exception;

class Selects extends ConnMySql{

    public function selectMenus()
    {
        try {
            
            $requeteDesMenus = "SELECT * FROM menus ORDER BY `NAME` DESC";
            $listDeMenus = $this->crudMySql()->query($requeteDesMenus);
            
            return $listDeMenus;

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        
    }

    public function produitsDuMenu(int $id)
    {
        try {

            if (isset($id)) {

                $requeteDesMenus = "SELECT * FROM `produits` P JOIN `menus` M ON P.menu_id = M.ID WHERE P.menu_id = $id GROUP BY `nom` ORDER BY `nom` ASC";
                $produitsDuMenu = $this->crudMySql()->query($requeteDesMenus);
            
                return $produitsDuMenu;
            }

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }

        
    }
}