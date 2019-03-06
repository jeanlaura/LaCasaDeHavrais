<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<link rel="stylesheet" href="../css/styles.css" />
	<link rel="stylesheet" href="../css/bootstrap.css" />
        <link rel="stylesheet" href="../css/mdb.css" />
        <link rel="stylesheet" href="../css/compiled-4.7.1.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee+Shade" />
	<title>BACK OFFICE LCDH</title>
    </head>
    <body aria-busy="true">
        <a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse waves-effect waves-light"><i class="fas fa-bars"></i></a>
        <div id="slide-out" class="side-nav fixed" style="transform: translateX(0%);">
            <ul class="custom-scrollbar ps ps--theme_default" data-ps-id="789cc93d-1e74-9127-e325-50a5d3337615">
                <li id="liLogo">
                    <div class="logo-wrapper waves-light waves-effect waves-light" id="divLogo">
                        <a id="aLogo" href="#"><img id="imgLogo" src="../img/logo.png" class="img-fluid"></a>
                    </div>
                </li>
                <li id="liTotalNavAdmin">
                    <ul class="collapsible collapsible-accordion" id="ulTotal">
                        <li id="liHome">
                            <a class="collapsible-header waves-effect arrow-r" href="index_back.php">
                                Accueil Back
                            </a>
                        </li>
                        <li id="liHomeLCDH">
                            <a class="collapsible-header waves-effect arrow-r" href="../index.php">
                                Accueil LCDH
                            </a>
                        </li>
                        <li id="liDishes">
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fas fa-chevron-right"></i> Plats<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body" id="divMenusDishes">
                                <ul>
                                    <li><a href="ajout-plats.php" class="waves-effect">Ajouter</a></li>
                                    <li><a href="listPlats.php" class="waves-effect">Liste</a></li>
                                    <li>
                                        <form class="search-form" id="searchNavAdminDishes"  method="post" action="listPlats.php">
                                            <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                                                <input type="text" class="form-control" id="inputSearchNavAdminDishes" name="inputSearchNavAdminDishes" placeholder="Search">
                                                <button type="submit" name="search" class="btn btn-light validate btn-block">Rechercher</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="liCommand">
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="far fa-hand-pointer"></i>Commande<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body" id="divMenusCommand">
                                <ul>
                                    <li><a href="listCommandes.php" class="waves-effect">Liste</a></li>
                                    <li>
                                        <form class="search-form" role="search" id="searchNavAdminCommand">
                                            <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                                                <input type="text" class="form-control" id="inputSearchNavAdminCommand" placeholder="Search">
                                                <button type="submit" name="submit" class="btn btn-light validate btn-block">Rechercher</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="liResa">
                            <a class="collapsible-header waves-effect arrow-r">
                                <i class="fas fa-eye"></i> Réservation<i class="fas fa-angle-down rotate-icon"></i>
                            </a>
                            <div class="collapsible-body" id="divMenusResa">
                                <ul>
                                    <li><a href="ajout-reservation.php" class="waves-effect">Ajouter</a></li>
                                    <li><a href="listReservation.php" class="waves-effect">Liste</a></li>
                                    <li>
                                        <form class="search-form" role="search" id="searchNavAdminResa">
                                            <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                                                <input type="text" class="form-control" id="inputSearchNavAdminResa" placeholder="Search">
                                                <button type="submit" name="submit" class="btn btn-light validate btn-block">Rechercher</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li id="liDeco">
                            <form class="md-form" id="decoNavAdminResa" action="index_back.php" method="POST">
                                <div class="form-group md-form mt-0 pt-1 waves-light waves-effect waves-light">
                                    <button type="submit" name="submitDeco" id="submitDeco" class="btn btn-light validate">Déconnexion</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        