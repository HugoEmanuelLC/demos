<?php

namespace App\dashboard\controllers;

class Controller {

    public function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';

        if ($params) {
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS . 'siteWeb/mainSw.php';
    }




    public function viewLogin(string $path)
    {
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
    }




    public function viewdash(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';

        if ($params) {
            $params = extract($params);
        }
        $content = ob_get_clean();
        require VIEWS . 'dashboard/mainDash.php';
    }

}