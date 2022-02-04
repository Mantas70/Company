<?php

use DDEV\Company;
use DDEV\Database;


$connection = Database::connect();
$Company = new Company($connection);


require 'view/pages/table.view.php';