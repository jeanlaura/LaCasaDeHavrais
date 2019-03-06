<?php
    require_once '../models/database.php';
    require_once '../models/modelPlats.php';
    // Instanciation de l'objet Plats contenant les méthodes utilisées
    $dishesOBJ = new dishes();
    $addSuccess = false;

    // variable de récupération d'erreurs
    $arrayError = [];
    // Test des champs obligatoires
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // regex utilisées pour le contrôle de saisie
        $patternTxt = '/^[a-zA-ZÀ-ÿ œ\'-.,!]*$/';
        $patternPrice = '/^[0-9€0-9]*$/';
        // contrôle de saisie
        // NOM
        if (empty($_POST['inputNameDishes'])) {
            $arrayError['nameDishiesErr'] = 'Le nom du plat est requis';
        } else {
            $dishesOBJ->dishes_name = test_input($_POST['inputNameDishes']);
            // vérifie si le champs contient des lettres et de la ponctuation
            if (!preg_match($patternTxt, $dishesOBJ->dishes_name)) {
                $arrayError['nameDishiesErr'] = 'Caractères incorrects ex : DOE';
            } else {
                unset($arrayError['nameDishiesErr']);
            }
        }
        // PRIX
        if (empty($_POST['inputPrice'])) {
            $arrayError['priceErr'] = 'Le prix est requis';
        } else {
            $dishesOBJ->dishes_price = test_input($_POST['inputPrice']);

            // vérifie si le champs contient des lettres et de la ponctuation
            if (!preg_match($patternPrice, $dishesOBJ->dishes_price)) {
                $arrayError['priceErr'] = 'Caractères incorrects ex : 10€00';
            } else {
                unset($arrayError['priceErr']);
            }
        }
        // DESCRIPTION
        if (empty($_POST['inputDesc'])) {
            $arrayError['descErr'] = 'La description est requis';
        } else {
            $dishesOBJ->dishes_description = test_input($_POST['inputDesc']);
            // vérifie si le champs contient un email
            if (!preg_match($patternTxt, $dishesOBJ->dishes_description)) {
                $arrayError['descErr'] = 'Format de texte invalide.';
            } else {
                unset($arrayError['descErr']);
            }
        }
        // CATEGORIES
        if (empty($_POST['selectCat'])) {
            $arrayError['catErr'] = 'Sélection requise';
        } else {
            $dishesOBJ->categories_id = test_input($_POST['selectCat']);
        }
        // SOUS-CATEGORIES
        if (empty($_POST['selectSubCat'])) {
            $arrayError['subCatErr'] = 'Sélection requise';
        } else {
            $dishesOBJ->subCategories_id = test_input($_POST['selectSubCat']);
        }
        // VALIDER
        if (isset($_REQUEST['submit']) && count($arrayError) == 0) {
            $dishesOBJ->addDishes();
            $addSuccess = true;
        }
    }

    // fonction de sécurisation de la saisie, injection de code, espaces et antislashs
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // Exercice 3
    /*if(isset($_GET('id')==))){
        
    }*/
?>