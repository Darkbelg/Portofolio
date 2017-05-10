<?php
require('vendor/autoload.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem("Presentation");
$twig = new Twig_Environment($loader);
$twigArray["boodschap"] = "Hello world";
$view = $twig->render("index.twig",$twigArray);
print $view;
