<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "include/head.php" ?>

    <title><? translate("Cemento","Zement","Ciment") ?> - Ghielmimport</title>
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
            <div class="col-sm-8">
              <div class="container px-4 mt-3">
                <div id="sidebar-toggle">
                  <i class="fas fa-bars"></i>
                </div>
                <span class="page-title"
                  ><? translate("Modulo richiesta di offerta cemento","Anfrageformular für Zement","Formulaire de demande d'offre de ciment") ?></span
                >
                <hr />
                <form id="cemento">
                  <div class="form-group">
                    <label for="denominazionecantiere"
                      ><? translate("Denominazione cantiere","Standortbezeichnung","Désignation du site") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="denominazionecantiere"
                      placeholder="<? translate("Inserisci il nome del cantiere","Geben Sie den Namen de Baustelle ein","Entrez le nom du chantier") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantiere"><? translate("Ubicazione cantiere","Standort der Baustelle","Emplacement du site") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="cantiere"
                      placeholder="<? translate("Inserisci il luogo e il CAP","Geben Sie den Ort und die Postleitzahl ein","Entrez lieu et code postal") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cemento"><? translate("Quantità cemento","Zement menge","Quantité de ciment") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="cemento"
                      placeholder="... t"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="cantiereacquisito"><? translate("Cantiere Acquisito","Baustelle Erworben","Acquisition du chantier") ?></label>
                    <select
                      class="form-control"
                      id="cantiereacquisito"
                      required
                    >
                    <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="SI"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="NO"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tipofornitura"><? translate("Tipologia fornitura", "Versorgungsart","Type d'approvisionnement") ?></label>
                    <select class="form-control" id="tipofornitura" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="sfuso"><? translate("Sfuso", "Lose","Viac") ?></option>
                      <option value="sacco"><? translate("Sacco", "Sack","Sac") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tipocemento"><? translate("Tipologia cemento", "Zement typ","Type de ciment") ?></label>
                    <select class="form-control" id="tipocemento" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option disabled value=""><? translate("SFUSO", "LOSEZEMENT","CIMENT EN VIAC") ?></option>
                      <option value="Cem II B-LL 32,5 R SFUSO"
                        >Cem II B-LL 32,5 R</option
                      >
                      <option value="Cem II A-LL 32,5 R SFUSO"
                        >Cem II A-LL 32,5 R</option
                      >
                      <option value="Cem II B-LL 42,5 R SFUSO"
                        >Cem II B-LL 42,5 R</option
                      >
                      <option value="Cem II A-LL 42,5 R SFUSO"
                        >Cem II A-LL 42,5 R</option
                      >
                      <option value="Cem III B 42,5N-LH/S R SFUSO"
                        >Cem III B 42,5N-LH/S R</option
                      >
                      <option value="Cem I 42,5 R SFUSO">Cem I 42,5 R</option>
                      <option value="Cem I 52,5 R SFUSO">Cem I 52,5 R</option>
                      <option value="Cem IV A-V 42,5 R SFUSO"
                        >Cem IV A-V 42,5 R</option
                      >
                      <option value="Cem I 52,5 R Bianco SFUSO"
                        >Cem I 52,5 R Bianco</option
                      >
                      <option value="Cem II B-LL  42,5 R Bianco SFUSO"
                        >Cem II B-LL 42,5 R Bianco</option
                      >
                      <option disabled value=""><? translate("SACCO", "SACKZEMENT","CIMENT EN SAC") ?></option>
                      <option value="Cem II B-LL 32,5 R SACCO"
                        >Cem II B-LL 32,5 R</option
                      >
                      <option value="Cem II A-LL 32,5 R SACCO"
                        >Cem II A-LL 32,5 R</option
                      >
                      <option value="Cem II B-LL 42,5 R SACCO"
                        >Cem II B-LL 42,5 R</option
                      >
                      <option value="Cem II A-LL 42,5 R SACCO"
                        >Cem II A-LL 42,5 R</option
                      >
                      <option value="Cem I 42,5 R SACCO">Cem I 42,5 R</option>
                      <option value="Cem I 52,5 R SACCO">Cem I 52,5 R</option>
                      <option value="Cem IV B-P 32,5 N SACCO"
                        >Cem IV B-P 32,5 N</option
                      >
                      <option value="Cem I 52,5 R Bianco SACCO"
                        >Cem I 52,5 R Bianco</option
                      >
                      <option value="Cem II B-LL  42,5 R Bianco SACCO"
                        >Cem II B-LL 42,5 R Bianco</option
                      >
                      <option value="Cem II B-LL  32,5 R Bianco SACCO"
                        >Cem II B-LL 32,5 R Bianco</option
                      >
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="requisititecnici"
                      ><? translate("Requisiti tecnici particolari", "Spezifische technische Anforderungen","Exigences techniques spéciales") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="requisititecnici"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="mezziaccessogomma"
                      ><b><? translate("CONSEGNA SU GOMMA:", "STRASSENTRANSPORT:","TRANSPORT ROUTIER:") ?></b><br />
                      <? translate("Tipologia di mezzo delle massime dimensioni possibili che
                      può accedere al cantiere", "Fahrzeugtyp mit den maximal möglichen Abmessungen, die auf der Baustelle zugreifen können","Type de véhicule aux dimensions maximales que le chantier peut attendre") ?></label
                    >
                    <select
                      class="form-control"
                      id="mezziaccessogomma"
                      required
                    >
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="assi2"
                        ><? translate("2 Assi (Solo per Canton Ticino)", "2-Achsiger (nur für Kanton Tessin)","2 axes (uniquement pour le canton du Tessin)") ?></option
                      >
                      <option value="assi3"><? translate("3 Assi", "3-Achsiger","3 As") ?></option>
                      <option value="assi4"><? translate("4 Assi", "4-Achsiger","4 As") ?></option>
                      <option value="bilico"><? translate("Bilico", "Satterschlepper","Equilibre") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="mezziaccessotreno"
                      ><b><? translate("CONSEGNA CON TRENO:", "LIEFERUNG DER BAHN:","LIVRAISON PAR TRAIN:") ?></b><br />
                      <? translate("Dotazione raccordo ferroviario", "Eisenbahnverbindung - Schienenverbindung","Liaison ferroviaire") ?></label
                    >
                    <select
                      class="form-control"
                      id="mezziaccessotreno"
                      required
                    >
                    <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="Si"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="No"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="limiti"
                      ><? translate("Eventuali limiti di accesso in altezza/larghezza", "Mögliche Zugangsbeschränkungen in Höhe / Breite","Limites d'accès possibles en hauteur / largeur") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="limiti"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label for="datainizio"><? translate("Data inizio cantiere", "Baustellenstartdatum","Début du chantier") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="datainizio"
                      placeholder="gg/mm/aaaa"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="datafine"><? translate("Data presunta fine cantiere", "Voraussichtliches Ende der Baustelle","Fin préme du chantier") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="datafine"
                      placeholder="gg/mm/aaaa"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="tipologiacantiere"><? translate("Tipologia cantiere", "Baustellentypologie","Typologie de chantier") ?></label>
                    <select
                      class="form-control"
                      id="tipologiacantiere"
                      required
                    >
                    <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="residenziale"><? translate("Residenziale", "Wohn","Rèsidentiel") ?></option>
                      <option value="commercialeindustriale"
                        ><? translate("Commerciale/Industriale", "Gewerbe / Industrie","Commercial/Industriel") ?></option
                      >
                      <option value="geniocivile"><? translate("Genio Civile", "Tiefbau","Genie civil") ?></option>
                      <option value="altro"><? translate("Altro", "Andere","Autre") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="grucantiere"><? translate("Fornitura con camion-gru", "Lieferung mit Autokran","Fourniture avec camion-grue") ?></label>
                    <select class="form-control" id="grucantiere" required>
                    <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="Si"><? translate("Si", "Ja","Oui") ?></option>
                      <option value="No"><? translate("No", "Nein","Non") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="documenti"
                      ><? translate("Allega documenti specifici (Massimo 20MB)", "Spezifische Dokumente anhängen (maximal 20 MB)","Joindre des documents spécifiques (maximum 20 Mo)") ?></label
                    >
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input
                          type="file"
                          class="custom-file-input"
                          id="documenti"
                        />
                        <label
                          class="custom-file-label"
                          for="capitolato"
                          data-browse="<? translate("Sfoglia", "Wählen","Choisir") ?>"
                          ><? translate("Seleziona il file", "Wählen Sie die Datei aus","Typologie de chantier") ?></label
                        >
                      </div>
                    </div>
                  </div>
                  <?php include "include/contact.php"; ?>
                </form>
                <?php include "include/footer.php" ?>
              </div>
            </div>
            <div class="col-sm px-4 mt-4">
              <p class="h4">Stoccaggio cemento Stabio</p>
              <img
                    class="w-100 lightbox-img"
                    src="assets/cemento/cemento1.jpg"
                    alt=""
                  />
              <ul class="lista-dati">
                <li><b>2500t</b> di stoccaggio</li>
                <li><b>7</b> sili</li>
                <li><b>9</b> tipi di cemento</li>
                <li><b>2</b> punti di carico su gomma</li>
                <li><b>1</b> punto di carico per treni</li>
              </ul>
              <img
                    class="w-100 lightbox-img"
                    src="assets/cemento/cemento2.jpg"
                    alt=""
                  />
              
              <img class="d-block pt-3 m-auto" src="assets/logoghielmiswiss.jpg" style="width:150px" alt="Ghielmimport Swiss">
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>

  </body>
</html>
