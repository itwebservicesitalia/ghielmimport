<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Legacci", "Drahtbinder","Wiretires") ?> - Ghielmimport</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "include/sidebar.php" ?>
      <div id="lightbox" class="modal">
          <div class="modal-xl modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                  <div class="modal-body">
                    <img class="w-100" src="" alt="" id="lightbox-modal-img">
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
          <span class="page-title d-md-block mb-2"><? translate("Accessori Ferro (pronta consegna)", "Stahl Zubehöre (zur Auslieferung bereit)","Accessoires de fer (prêt à être livré)") ?></span>

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img src="assets/accessori/legacci.png" alt="" class="lightbox-img" />
                </div>
              </div>
              <div class="col-sm m-3">
                <h3><? translate("Legacci", "Drahtbinder","Ligature à béton") ?></h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="drunterfix">
                  <input id="language" type="hidden" value="<? translate('it','de','fr') ?>">
                  <div class="form-group">
                    <label for="lunghezza"><? translate("Lunghezza (cm)", "Länge (cm)","Longueur (cm)") ?></label>

                    <select class="form-control" id="altezza" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="10">10</option>
                      <option value="12">12</option>
                      <option value="14">14</option>
                      <option value="16">16</option>
                      <option value="18">18</option>
                      <option value="20">20</option>
                      <option value="22">22</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="numeromazzi"><? translate("Numero mazzi", "Anzahl der Bund","Nombre de botte") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeromazzi"
                      placeholder="<? translate("Inserisci il numero di mazzi", "Geben Sie die Anzahl der Bund ein","Entrez le nombre de botte") ?>"
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
