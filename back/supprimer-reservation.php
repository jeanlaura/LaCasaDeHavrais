<?php 
    require_once '../controllers/controllerSupprimer-reservation.php';
    include 'header_back.php';
?>
<!-- CONTENT PAGE -->
<div class="content-wrap marginTop" id="margSuppResa">
    <div class="container-fluid">
        <div class="row">
        <?php
            if ($success){
        ?>
            <p id="pResaSupp">Votre réservation à bien été supprimé !</p>
        </div>
        <div class="row">
            <div class="col-md-6" id="suppResaDiv6">
                <div class="col-md-4" id="suppResaDiv4">
                    <a href="listReservation.php" class="btn btn-primary btnResaBack">Retour à la liste des réservation</a>
                </div>
                <div class="col-md-4" align="center">
                    <a href="index.php" class="btn btn-default btnResaBack">Accueil</a>
                </div>
                <div class="col-md-4">
                    <a href="ajout-reservation.php" class="btn btn-info btnResaBack">Ajouter une réservation</a>
                </div>
            </div>
        <?php        
            }else{
                echo 'Dommage pour toi, ça n\'a pas fonctionné.';
            }
        ?>
        </div>
    </div>
</div>
<?php include 'footer_back.php'; ?>