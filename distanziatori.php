<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Distanziatori", "Abstandshalter","Écarteurs") ?> - Ghielmimport</title>
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
      <div id="distanziatori" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><? translate("Distanziatori", "Abstandshalter","Écarteurs") ?></h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img
                class="w-100"
                src="assets/accessori/distanziatori/distanziatori-modelli.png"
                alt=""
              />

              <a
                href="assets/documenti/distanziatori.pdf"
                class="btn btn-primary mt-2"
                >Download PDF</a
              >
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container px-4 mt-3">
          <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
          </div>
          <span class="page-title d-md-block mb-2"
            ><? translate("Accessori Ferro (pronta consegna)", "Bügeleisen-Zubehör (schnelle Lieferung)","Accessoires de fer (livraison rapide)") ?></span
          >

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img src="assets/accessori/distanziatori.png" alt="" class="lightbox-img" />
                </div>
                <div class="img-gallery">
                  <a onclick="$('#distanziatori').modal('show')">
                    <img
                      class="img-portfolio w-100"
                      src="assets/accessori/distanziatori/distanziatori-modelli.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div class="col-sm m-3">
                <h3><? translate("Distanziatori", "Abstandshalter","Écarteurs") ?></h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="distanziatori">
                  <div class="form-group">
                    <label for="piedino"><? translate("Presenza piedino", "Fußpräsenz","Présence de pied") ?></label>

                    <select class="form-control" id="piedino" required>
                    <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="SI"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="NO"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="altezza"><? translate("Altezza (da 4cm a 110cm)", "Höhe (von 4 cm bis 110 cm)","Hauteur (de 4cm à 110cm)") ?></label>

                    <input
                      type="number"
                      class="form-control"
                      id="altezza"
                      placeholder="<? translate("Inserisci l'altezza in centimetri", "Geben Sie die Höhe in Zentimetern ein","Entrez la hauteur en centimètres") ?>"
                      required
                      min="4"
                      max="110"
                    />
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
                      ><? translate("Cantiere o magazzino per eventuale consegna", "Baustelle oder Lager für mögliche Lieferung","Chantier de construction ou entrepôt pour livraison possible") ?></label
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
