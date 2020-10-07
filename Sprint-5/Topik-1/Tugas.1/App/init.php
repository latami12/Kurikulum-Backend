<?php

spl_autoload_register(function($class) {
    require "BangunDatar/" . $class . ".php";
});