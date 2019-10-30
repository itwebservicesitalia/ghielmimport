<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Ferrofix tipo Drunterfix&reg;", "Ferrofix Typ Drunterfix&reg;","Type ferrofix Drunterfix&reg;") ?> - Ghielmimport</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "include/sidebar.php" ?>
      <div id="lightbox" class="modal">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-body">
              <img class="w-100" src="" alt="" id="lightbox-modal-img" />
            </div>
          </div>
        </div>
      </div>
      <?php include "include/modal.php" ?>

      <div id="content">
        <div class="container px-4 mt-3">
          <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
          </div>
          <span class="page-title d-md-block mb-2"
            ><? translate("Accessori Ferro (pronta consegna)", "Stahl Zubehöre (zur Auslieferung bereit)","Accessoires de fer (prêt à être livré)") ?></span
          >

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img
                    src="assets/accessori/drunterfix.png"
                    alt=""
                    class="lightbox-img"
                  />
                </div>
                <div class="img-gallery">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/drunterfix/drunterfix1.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-sm m-3">
                <h3><? translate("Ferrofix tipo Drunterfix&reg;", "Ferrofix Typ Drunterfix&reg;","Type ferrofix Drunterfix&reg;") ?></h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="drunterfix">
                  <input id="language" type="hidden" value="<? translate('it','de','fr') ?>">
                  <div class="form-group">
                    <label for="altezza"><? translate("Altezza (cm)", "Höhe (cm)","Hauteur (cm)") ?></label>

                    <select class="form-control" id="altezza" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="2">2</option>
                      <option value="2.5">2.5</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="numeropezzi"><? translate("Numero pezzi (o metri)", "Stückzahl (oder Meter)","Nombre de pièces (ou mètres)") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="<? translate("Inserisci il numero di pezzi (o metri)", "Geben Sie die Anzahl der Teile (oder Meter) ein","Entrez le nombre de pièces (ou mètres)") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantieremagazzino"
                      ><? translate("Cantiere o magazzino per eventuale consegna", "Baustelle oder Lager für eventuelle Lieferung","Chantier de construction ou entrepôt pour livraison possible") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="cantieremagazzino"
                      placeholder=""
                    />
                  </div>
                  <?php include "include/contact.php"; ?>

                </form>
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
