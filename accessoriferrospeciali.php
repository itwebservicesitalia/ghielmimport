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
                  <input id="language" type="hidden" value="<? translate('it','de','fr') ?>">
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
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sélectionnez le fichier") ?></label
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
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sélectionnez le fichier") ?></label
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
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sélectionnez le fichier") ?></label
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
              <p class="h4"><? translate("Elementi termoisolanti","Elementi termoisolanti","Élements d'armature thermo-isolants") ?></p>
              <img
                class="w-100 lightbox-img"
                src="assets/accessori/speciali/termoisolanti.png
                    "
                alt=""
              />
              <ul class="lista-caratteristiche">
                <li>
                <? translate("Risoluzione del problema delle connessioni dei balconi con la struttura principale","Risoluzione del problema delle connessioni dei balconi con la struttura principale","Ils résolvent le question de la connexion du balcon avec la structure principale") ?>
                </li>
                <li>
                <? translate("Riduzione dei ponti termici e dei conseguenti danni legati alla muffa e all’umidità","Riduzione dei ponti termici e dei conseguenti danni legati alla muffa e all’umidità","Ils limitent sensiblement les ponts thermiques et les domages dûs à la mousissure et à l'humidité") ?>
                </li>
                <li>
                <? translate("Disponibile in diverse versioni, in funzione delle molteplici applicazioni edilizie","Disponibile in diverse versioni, in funzione delle molteplici applicazioni edilizie","Disponibles en plusieurs variantes, relatives à de multiples situations techniques") ?>
                </li>
              </ul>
              <p class="h4"><? translate("Elementi al punzonamento","Elementi al punzonamento","Technique de poinçonnement") ?></p>
              <img
                class="w-100 lightbox-img"
                src="assets/accessori/speciali/punzonamento.png
                    "
                alt=""
              />
              <ul class="lista-caratteristiche">
                <li><? translate("Installazione possibile dall'alto e dal basso","Installazione possibile dall'alto e dal basso","Le positionnement est possible par le haut et par le dessous") ?></li>
                <li><? translate("Applicazione per solette piene, spessore ≥ 18 cm","Applicazione per solette piene, spessore ≥ 18 cm","Ils pouvent être utilisés pour les dalles en beton d'épaisseur ≥ 18cm") ?></li>
                <li><? translate("Installazione rapida e semplice","Installazione rapida e semplice","Montage rapide et simple") ?></li>
                <li>
                <? translate("Fornitura di teste in acciaio in caso di carichi elevati","Fornitura di teste in acciaio in caso di carichi elevati","Élements speciaux (têtes de poinçonnement en acier) sont fournis relativement à éléves charges") ?>
                </li>
              </ul>
              <p class="h4"><? translate("Elementi insonorizzanti","Elementi insonorizzanti","Élements insonorisants") ?></p>
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
                <li><? translate("Montaggio rapido e semplice grazie al kit di fornitura","Montaggio rapido e semplice grazie al kit di fornitura","Mise en oeuvre simple et rapid") ?></li>
                <li><? translate("Elevato isolamento anticalpestio","Elevato isolamento anticalpestio","Isolation élévée contre les bruits de l'escalier vers les murs de la cage d'escalier") ?></li>
                <li>
                <? translate("Elementi speciali disponibili su richiesta per forze di taglio contrastanti","Elementi speciali disponibili su richiesta per forze di taglio contrastanti","Disponible avec le manchon antifeu (classe de résistance au feu F90)") ?>
                </li>
              </ul>
              <p class="h4"><? translate("Sistemi per casseforme","Sistemi per casseforme","Technique de coffrage") ?></p>
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
                <? translate("Usato per i giunti di ripresa di elementi costruttivi
                  orizzontali in beton","Usato per i giunti di ripresa di elementi costruttivi orizzontali in beton","Utilisé pour joints de reprise horizontals (radiers et dalles) et verticals (murs)") ?>
                </li>
                <li>
                <? translate("Dotato di fori per dare continuità ai ferri d’armatura non richiede operazioni di disarmo, non ha effetti di irruvidimento, e non deve essere pulito a fine getto","Dotato di fori per dare continuità ai ferri d’armatura non richiede operazioni di disarmo, non ha effetti di irruvidimento, e non deve essere pulito a fine getto","Avec trous pour garantir la continuité des fers et dentelure de joints") ?>
                </li>
                <li>
                <? translate("È ottimale al fine della velocizzazione del processo
                  cantieristico","È ottimale al fine della velocizzazione del processo cantieristico","Pas de décoffrage, ni de grattage et de nottoyage, donc pas d'interruption du travail") ?>
                </li>
                <li>
                <? translate("Abbinabile alla posa di nastri impermeabili usati per i giunti di lavoro.","Abbinabile alla posa di nastri impermeabili usati per i giunti di lavoro.","Possibilité de combinaison avec des membranes étanches pour joints de reprise") ?>
                  
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
