<?php

use DDEV\Company;
use DDEV\Database;
use DDEV\Validation;


$validationErrors  = [];

if(isset($_POST['save'])) {
    $connection = Database::connect();
    $Company = new Company($connection);
    $validationErrors = Validation::validate($_POST, $Company);
    $Company->createCompany($_POST);
}

require 'view/pages/addCompany.view.php';