<header>
    <div class="header_head">
        <div class="logo">
            <h1>DASHBOARD</h1>
        </div>
        <div class="logout_buttom">
            <a href="<?= $urlDash ?>/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
    <div class="header_body">
        <?= $homeLink = (isset($homeLink)) ? '<a href="'.$homeLink .'/home">Home</a> | ' : null ?>
        <!--<a href="#!" @click="toggleClassInSideLeft">side left</a>
        <a href="<?php //$urlDash ?>/item/85">page item</a>-->
        <a href="<?= $urlSw ?>" target="_blank">view site web</a>
    </div>
</header>