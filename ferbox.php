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
      <?php include "include/modal.php" ?>

      <div id="ferbox" class="modal" tabindex="-1" role="dialog">
        <div
          class="modal-xl modal-dialog modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">FERBOX Ferri di ripresa</h5>
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
            >Accessori Ferro (pronta consegna)</span
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
                <h3>Ferbox ferri di ripresa</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5">Richiesta d'offerta</p>
                <form id="ferbox">
                  <div class="form-group">
                    <label for="tipoferbox">Tipo FERBOX</label>
                    <input
                      type="text"
                      class="form-control"
                      id="tipoferbox"
                      placeholder="Inserisci il tipo"
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezza">Lunghezza (metri)</label>

                    <select class="form-control" id="lunghezza" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="0.80">0.80</option>
                      <option value="1.25">1.25</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="diametro">Diametro (millimetri)</label>

                    <select class="form-control" id="diametro" required>
                      <option selected disabled value="">Scegli</option>
                      <option value="8">8</option>
                      <option value="10">10</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="spessoreprimatappa"
                      >Spessore muro 1° tappa (mm)</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spessoreprimatappa"
                      placeholder="Inserisci lo spessore"
                    />
                  </div>
                  <div class="form-group">
                    <label for="spessoresecondatappa"
                      >Spessore muro 2° tappa (mm)</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="spessoresecondatappa"
                      placeholder="Inserisci lo spessore"
                    />
                  </div>
                  <div class="form-group">
                    <label for="lunghezzaancoraggio"
                      >Lunghezza di ancoraggio (mm)</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="lunghezzaancoraggio"
                      placeholder="Inserisci la lunghezza"
                    />
                  </div>
                  <div class="form-group">
                    <label for="ferboxspeciali"
                      >Eventuali FERBOX speciali</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="ferboxspeciali"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="numeropezzi">Numero pezzi (o metri)</label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeropezzi"
                      placeholder="Inserisci il numero di pezzi (o metri)"
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
