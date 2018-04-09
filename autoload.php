<?php

$autoload = __DIR__ . '/vendor/autoload.php';

if(!is_file($autoload)) {
  $autoload = __DIR__ . '/../../vendor/autoload.php';
}

require_once $autoload;
