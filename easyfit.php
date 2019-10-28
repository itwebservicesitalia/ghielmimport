<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title>EASYFIT - Ghielmimport</title>
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

      <div id="easyfit" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">EASYFIT</h5>
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
                src="assets/accessori/easyfit/easyfit-modelli.png"
                alt=""
              />
              <a
                href="assets/documenti/easyfit.pdf"
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
                    src="assets/accessori/easyfit.png"
                    alt=""
                    class="lightbox-img"
                  />
                </div>
                <div class="img-gallery">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/easyfit/easyfit1.png"
                    alt=""
                  />
                  <a onclick="$('#easyfit').modal('show')">
                    <img
                      class="img-portfolio w-100"
                      src="assets/accessori/easyfit/easyfit-modelli.png"
                      alt=""
                    />
                  </a>
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/easyfit/easyfit2.jpg"
                    alt=""
                  />
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/easyfit/easyfit3.jpg"
                    alt=""
                  />
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/easyfit/easyfit4.jpg"
                    alt=""
                  />
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/easyfit/easyfit5.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-sm m-3">
                <h3>EASYFIT</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5"><? translate("Richiesta d'offerta", "Angebotsanfrage","Demande d'offre") ?></p>
                <form id="easyfit">
                  <div class="form-group">
                    <label for="sagoma"
                      ><? translate("Forma sagoma ferro", "Eisenform","Forme de fer") ?>
                      <a
                        href="javascript:void(0)"
                        onclick="$('#easyfit').modal('show')"
                        ><? translate("(vedi allegato)", "(siehe Anhang)","(voir pièce jointe)") ?></a
                      ></label
                    >

                    <select class="form-control" id="sagoma" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="MU">MU</option>
                      <option value="DMU">DMU</option>
                      <option value="ANMU">ANMU</option>
                      <option value="AN">AN</option>
                      <option value="MUEG">MUEG</option>
                      <option value="MUEV">MUEV</option>
                      <option value="MUB">MUB</option>
                      <option value="ANB">ANB</option>
                      <option value="NT">NT</option>
                      <option value="DMUB">DMUB</option>
                      <option value="ANMUB">ANMUB</option>
                      <option value="SpannmuffeSP">Spannmuffe SP</option>
                      <option value="MUBB">MUBB</option>
                      <option value="ANBB">ANBB</option>
                      <option value="DMUBB">DMUBB</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametro"><? translate("Diametro ferro (millimetri)", "Eisendurchmesser (Millimeter)","Diamètre du fer (millimètres)") ?></label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="10">10</option>
                      <option value="12">12</option>
                      <option value="14">14</option>
                      <option value="16">16</option>
                      <option value="18">18</option>
                      <option value="20">20</option>
                      <option value="22">22</option>
                      <option value="26">26</option>
                      <option value="30">30</option>
                      <option value="34">34</option>
                      <option value="40">40</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="numeropezzi"><? translate("Numero pezzi", "Stückzahl","Nombre de pièces") ?></label>
                    <input
                      type="number"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="<? translate("Inserisci il numero di pezzi", "Geben Sie die Stückzahl ein","Entrez le nombre de pièces") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="diametropiastrine"
                      ><? translate("Diametro piastrine (millimetri)", "Nageltellerdurchmesser (Millimeter)","Diamètre des plaquettes (millimètres)") ?></label
                    >

                    <select
                      class="form-control"
                      id="diametropiastrine"
                      required
                    >
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="10">10</option>
                      <option value="12">12</option>
                      <option value="14">14</option>
                      <option value="16">16</option>
                      <option value="18">18</option>
                      <option value="20">20</option>
                      <option value="22">22</option>
                      <option value="26">26</option>
                      <option value="30">30</option>
                      <option value="34">34</option>
                      <option value="40">40</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="numeropezzipiastrine"
                      ><? translate("Numero pezzi piastrine", "Anzahl Nagelteller","Nombre de pièces de plaquette") ?></label
                    >
                    <input
                      type="number"
                      class="form-control"
                      id="numeropezzipiastrine"
                      placeholder="<? translate("Inserisci il numero di piastrine", "Geben Sie die Anzahl","Entrez le nombre de plaquettes") ?>"
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
