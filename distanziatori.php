<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title>Ghielmimport</title>
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
              <h5 class="modal-title">Distanziatori</h5>
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
            >Accessori Ferro (pronta consegna)</span
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
                <h3>Distanziatori</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5">Richiesta d'offerta</p>
                <form id="distanziatori">
                  <div class="form-group">
                    <label for="piedino">Presenza piedino</label>

                    <select class="form-control" id="piedino" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="si">Sì</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="altezza">Altezza (da 4cm a 110cm)</label>

                    <input
                      type="number"
                      class="form-control"
                      id="altezza"
                      placeholder="Inserisci l'altezza in centimetri"
                      required
                      min="4"
                      max="110"
                    />
                  </div>

                  <div class="form-group">
                    <label for="numeropezzi">Numero pezzi (o metri)</label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="Inserisci il numero di pezzi (o metri)"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantieremagazzino"
                      >Cantiere o magazzino per eventuale consegna</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="cantieremagazzino"
                      placeholder=""
                    />
                  </div>
                  <p class="h3"><? translate("Informazioni di contatto","Kontaktinformationen","Informations de contact") ?></p>
                  <hr />
                  <div class="form-group">
                    <label for="azienda"><? translate("Azienda","Unternehmen","Société") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="azienda"
                      placeholder="<? translate("Inserisci la ragione sociale","Geben Sie den Firmennamen ein","Entrez le nom de l'entreprise") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="personacontatto"><? translate("Persona di contatto","Ansprechpartner","Personne de contact") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="personacontatto"
                      placeholder="<? translate("Inserisci il nome","Geben Sie den Namen ein","Entrez le nom") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="email"><? translate("Email","Email","Email") ?></label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="<? translate("Inserisci la tua email","Geben Sie Ihre E-Mail-Adresse ein","Entrez votre email") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="telefono"><? translate("Telefono","Telefon","Téléphone") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="telefono"
                      placeholder="<? translate("Inserisci il numero di telefono","Geben Sie die Telefonnummer ein","Entrez le numéro de téléphone") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="messaggio"><? translate("Informazioni aggiuntive","Zusätzliche Informationen","Informations complémentaires") ?></label>
                    <textarea
                      class="form-control"
                      id="messaggio"
                      rows="6"
                    ></textarea>
                  </div>
                  <a
                    href="javascript:void(0)"
                    id="submit"
                    class="btn btn-block btn-primary text-white mb-2"
                  >
                  <? translate("Invia la richiesta","Senden sie die anfrage","Envoyer la demande") ?>
                  </a>
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
