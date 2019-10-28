<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>

    <title>Accessori Ferro Speciali - Ghielmimport</title>
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
      <div id="content">
        <?php include "include/modal.php" ?>
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="container px-4 mt-3">
                <div id="sidebar-toggle">
                  <i class="fas fa-bars"></i>
                </div>
                <span class="page-title"
                  ><? translate("Modulo richiesta di offerta Accessori Ferro (speciali)", "Anfrageformular für Eisen (spezial)","Formulaire de demande d'offre Fer (special)") ?></span
                >
                <hr />
                <form id="accessoriferrospeciali">
                  <div class="form-group">
                    <label for="denominazionecantiere"
                      ><? translate("Denominazione cantiere", "Name der Baustelle","Désignation du site") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="denominazionecantiere"
                      placeholder="<? translate("Inserisci il nome del cantiere", "Geben Sie den Namen der Baustelle ein","Entrez le nom du chantier") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantiere"><? translate("Ubicazione cantiere", "Baustelle","Emplacement du site") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="cantiere"
                      placeholder="<? translate("Inserisci il luogo e il CAP", "Geben Sie den Ort und die Postleitzahl ein","Entrez le lieu et le code postal") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="lista1"
                      ><? translate("Allega liste accessori (Massimo 10MB)", "Zubehörlisten anhängen (maximal 10 MB)","Joindre des listes d’accessoires (10 Mo maximum)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="lista1"
                        />
                        <label
                          class="custom-file-label"
                          for="lista1"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sèlectionnez le fichier") ?></label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lista2"
                      ><? translate("Allega liste accessori (Massimo 10MB)", "Zubehörlisten anhängen (maximal 10 MB)","Joindre des listes d’accessoires (10 Mo maximum)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="lista2"
                        />
                        <label
                          class="custom-file-label"
                          for="lista2"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sèlectionnez le fichier") ?></label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lista3"
                      ><? translate("Allega liste accessori (Massimo 10MB)", "Zubehörlisten anhängen (maximal 10 MB)","Joindre des listes d’accessoires (10 Mo maximum)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="lista3"
                        />
                        <label
                          class="custom-file-label"
                          for="lista3"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sèlectionnez le fichier") ?></label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lista4"
                      ><? translate("Allega liste accessori (Massimo 10MB)", "Zubehörlisten anhängen (maximal 10 MB)","Joindre des listes d’accessoires (10 Mo maximum)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="lista4"
                        />
                        <label
                          class="custom-file-label"
                          for="lista4"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sélectionnez le fichier") ?></label
                        >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ingegnere"><? translate("Studio ingegneria civile", "Ingenieurbüro","Bureau ingénieur civil") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="ingegnere"
                      placeholder="<? translate("Inserisci il nome / azienda", "Geben Sie den Namen / die Firma ein","Entrez le nom / entreprise") ?>"
                    />
                  </div>

                  <?php include "include/contact.php"; ?>
                </form>
                <?php include "include/footer.php" ?>
              </div>
            </div>
            <div class="col-md px-4 mt-4">
              <p class="h4">Elementi termoisolanti</p>
              <img
                class="w-100 lightbox-img"
                src="assets/accessori/speciali/termoisolanti.png
                    "
                alt=""
              />
              <ul class="lista-caratteristiche">
                <li>
                  Risoluzione del problema delle connessioni dei balconi con la
                  struttura principale
                </li>
                <li>
                  Riduzione dei ponti termici e dei conseguenti danni legati
                  alla muffa e all’umidità
                </li>
                <li>
                  Disponibile in diverse versioni, in funzione delle molteplici
                  applicazioni edilizie
                </li>
              </ul>
              <p class="h4">Elementi al punzonamento</p>
              <img
                class="w-100 lightbox-img"
                src="assets/accessori/speciali/punzonamento.png
                    "
                alt=""
              />
              <ul class="lista-caratteristiche">
                <li>Installazione possibile dall'alto e dal basso</li>
                <li>Applicazione per solette piene, spessore ≥ 18 cm</li>
                <li>Installazione rapida e semplice</li>
                <li>
                  Fornitura di teste in acciaio in caso di carichi elevati
                </li>
              </ul>
              <p class="h4">Elementi insonorizzanti</p>
              <div class="row">
                <div class="col-sm">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/speciali/insonorizzanti.png"
                    alt=""
                  />
                </div>
                <div class="col-sm-5">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/speciali/insonorizzanti2.png"
                    alt=""
                  />
                </div>
              </div>
              <ul class="lista-caratteristiche">
                <li>Montaggio rapido e semplice grazie al kit di fornitura</li>
                <li>Elevato isolamento anticalpestio</li>
                <li>
                  Elementi speciali disponibili su richiesta per forze di taglio
                  contrastanti
                </li>
              </ul>
              <p class="h4">Sistemi per casseforme</p>
              <div class="row">
                <div class="col-sm">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/speciali/casseforme.png"
                    alt=""
                  />
                </div>
                <div class="col-sm">
                  <img
                    class="w-100 lightbox-img"
                    src="assets/accessori/speciali/casseforme2.png"
                    alt=""
                  />
                </div>
              </div>
              <ul class="lista-caratteristiche">
                <li>
                  Usato per i giunti di ripresa di elementi costruttivi
                  orizzontali in beton
                </li>
                <li>
                  Dotato di fori per dare continuità ai ferri d’armatura, non
                  richiede operazioni di disarmo, non ha effetti di
                  irruvidimento, e non deve essere pulito a fine getto
                </li>
                <li>
                  È ottimale al fine della velocizzazione del processo
                  cantieristico
                </li>
                <li>
                  Abbinabile alla posa di nastri impermeabili usati per i giunti
                  di lavoro.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>
  </body>
</html>
