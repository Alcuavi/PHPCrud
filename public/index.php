<?php
require_once dirname( __DIR__ )."/vendor/autoload.php";
use App\kernel;

$kernel = new kernel();
$kernel->view();