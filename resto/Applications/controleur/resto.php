<?php 

if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    if(isset($_POST['action']))
    {
        $action = $_POST['action'];
    }
    else
    {
        $action='read';
    }
}

switch($action)
{
    case 'read':
        require_once MODELSPATH.'resto_utils.php';
        $resto = resto\get4();
        require_once VIEWSPATH.'accueil.php';
    break;
}