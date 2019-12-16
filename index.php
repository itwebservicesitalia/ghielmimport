
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Richiesta d'offerta", "Anfrageformular","Demande d'offre") ?> - Ghielmimport</title>
    <style>
        .button-brand {
            background-color: #ff5b01;
            border:1px solid #ff5b01;
            color:#fff;
            text-transform: uppercase;
            font-weight:bold;
            transition:0.3s all;
        }
        .button-brand:hover {
            background-color:#fff;
            color:#ff5b01;
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <?php include "include/sidebar.php"; ?>
      <div id="content">
      <?php include "include/modal.php" ?>

        <div class="container mt-2">
        <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh">
            <div class="col-xl">
                <div class="card my-2">
                    <img src="assets/mockup/mockupferro.png" class="card-img-top p-2" alt="Richiesta d'offerta ferro">
                    <div class="card-body text-center">
                        <h4 class="card-title text-uppercase"><? translate("Ferro","Eisen","Fer") ?></h4>
                        <a href="ferro.php<? translate("","?lang=de","?lang=fr") ?>" class="btn btn-block button-brand"><? translate("Vai alla pagina","Gehe zur Seite","Aller à la page") ?></a>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card my-2">
                    <img src="assets/mockup/mockupaccessoriferro.png" class="card-img-top p-2" alt="Richiesta d'offerta accessori ferro">
                    <div class="card-body text-center">
                        <h4 class="card-title text-uppercase"><? translate("Accessori Ferro","Eisen Zubehör","Accessoires de fer") ?></h4>
                        <a href="accessoriferro.php<? translate("","?lang=de","?lang=fr") ?>" class="btn btn-block button-brand"><? translate("Vai alla pagina","Gehe zur Seite","Aller à la page") ?></a>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card my-2">
                    <img src="assets/mockup/mockupcemento.png" class="card-img-top p-2" alt="Richiesta d'offerta cemento">
                    <div class="card-body text-center">
                        <h4 class="card-title text-uppercase"><? translate("Cemento","Zement","Ciment") ?></h4>
                        <a href="cemento.php<? translate("","?lang=de","?lang=fr") ?>" class="btn btn-block button-brand"><? translate("Vai alla pagina","Gehe zur Seite","Aller à la page") ?></a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>
  </body>
</html>
