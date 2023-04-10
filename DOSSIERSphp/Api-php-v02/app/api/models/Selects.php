<?php

namespace App\api\models;

use mysqli;
use Exception;
use App\database\ConnMySql;

class Selects 
{
    private $host = "localhost";
    private $dbname = "waw_momo";
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

    public function selectMenus(){
        $conn = $this->connDB();
        $sql = "SELECT * FROM `menus` ORDER BY `NAME` ASC";

        $json = array();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            array_push($json, $row);
        }
        echo json_encode($json);
    }

    public function selectProduits(int $i){
        $conn = $this->connDB();
        $sql = "SELECT * FROM `produits` P JOIN `menus` M 
                ON P.menu_id = M.ID WHERE P.menu_id = $i 
                GROUP BY `nom` ORDER BY `nom` ASC";
        
        $json = array();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            array_push($json, $row);
        }
        echo json_encode($json);
    }
}
