<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php echo $titre ?></title>
    <style type="text/css">
        @import url("<?php echo CSSURL . "base.css" ?>");
        @import url("<?php echo CSSURL . "form.css" ?>");
        @import url("<?php echo CSSURL . "cgu.css" ?>");
        @import url("<?php echo CSSURL . "corps.css" ?>");
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>
    <nav>

        <ul id="menuGeneral">
            <li><a href="#">Accueil</a></li>
            <li><a href="#"><img src="<?php echo IMG . "rechercher.png" ?>" alt="loupe" />Recherche</a></li>
            <li></li>

            <li id="logo"><a href="#"><img src="<?php echo IMG . "logoBarre.png" ?>" alt="logo" /></a></li>
            <li></li>
            <li><a href="#">CGU</a></li>
            <li><a href="./?action=connexion"><img src="<?php echo IMG . "profil.png" ?>" alt="profil" />Connexion</a></li>
        </ul>
    </nav>

    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="images/logoBarre.png" alt="logo" /></li>
        <?php if (isset($menuBurger)) { ?>
            <?php for ($i = 0; $i < count($menuBurger); $i++) { ?>
                <li>
                    <a href="<?php echo $menuBurger[$i]['url']; ?>">
                        <?php echo $menuBurger[$i]['label']; ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>



    <div id="corps">