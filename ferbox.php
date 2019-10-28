<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title>FERBOX - Ghielmimport</title>
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

      <div id="ferbox" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><? translate("Ferbox ferri di ripresa", "Ferbox Armierungs anschluss","Ferbox raccorderents d'armatures") ?></h5>
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
                src="assets/accessori/ferbox/ferbox-modelli.png"
                alt=""
              />
              <a href="assets/documenti/ferbox.pdf" class="btn btn-primary mt-2"
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
            ><? translate("Accessori Ferro (pronta consegna)", "Stahl Zubehöre (zur Auslieferung bereit)","Accessoires de fer (prêt à être livré)") ?></span
          >

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img
                    src="assets/accessori/ferbox.png"
                    alt=""
                    class="lightbox-img"
                  />
                </div>
                <div class="img-gallery">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/ferbox/ferbox1.png"
                    alt=""
                  />
                  <a onclick="$('#ferbox').modal('show')">
                    <img
                      class="img-portfolio w-100"
                      src="assets/accessori/ferbox/ferbox-modelli.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div class="col-sm m-3">
                <h3><? translate("Ferbox ferri di ripresa", "Ferbox Armierungsanschluss","Ferbox raccorderents d'armatures") ?></h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="ferbox">
                  <div class="form-group">
                    <label for="tipoferbox"><? translate("Tipo FERBOX", "Geben Sie FERBOX ein","Type FERBOX") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="tipoferbox"
                      placeholder="<? translate("Inserisci il tipo", "Schreiben Sie den Typ","Entrez le type") ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezza"><? translate("Lunghezza (metri)", "Länge (Meter)","Longueur (mètres)") ?></label>

                    <select class="form-control" id="lunghezza" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="0.80">0.80</option>
                      <option value="1.25">1.25</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametro"><? translate("Diametro (millimetri)", "Durchmesser (Millimeter)","Diamètre (millimètres)") ?></label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="8">8</option>
                      <option value="10">10</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="spessoreprimatappa"
                      ><? translate("Spessore muro 1° tappa (mm)", "Wanddicke 1. Etappe (mm)","Epaisseur de paroi 1er étage (mm)") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spessoreprimatappa"
                      placeholder="<? translate("Inserisci lo spessore", "Geben Sie die Dicke ein","Entrez l'épaisseur") ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label for="spessoresecondatappa"
                      ><? translate("Spessore muro 2° tappa (mm)", "Wanddicke 2. Etappe (mm)","Épaisseur de paroi du 2e étage (mm)") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spessoresecondatappa"
                      placeholder="<? translate("Inserisci lo spessore", "Geben Sie die Dicke ein","Entrez l'épaisseur") ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezzaancoraggio"
                      ><? translate("Lunghezza di ancoraggio (mm)", "Verankerungslänge (mm)","Longueur d'ancrage (mm)") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="lunghezzaancoraggio"
                      placeholder="<? translate("Inserisci la lunghezza", "Geben Sie die Länge ein","Entrez la longueur") ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label for="ferboxspeciali"
                      ><? translate("Eventuali FERBOX speciali", "Eventuelle spezielle FERBOX","Toute FERBOX spécial") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="ferboxspeciali"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="numeropezzi"><? translate("Numero pezzi (o metri)", "Stückzahl (oder Meter)","Nombre de pièces (ou mètres)") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="<? translate("Inserisci il numero di pezzi (o metri)", "Geben Sie die Anzahl  (oder Meter) ein","Entrez le nombre de pièces (ou mètres)") ?>"
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
