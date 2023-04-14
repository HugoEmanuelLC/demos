<?php

namespace App\api\models;

use mysqli;
use Exception;

class Crud 
{
    private $host = "localhost";
    private $dbname = "todolist";
    private $login = 'root';
    private $pswr = '';

    public function connDB(){
        $conn = new mysqli($this->host, $this->login, $this->pswr, $this->dbname);
        if ($conn->connect_error) {
            return die("Failed to connect." . $conn->connect_error);
        }else{
            return $conn;
        }
    }

    public function selectList(){
        $conn = $this->connDB();
        $sql = "SELECT * FROM `todolist` ORDER BY `date` ASC";

        $json = array();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            array_push($json, $row);
        }
        echo json_encode($json);
    }

    public function insertNewItem($title, $date, $until, $done, $description, $fk){
        // if ($fk) {
            
        // }
        try {
            
            $newItem = "INSERT INTO `todolist`(`title`, `date`, `until`,`done`,`description`, `fk_id_user`) 
                        VALUES ('$title','$date','$until','$done','$description','$fk');";
            return $this->connDB()->query($newItem);

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    // public function selectProduits(int $i){
    //     $conn = $this->connDB();
    //     $sql = "SELECT * FROM `produits` P JOIN `menus` M 
    //             ON P.menu_id = M.ID WHERE P.menu_id = $i 
    //             GROUP BY `nom` ORDER BY `nom` ASC";
        
    //     $json = array();
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    //     while ($row = $result->fetch_assoc()) {
    //         array_push($json, $row);
    //     }
    //     echo json_encode($json);
    // }
}
