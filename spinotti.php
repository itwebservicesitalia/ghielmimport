<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Spinotti", "Schubdorne","Jacks") ?> - Ghielmimport</title>
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

      <div id="spinotti" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><? translate("Spinotti", "Schubdorne","Jacks") ?></h5>
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
                src="assets/accessori/spinotti/spinotti-modelli.png"
                alt=""
              />
              <a
                href="assets/documenti/spinotti.pdf"
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
            ><? translate("Accessori Ferro (pronta consegna)", "Stahl Zubehöre (zur Auslieferung bereit)","Accessoires de fer (prêt à être livré)") ?></span
          >

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img
                    src="assets/accessori/spinotti.png"
                    alt=""
                    class="lightbox-img"
                  />
                </div>
                <div class="img-gallery">
                  <a onclick="$('#spinotti').modal('show')">
                    <img
                      class="img-portfolio w-100"
                      src="assets/accessori/spinotti/spinotti-modelli.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <div class="col-sm m-3">
                <h3><? translate("Spinotti", "Schubdorne","Goujons") ?></h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="spinotti">
                  <div class="form-group">
                    <label for="tipospinotto"><? translate("Tipo Spinotto", "Schubdorne Typ","Type de goujon") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="tipospinotto"
                      placeholder="<? translate("Inserisci il tipo", "Geben Sie den Typ ein","Entrez le type") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezza"
                      ><? translate("Lunghezza spinotto (millimetri)", "Schubdornlänge (Millimeter)","Longueur du goujon (millimètres)") ?></label
                    >

                    <select class="form-control" id="lunghezza" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="300">300</option>
                      <option value="350">350</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametro"><? translate("Diametro spinotto (millimetri)", "Schubdorndurchmesser (mm)","Diamètre du goujon (mm)") ?></label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="20">20</option>
                      <option value="altro"
                        ><? translate("Altro (specifica in informazioni aggiuntive)", "Sonstiges (in zusätzlichen Informationen angeben)","Autre (préciser dans les informations supplémentaires)") ?></option
                      >
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lunghezzaguaina"
                      ><? translate("Lunghezza guaina di plastica (millimetri)", "Länge der Kunststoffhülse (Millimeter)","Longueur de la gaine en plastique (millimètres)") ?></label
                    >

                    <select class="form-control" id="lunghezzaguaina">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="170">170</option>
                      <option value="195">195</option>
                      <option value="220">220</option>
                      <option value="270">270</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametroguaina"
                      ><? translate("Diametro guaina (millimetri)", "Hülsedurchmesser (mm)","Diamètre de la gaine (mm)") ?></label
                    >

                    <select class="form-control" id="diametroguaina">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="22">22</option>
                      <option value="altro"
                        ><? translate("Lunghezza guaina di plastica (millimetri)", "Länge der Kunststoffhülle (Millimeter)","Longueur de la gaine en plastique (millimètres)") ?></option
                      >
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="spinottispeciali"
                      ><? translate("Eventuali spinotti + guaina speciali", "Eventuelle Schubdorne + Hülsen spezielle","Goujons + gaines spéciales") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spinottispeciali"
                      placeholder=""
                    />
                  </div>

                  <div class="form-group">
                    <label for="numeropezzi"><? translate("Numero pezzi", "Stückzahl","Nombre de pièces") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="<? translate("Inserisci il numero di pezzi", "Geben Sie die Anzahl ein","Entrez le nombre de pièces") ?>"
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
