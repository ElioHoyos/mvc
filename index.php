<?php

require_once "controllers/controller.php";
require_once "models/model.php";

$plantilla = new MvcContoller(); //llamamos a la clase del controllador
$plantilla -> plantilla(); //llamamos a la funcion public del controlador