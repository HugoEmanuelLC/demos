<?php

namespace App\database;

use PDO;
use PDOException;

class ConnMySql{

    public function connMySql(){
        
        $host = "localhost";           //hugoweb.xyz //wawmomo.be
        $dbname = "waw_momo";   //u883840348_waw_momo
        $login = 'root';    //u883840348_hc85
        $pswr = '';         //050710hC85

        try {

            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
            
            return $bdd;
                
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        
    }

    public function crudMySql(){

        $host = "localhost";           //hugoweb.xyz //wawmomo.be
        $dbname = "waw_momo";   //u883840348_waw_momo
        $login = 'root';    //u883840348_hc85
        $pswr = '';             //050710hC85

        try {

            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
            
            return $bdd;
                
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}