<?php
    session_start();
    if (isset($_POST['inputPasswordConnectBack']) && $_POST['inputPasswordConnectBack'] == 'lcdhLH@2019') {
        $_SESSION['admin'] = 'ok';
    }
    if(isset($_POST['submitDeco'])){
        unset($_SESSION['admin']);
    }
    if(isset($_SESSION['admin'])){
        include 'header_back.php';
?>
    <!-- CONTENT PAGE -->
    <div class="container marginTop">
        <div class="row justify-content-center" id="margBienv">
            <div class="col-md-12" align="center">
                <h1>Bienvenue dans la partie Back du restaurant LaCasaDeHavrais !</h1>
            </div>
        </div>
    </div>
<?php } else { ?>
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <div class="row" id="margBienv" align="center">
        <form action="" method="post" class="form-example" id="formConnectBack">
            <div class="md-form">
                <input placeholder="Entrez votre pseudo" type="text" name="inputNameConnectBack" id="inputNameConnectBack" class="form-control" required>
            </div>
            <div class="md-form">
                <input placeholder="Entrez votre password" type="password" name="inputPasswordConnectBack" id="inputPasswordConnectBack" class="form-control" required>
            </div>
            <div class="md-form">
                <input class="btn btn-light" type="submit" value="C'est parti !">
            </div>
        </form>
    </div>
<?php } ?>
<?php include 'footer_back.php'; ?>