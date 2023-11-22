<?php
declare(strict_types=1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';

use Acme\Iskola\Diak;

if($argc < 2)
    exit(1);

if(!str_ends_with($argv[1],".json") && !str_ends_with($argv[1],".txt") && !str_ends_with($argv[1],".csv"))
    exit(2);
?>