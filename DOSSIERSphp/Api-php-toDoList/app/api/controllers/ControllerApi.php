<?php

namespace App\api\controllers;

use App\api\models\Crud;

class ControllerApi
{

    public function listToDo(){
        $req = new Crud();
        $list = $req->selectList();
        return $list;
    }

    public function insertNewItem($id){
        $req = new Crud();

        $title = $_POST["title"];
        $date = $_POST['date'];
        $until = $_POST['until'];
        $done = $_POST["done"];
        $description = $_POST["description"];

        // $title = "HUGO";
        // $date = '2023-04-10';
        // $until = '2023-10-10';
        // $done = "false";
        // $description = "description test";

        $datas = $req->insertNewItem($title, $date, $until, $done, $description, $id);

        return $datas;

        print_r(" --> ".$id);
    }

    // public function listProduits(int $i){
    //     $req = new Selects();
    //     $listMenus = $req->selectProduits($i);
    //     return $listMenus;
    // }

    // public function loading()
    // {
    //     // return $this->viewDash('dashboard.servicesDash.auth.loading');
    // }

    // public function home()
    // {
    //     // return $this->viewDash('dashboard.layoutDash.homePageDash');
    // }

    // public function menus()
    // {
    //     // return $this->viewDash('dashboard.layoutDash.pageDash');
    // }

    // public function produitsMenu(int $params)
    // {
    //     // return $this->viewDash('dashboard.layoutDash.pageDash', [$params]);
    // }

}