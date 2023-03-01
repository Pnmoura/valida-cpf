<?php

require __DIR__ .'/vendor/autoload.php';

use \App\Validation\CPF;

$resultado = CPF::validar("899.905.950-20");

var_dump($resultado);