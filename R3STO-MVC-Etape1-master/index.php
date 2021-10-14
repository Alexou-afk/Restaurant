<?php
$racine = dirname(__FILE__);
define('APPPATH', $racine . DIRECTORY_SEPARATOR);
require_once APPPATH . 'config' . DIRECTORY_SEPARATOR . 'constantes.php';
include CONTROLLERSPATH . "controleurPrincipal.php";
//include_once MODEL . "authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {

    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include CONTROLLERSPATH . $fichier;