<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("bootstrap/css/bootstrap.min.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
    <nav>

            <ul id="menuGeneral">

                <li id="logo"><a href="./?action=accueil"><img src="images/logoBarre.png" alt="logo" /></a></li>
                <li><a href="./?action=listeSalles">Liste salles </a></li>               
                <?php
                if(isLoggedOn()){ ?>
                    <li><a href="./?action=profil"><img src="images/profil.png" alt="loupe" />Mon Profil</a></li>
                <?php
                } 
                else{ ?>
                    <li><a href="./?action=connexion"><img src="images/profil.png" alt="loupe" />Connexion</a></li>
                <?php
                } ?>
                
            </ul>
    </nav>

    <div id="corps">