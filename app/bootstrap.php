<?php

    require_once "../app/configs/config.php";

    spl_autoload_register(function ($class) {

        require_once "../app/libs/". $class .".php";
    });