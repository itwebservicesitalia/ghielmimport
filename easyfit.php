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
            >Accessori Ferro (pronta consegna)</span
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
                <p class="h5">Richiesta d'offerta</p>
                <form id="easyfit">
                  <div class="form-group">
                    <label for="sagoma"
                      >Forma sagoma ferro
                      <a
                        href="javascript:void(0)"
                        onclick="$('#easyfit').modal('show')"
                        >(vedi allegato)</a
                      ></label
                    >

                    <select class="form-control" id="sagoma" required>
                      <option selected disabled value="">Scegli</option>
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
                    <label for="diametro">Diametro ferro (millimetri)</label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value="">Scegli</option>
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
                    <label for="numeropezzi">Numero pezzi</label>
                    <input
                      type="number"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="Inserisci il numero di pezzi"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="diametropiastrine"
                      >Diametro piastrine (millimetri)</label
                    >

                    <select
                      class="form-control"
                      id="diametropiastrine"
                      required
                    >
                      <option selected disabled value="">Scegli</option>
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
                      >Numero pezzi piastrine</label
                    >
                    <input
                      type="number"
                      class="form-control"
                      id="numeropezzipiastrine"
                      placeholder="Inserisci il numero di piastrine"
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
