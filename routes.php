<?php

$router-> define([
    '/'=>'controllers/home.php',
    '/addCompany'=>'controllers/addCompany.php',
    '/deleteCompany'=>'controllers/deleteCompany.php',
    '/listCompany'=>'controllers/listCompany.php',
    '/updateCompany'=>'controllers/updateCompany.php',
    '404'=> 'controllers/404.php'
]);