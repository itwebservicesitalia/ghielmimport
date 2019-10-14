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


      <div id="content">
        <div class="container px-4 mt-3">
          <div id="sidebar-toggle">
            <i class="fas fa-bars"></i>
          </div>
          <span class="page-title d-md-block mb-2">Accessori Ferro</span>

          <div class="card">
            <div class="row">
              <div class="col-sm-4">
                <div class="img-container">
                  <img src="assets/accessori/legacci.png" alt="" class="lightbox-img" />
                </div>
              </div>
              <div class="col-sm m-3">
                <h3>Legacci</h3>
                <p class="lead"></p>
                <hr />
                <p class="h5">Richiesta d'offerta</p>
                <form id="drunterfix">
                  <div class="form-group">
                    <label for="lunghezza">Lunghezza (cm)</label>

                    <select class="form-control" id="altezza" required>
                      <option selected disabled value="">Scegli</option>
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
                    <label for="numeromazzi">Numero mazzi</label>
                    <input
                      type="text"
                      class="form-control"
                      id="numeromazzi"
                      placeholder="Inserisci il numero di mazzi"
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
