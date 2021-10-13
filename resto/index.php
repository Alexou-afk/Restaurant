<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

define('FCPATH', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('APPPATH', FCPATH.'Applications'.DIRECTORY_SEPARATOR);
require_once APPPATH.'config'.DIRECTORY_SEPARATOR.'constants.php';

if(isset($_GET['module']))
{
    $module = $_GET['module'];
}
else
{
    if (isset($_POST['module']))
    {
        $module = $_POST['module'];
    }
    else
    {
        $module = 'resto';
    }
}
require_once CONTROLLERSPATH.$module.'.php';