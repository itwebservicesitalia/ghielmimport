
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>
    <title><? translate("Ferro", "Angebot","Fer") ?> - Ghielmimport</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "include/sidebar.php"; ?>
      <div id="content">
      <?php include "include/modal.php" ?>

        <div id="empa" class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><? translate("Certificazione EMPA","EMPA-Zertifizierung","Certification EMPA") ?></h5>
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
                <img class="w-100" src="./assets/empa.png" alt="" />
                <a href="assets/documenti/empa.pdf" class="btn btn-primary mt-2"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
        </div>
        <div id="ferriere" class="modal" tabindex="-1" role="dialog">
          <div
            class="modal-lg modal-dialog modal-dialog-centered"
            role="document"
          >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><? translate("Registro ferriere certificate","Register der zertifizierten Eisenwerke","Registre des forges certifiées") ?></h5>
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
                <img class="w-100" src="./assets/ferriere.png" alt="" />
                <a
                  href="assets/documenti/ferriere.pdf"
                  class="btn btn-primary mt-2"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
        </div>

        <div id="dittecertificate" class="modal" tabindex="-1" role="dialog">
          <div
            class="modal-lg modal-dialog modal-dialog-centered"
            role="document"
          >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><? translate("Registro delle ditte certificate secondo la norma SIA 262 per la lavorazione del materiale in rotoli","Register der nach der Norm SIA 262 zertifizierten Unternehmen für die Verarbeitung von Rollenmaterial","Registre des entreprises certifiées selon la norme SIA 262 pour le traitement du matériau en rouleau") ?></h5>
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
                <img class="w-100" src="assets/registrodittecertificate.png" alt="" />
                <a
                  href="assets/documenti/registrodittecertificate.pdf"
                  class="btn btn-primary mt-2"
                  >Download PDF</a
                >
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="container px-4 mt-3">
                <div id="sidebar-toggle">
                  <i class="fas fa-bars"></i>
                </div>
                <span class="page-title"
                  ><? translate("Modulo richiesta di offerta Ferro", "Anfrageformular für Eisen Angebot","Formulaire de demande d'offre Fer") ?>
                  </span
                >
                <hr />
                <form id="ferro">
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
                    <label for="ferro"><? translate("Quantità ferro (tonnellate)", "Eisenmenge","Quantité de fer (tonnes)") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="ferro"
                      placeholder="... t"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantiereacquisito"><? translate("Cantiere Acquisito", "Baustelle Erworben","Acquisition du chantier") ?></label>
                    <select class="form-control" id="cantiereacquisito">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="SI"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="NO"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="mezziaccesso"
                      ><? translate("Tipologia di mezzo delle massime dimensioni possibili che
                      può raggiungere il cantiere", "Fahrzeugtyp mit den maximal möglichen Abmessungen, die er auf der Baustelle erreichen kann","Type de véhicule aux dimensions maximales possibles que le chantier peut atteindre") ?></label
                    >
                    <select class="form-control" id="mezziaccesso">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="assi2"
                        ><? translate("2 Assi (Solo per Canton Ticino)", "2-Achser LKW (nur für Kanton Tessin)","2 Axes (uniquement pour le canton du Tessin)") ?></option
                      >
                      <option value="assi3"><? translate("3 Assi", "3-Achser LKW","3 Axes") ?></option>
                      <option value="assi4"><? translate("4 Assi", "4-Achser LKW","4 Axes") ?></option>
                      <option value="bilico"><? translate("Bilico", "Sattelschlepper","Semi-remorque") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="limitazionicantiere"
                      ><? translate("Limitazioni eventuali di accesso al cantiere (portata e larghezza)", "Mögliche Einschränkungen des Site-Zugriffs (Kapazität und Breite)","Possibilités d'accès au site (capacité et largeur)") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="limitazionicantiere"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="grucantiere"><? translate("Fornitura con camion-gru", "Lieferung mit Autokran","Fourniture avec camion-grue") ?></label>
                    <select class="form-control" id="grucantiere">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="Si"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="No"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="datainizio"><? translate("Data inizio cantiere", "Baustellenstartdatum","Début du chantier") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="datainizio"
                      placeholder="<? translate("gg/mm/aaaa", "tt/mm/jjjj","jj/mm/aaaa") ?>"
                    />
                  </div>

                  <div class="form-group">
                    <label for="capitolato"
                      ><? translate("Allega capitolato tecnico (Massimo 10MB)", "Technische Spezifikationen beifügen (maximal 10 MB)","Joindre les spécifications techniques (maximum 10 Mo)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="capitolato"
                        />
                        <label
                          class="custom-file-label"
                          for="capitolato"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Sèlectionnez le fichier") ?></label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="disegni"><? translate("Allega disegni (Massimo 10MB)", "Zeichnungen anhängen (maximal 10 MB)","Joindre les dessins (maximum 10 Mo)") ?></label>
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="disegni"
                        />
                        <label
                          class="custom-file-label"
                          for="disegni"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Typologie de chantier") ?></label
                        >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tipologiacantiere"><? translate("Tipologia cantiere", "Baustellentypologie","Type du chantier") ?></label>
                    <select class="form-control" id="tipologiacantiere">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="residenziale"><? translate("Residenziale", "Wohn","Rèsidentiel") ?></option>
                      <option value="commercialeindustriale"
                        ><? translate("Commerciale/Industriale", "Gewerbe / Industrie","Commercial/Industriel") ?></option
                      >
                      <option value="geniocivile"><? translate("Genio Civile", "Tiefbau","Genie Civil") ?></option>
                      <option value="altro"><? translate("Altro", "Andere","Autre") ?></option>
                    </select>
                  </div>
                  <!-- Se residenziale -->

                  <div class="form-group d-none" id="residenziale">
                    <label for="presenzainterrato"><? translate("Ha un interrato?", "Hast du einen Keller?","Avez-vous un sous-sol?") ?></label>
                    <select class="form-control" id="presenzainterrato">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="SI"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="NO"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>

                  <!-- Se commerciale/industriale -->

                  <div class="form-group d-none" id="commercialeindustriale">
                    <label for="strutturaprefabbricata"
                      ><? translate("La struttura è prefabbricata?", "Ist die Struktur vorgefertigt?","La structure est-elle préfabriquée?") ?></label
                    >
                    <select class="form-control" id="strutturaprefabbricata">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="SI"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="NO"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <!-- Se altro -->

                  <div class="form-group d-none" id="altro">
                    <label for="descrizionecantiere"
                      ><? translate("Descrivi tipologia cantiere", "Beschreiben der Site-Typologie","Décrire la typologie du site") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="descrizionecantiere"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="ingegnere"><? translate("Studio ingegneria civile", "Ingenierurbüro","Bureau ingénieur civil") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="ingegnere"
                      placeholder="<? translate("Inserisci il nome / azienda", "Geben Sie den Namen / die Firma ein","Entrez le nom / entreprise") ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label for="tipofornitura"><? translate("Tipo di prestazione", "Art der Dienstleistungen","Type de service") ?></label>
                    <select class="form-control" id="tipofornitura">
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="fornituraposa"
                        ><? translate("Fornitura e posa", "Lieferung und verlegung","Fourniture et pose") ?></option
                      >
                      <option value="fornitura"
                        ><? translate("Fornitura (con posa effettuata dall'impresa)", "Lieferung (verlegung durch die Firma)","Fourniture (pose de la ferraillage par l'enterprise)") ?></option
                      >
                      <option value="altro"><? translate("Altro, specificare in informazioni aggiuntive","Anderes, in zusätzliche Informationen angeben","Autre, informations spécifiez dans supplémentaires") ?></option>
                    </select>
                  </div>
                  <?php include "include/contact.php"; ?>
                </form>
                <?php include "include/footer.php" ?>
              </div>
            </div>
            <div class="col-md px-4 mt-4">
              <p class="h4"><? translate("Certificazione EMPA","EMPA-Zertifizierung","Certification EMPA") ?></p>
              <div class="img-portfolio">
                <a onclick="$('#empa').modal('show')"
                  ><img class="w-100" src="assets/empa.png" alt=""
                /></a>
              </div>
              <br>
              <a href="assets/documenti/aspat.pdf" target="_blank" class="btn btn-primary"><? translate("Download Listino Aspat","Liste herunterladen Aspat","Télécharger la liste Aspat") ?></a>
              <p class="lead mt-2 text-justify">
              <? translate("Lo stabilimento Ghielmimport per la sagomatura del ferro per
                cemento armato ha la certificazione EMPA e usa esclusivamente
                materiale omologato per la Svizzera. Ghielmimport rispetta i
                requisiti di mandrinatura dettati dalla normativa SIA 262; nel
                programma di rilevamento delle liste ferro sono impostati i
                raggi corretti per ogni diametro e sagoma.", "Das Ghielmimport-Werk zur Umformung von Eisen für Stahlbeton ist EMPA-zertifiziert und verwendet ausschliesslich für die Schweiz zugelassenes Material. Ghielmimport respektiert die Erweiterungsanforderungen der SIA 262-Verordnung. Im eisenlistenerkennungsprogramm werden für jeden durchmesser und jede form die richtigen radien eingestellt.","L'usine de façonnage du fer pour béton armé de Ghielmimport est certifiée EMPA et utilise exclusivement des matériaux approuvés pour la Suisse. Ghielmimport respecte les exigences d'extension imposées par le règlement SIA 262; dans le programme de détection de liste de fer, les rayons corrects sont définis pour chaque diamètre et forme.") ?>
              </p>
              <p class="h4"><? translate("Registro ferriere certificate","Register der zertifizierten Eisenwerke","Registre des forges certifiées") ?></p>
              <div class="img-portfolio">
                <a onclick="$('#ferriere').modal('show')"
                  ><img class="w-100" src="assets/ferriere.png" alt=""
                /></a>
              </div>
              <br>
              <p class="h5"><? translate("Registro delle ditte certificate secondo la norma SIA 262 per la lavorazione del materiale in rotoli","Register der nach der Norm SIA 262 zertifizierten Unternehmen für die Verarbeitung von Rollenmaterial","Registre des entreprises certifiées selon la norme SIA 262 pour le traitement du matériau en rouleau") ?></p>
              <div class="img-portfolio">
                <a onclick="$('#dittecertificate').modal('show')"
                  ><img class="w-100" src="assets/registrodittecertificate.png" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>

    <script>
      var tipologiacantiere = document.getElementById("tipologiacantiere");
      var residenziale = document.getElementById("residenziale");
      var commercialeindustriale = document.getElementById(
        "commercialeindustriale"
      );
      var altro = document.getElementById("altro");

      tipologiacantiere.addEventListener("change", function(e) {
        switch (tipologiacantiere.value) {
          case "residenziale":
            residenziale.classList.remove("d-none");
            commercialeindustriale.classList.add("d-none");
            altro.classList.add("d-none");

            break;
          case "commercialeindustriale":
            residenziale.classList.add("d-none");
            commercialeindustriale.classList.remove("d-none");
            altro.classList.add("d-none");
            break;
          case "altro":
            residenziale.classList.add("d-none");
            commercialeindustriale.classList.add("d-none");
            altro.classList.remove("d-none");
            break;
          case "geniocivile":
            residenziale.classList.add("d-none");
            commercialeindustriale.classList.add("d-none");
            altro.classList.add("d-none");
            break;
        }
      });
    </script>
  </body>
</html>
