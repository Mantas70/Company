<?php

use DDEV\Database;
use DDEV\Company;
use DDEV\Request;

$connection = Database::connect();
$Company = new Company($connection);
$id = intval(basename(Request::uri()));
$Company->updateCompany($id, $_POST);

require 'view/pages/updateCompany.view.php';