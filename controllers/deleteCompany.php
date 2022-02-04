<?php

use DDEV\Company;
use DDEV\Database;
use DDEV\Request;

$Company = new Company(Database::connect());
$id = intval(basename(Request::uri()));
$Company->deleteCompany($id);
