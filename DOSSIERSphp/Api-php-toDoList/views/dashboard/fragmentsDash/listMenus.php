<?php 
if (isset($listDesMenus)) {

    $afficherMenu='';
    $keywordsNameMenu='';
    $indice = 0;

    foreach ($listDesMenus as $menu) {

        $nomMenus = ucwords($menu[1]);

        $indice = $indice +1;
        if ($indice %3==1) {
            $afficherMenu .='<a class="color1" href="'.$urlDash.'/menu/'.$menu[0].'">'.$nomMenus.'</a>';
            
        }elseif($indice %2==0){
            $afficherMenu .='<a class="color2" href="'.$urlDash.'/menu/'.$menu[0].'">'.$nomMenus.'</a>';

        }else{
            $afficherMenu .='<a class="color3" href="'.$urlDash.'/menu/'.$menu[0].'">'.$nomMenus.'</a>';
        }

        // $afficherMenu .='<a href="'.$urlDash.'/menu/'.$menu[0].'">'.$nomMenus.'</a>';//$URL dans la page services/URLservice.php
        // $keywordsNameMenu .= $nomMenus .',';
        // setcookie("keuboards",['name'], $nomMenus, time() + (3600 * 1));
    }
    

} else {
    $afficherMenu = '<a href="#!#">aucun menu dans la liste</a>';
}
?>