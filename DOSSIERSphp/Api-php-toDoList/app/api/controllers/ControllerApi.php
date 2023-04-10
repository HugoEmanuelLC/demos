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