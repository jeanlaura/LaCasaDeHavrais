<?php
    require_once '../models/database.php';
    require_once '../models/modelResa.php';
    // Instanciation de l'objet Réservation contenant les méthodes utilisées
    $resaOBJ = new reservation();
    
    //TOUS
    if(isset($_POST['searchResa'])){
        $arrayResa = $resaOBJ->searchResa($_POST['inputSearchNavAdminResa']);
    }else{
        $arrayResa = $resaOBJ->listResa();
    }
?>