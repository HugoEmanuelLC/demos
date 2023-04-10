<?php

namespace App\dashboard\controllers;

use App\dashboard\controllers\Controller;

class ControllerDash extends Controller
{

    public function login()
    {
        return $this->viewLogin('dashboard.layoutDash.loginPageDash');
    }

    public function auth()
    {
        return $this->viewDash('dashboard.servicesDash.auth.auth');
    }

    public function loading()
    {
        return $this->viewDash('dashboard.servicesDash.auth.loading');
    }

    public function home()
    {
        return $this->viewDash('dashboard.layoutDash.homePageDash');
    }

    public function menus()
    {
        return $this->viewDash('dashboard.layoutDash.pageDash');
    }

    public function produitsMenu(int $params)
    {
        return $this->viewDash('dashboard.layoutDash.pageDash', [$params]);
    }

}