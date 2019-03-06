<?php
    require_once '../models/database.php';
    require_once '../models/modelPlats.php';
    
    // Instanciation de l'objet Dishes contenant les méthodes utilisées
    $dishesOBJ = new dishes();
    $dishes = $dishesOBJ->listDishes(); //Tableau qui reprend la liste des plats
    $success = true;
    if (isset($_GET['idDishes'])) {
        $dishesOBJ->dishes_id = $_GET['idDishes']; //Récupère id initialisé comme idDishes
        if($dishesOBJ->deleteDishes()){//Suppression du plats
            $success;
        }
    }
?>