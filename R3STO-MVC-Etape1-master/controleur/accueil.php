<?php
include_once MODELSPATH . "bd.resto.inc.php";
include_once MODELSPATH . "bd.typecuisine.inc.php";
include_once MODELSPATH . "bd.photo.inc.php";

//creation du menu burger
$menuBurger = array();
$menuBurger[] = array("url" => "./?action=recherche&critere=nom", "label" => "Recherche par nom");
$menuBurger[] = array("url" => "./?action=recherche&critere=adresse", "label" => "Recherche par adresse");
$menuBurger[] = array("url" => "./?action=recherche&critere=type", "label" => "Recherche par type de cuisine");
$menuBurger[] = array("url" => "./?action=recherche&critere=multi", "label" => "Recherche multicritère");


    // recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeRestos = getTop4Restos();

    // traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - Resto.fr";
include VIEWSPATH . "entete.html.php";
include VIEWSPATH . "vueAccueil.php";
include VIEWSPATH . "pied.html.php";
