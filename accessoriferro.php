<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include "include/head.php" ?>
    <style>
      /* Card */
      .card .img-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        overflow: hidden;
      }
      .card .img-wrap img {
        width: 100%;
      }
    </style>
    <title><? translate("Accessori Ferro", "Bügeleisen-Zubehör","Accessoires de fer") ?> - Ghielmimport</title>
  </head>
  <body>
    <div class="wrapper">
    <?php include "include/sidebar.php" ?>
      <div id="content">
        <div class="container px-4 mt-3">
          <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
          </div>
          <span class="page-title"><? translate("Accessori Ferro (pronta consegna)", "Bügeleisen-Zubehör (schnelle Lieferung)","Accessoires de fer (livraison rapide)") ?></span>
          <hr />
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/easyfit.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title">EASYFIT</h5>

                    <a href="easyfit.php" class="btn btn-primary"
                      ><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/ferbox.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Ferbox ferri di ripresa", "Ferbox-Schießeisen","Ferbox fers à repasser") ?></h5>

                    <a href="ferbox.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/distanziatori.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Distanziatori", "Abstandshalter","Écarteurs") ?></h5>
                    <a href="distanziatori.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre)") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/legacci.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Legacci", "Wiretires","Wiretires") ?></h5>

                    <a href="legacci.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre)") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/spinotti.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Spinotti", "Jacks","Jacks") ?></h5>

                    <a href="spinotti.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre)") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/rasterfix.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Ferrofix tipo Rasterfix&reg;", "Ferrofix Typ Rasterfix&reg;","Type ferrofix Rasterfix&reg;") ?></h5>

                    <a href="rasterfix.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre)") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-3">
                <div class="img-wrap">
                  <img src="assets/accessori/drunterfix.png" alt="" />
                </div>
                <div class="card-body d-flex align-items-end pt-2">
                  <div class="card-content">
                    <h5 class="card-title"><? translate("Ferrofix tipo Drunterfix&reg;", "Ferrofix Typ Drunterfix&reg;","Type ferrofix Drunterfix&reg;") ?></h5>

                    <a href="drunterfix.php" class="btn btn-primary"
                      ><? translate("Richiedi offerta", "Angebot anforden","Demander une offre)") ?></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php include "include/footer.php" ?>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>
  </body>
</html>
