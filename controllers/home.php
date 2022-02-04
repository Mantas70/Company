<?php

use DDEV\Company;
use DDEV\Database;

$Company = new Company(Database::connect());

require 'view/pages/home.view.php';