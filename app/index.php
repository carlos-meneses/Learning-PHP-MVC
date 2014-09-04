<?php
require "config/config.php";
require "lib/rb.php";
require "lib/front_controller.php";
print_r($_REQUEST);

//Controlador principal de la aplicación
$application = new front_controller();