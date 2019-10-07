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
      <div id="conferma" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Conferma invio richiesta di offerta</h5>
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
              <p>
                Gentile Cliente, la sua richiesta è stata inviata con successo!
              </p>
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
                  <img
                    src="assets/accessori/rasterfix.png"
                    alt=""
                    class="lightbox-img"
                  />
                </div>
                <div class="img-gallery">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/rasterfix/rasterfix1.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-sm m-3">
                <h3>Ferrofix tipo Rasterfix&reg;</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5">Richiesta d'offerta</p>
                <form id="rasterfix">
                  <div class="form-group">
                    <label for="altezza">Altezza (cm)</label>

                    <select class="form-control" id="altezza" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="2">2</option>
                      <option value="2.5">2.5</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
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
                  <p class="h4">Informazioni di contatto</p>
                  <hr />
                  <div class="form-group">
                    <label for="azienda">Azienda</label>
                    <input
                      type="text"
                      class="form-control"
                      id="azienda"
                      placeholder="Inserisci la ragione sociale"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="personacontatto">Persona di contatto</label>
                    <input
                      type="text"
                      class="form-control"
                      id="personacontatto"
                      placeholder="Inserisci il nome"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Inserisci la tua email"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input
                      type="text"
                      class="form-control"
                      id="telefono"
                      placeholder="Inserisci il numero di telefono"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="messaggio">Informazioni aggiuntive</label>
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
                    Invia la richiesta
                  </a>
                </form>
              </div>
            </div>
          </div>
          <hr />
          <footer>
            <p>Copyright &copy; 2019 Ghielmimport SA</p>
          </footer>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>
  </body>
</html>
