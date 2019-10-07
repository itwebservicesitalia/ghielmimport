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
      <div id="spinotti" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Spinotti</h5>
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
            >Accessori Ferro (pronta consegna)</span
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
                <h3>Spinotti</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5">Richiesta d'offerta</p>
                <form id="spinotti">
                  <div class="form-group">
                    <label for="tipospinotto">Tipo Spinotto</label>
                    <input
                      type="text"
                      class="form-control"
                      id="tipospinotto"
                      placeholder="Inserisci il tipo"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezza"
                      >Lunghezza spinotto (millimetri)</label
                    >

                    <select class="form-control" id="lunghezza" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="300">300</option>
                      <option value="350">350</option>
                      <option value="400">400</option>
                      <option value="500">500</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametro">Diametro spinotto (millimetri)</label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="20">20</option>
                      <option value="altro"
                        >Altro (specifica in informazioni aggiuntive)</option
                      >
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="lunghezzaguaina"
                      >Lunghezza guaina di plastica (millimetri)</label
                    >

                    <select class="form-control" id="lunghezzaguaina">
                      <option selected disabled value="">Scegli</option>
                      <option value="170">170</option>
                      <option value="195">195</option>
                      <option value="220">220</option>
                      <option value="270">270</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametroguaina"
                      >Diametro guaina (millimetri)</label
                    >

                    <select class="form-control" id="diametroguaina">
                      <option selected disabled value="">Scegli</option>
                      <option value="22">22</option>
                      <option value="altro"
                        >Altro (specifica in informazioni aggiuntive)</option
                      >
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="spinottispeciali"
                      >Eventuali spinotti + guaina speciali</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spinottispeciali"
                      placeholder=""
                    />
                  </div>

                  <div class="form-group">
                    <label for="numeropezzi">Numero pezzi</label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="Inserisci il numero di pezzi"
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
