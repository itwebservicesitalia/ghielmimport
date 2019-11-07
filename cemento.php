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
            <div class="col-lg-8">
              <div class="container px-4 mt-3">
                <div id="sidebar-toggle">
                  <i class="fas fa-bars"></i>
                </div>
                <span class="page-title"
                  ><? translate("Modulo richiesta di offerta cemento","Anfrageformular für Zement","Formulaire de demande d'offre de ciment") ?></span
                >
                <hr />
                <form id="cemento">
                  <input id="language" type="hidden" value="<? translate('it','de','fr') ?>">
                  <div class="form-group">
                    <label for="denominazionecantiere"
                      ><? translate("Denominazione cantiere","Standortbezeichnung","Désignation du site") ?></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="denominazionecantiere"
                      placeholder="<? translate("Inserisci il nome del cantiere","Geben Sie den Namen der Baustelle ein","Entrez le nom du chantier") ?>"
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
                      <option value="sfuso"><? translate("Sfuso", "Lose","Vrac") ?></option>
                      <option value="sacco"><? translate("Sacco", "Sack","Sac") ?></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tipocemento"><? translate("Tipologia cemento", "Zement typ","Type de ciment") ?></label>
                    <select class="form-control" id="tipocemento" required>
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option disabled value=""><? translate("SFUSO", "LOSEZEMENT","CIMENT EN VRAC") ?></option>
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
                        >Cem I 52,5 R <? translate("Bianco", "Weiss","Blanc") ?></option
                      >
                      <option value="Cem II B-LL  42,5 R Bianco SFUSO"
                        >Cem II B-LL 42,5 R <? translate("Bianco", "Weiss","Blanc") ?></option
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
                        >Cem I 52,5 R <? translate("Bianco", "Weiss","Blanc") ?></option
                      >
                      <option value="Cem II B-LL  42,5 R Bianco SACCO"
                        >Cem II B-LL 42,5 R <? translate("Bianco", "Weiss","Blanc") ?></option
                      >
                      <option value="Cem II B-LL  32,5 R Bianco SACCO"
                        >Cem II B-LL 32,5 R <? translate("Bianco", "Weiss","Blanc") ?></option
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
                      può accedere al cantiere", "Fahrzeugtyp mit den maximal möglichen Abmessungen, die auf der Baustelle zugreifen können","Type de véhicule aux dimensions maximales possibles que le chantier peut attendre") ?></label
                    >
                    <select
                      class="form-control"
                      id="mezziaccessogomma"
                      required
                    >
                      <option selected disabled value=""><? translate("Scegli", "Wählen","Choisir") ?></option>
                      <option value="assi2"
                        ><? translate("2 Assi (Solo per Canton Ticino)", "2-Achsiger LKW (nur für Kanton Tessin)","2 Axes (uniquement pour le canton du Tessin)") ?></option
                      >
                      <option value="assi3"><? translate("3 Assi", "3-Achsiger LKW","3 Axes") ?></option>
                      <option value="assi4"><? translate("4 Assi", "4-Achsiger LKW","4 Axes") ?></option>
                      <option value="bilico"><? translate("Bilico", "Sattelsclepper","Semi-remorque") ?></option>
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
                      placeholder="<? translate("gg/mm/aaaa", "tt/mm/jjjj","jj/mm/aaaa") ?>"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="datafine"><? translate("Data presunta fine cantiere", "Voraussichtliches Ende der Baustelle","Fin préme du chantier") ?></label>
                    <input
                      type="text"
                      class="form-control"
                      id="datafine"
                      placeholder="<? translate("gg/mm/aaaa", "tt/mm/jjjj","jj/mm/aaaa") ?>"
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
            <div class="col-lg px-4 mt-4 d-flex flex-column justify-content-between">
              <div>
                <p class="h4"><? translate("Stoccaggio cemento Stabio", "Stabio zementlager","Depot de stockage de ciments en vrac à Stabio") ?></p>
                <img
                      class="w-100 lightbox-img"
                      src="assets/cemento/cemento1.jpg"
                      alt=""
                    />
                <p><? translate("L’impianto di Stabio è completamente automatizzato e consente di soddisfare tempestivamente le esigenze della clientela svizzera, sia ticinese che d’oltre Gottardo.", "Die Stabio-Anlage ist vollständig automatisiert und ermöglicht es Ihnen, schnell auf die Bedürfnisse der Schweizer Kunden im Tessin und darüber hinaus zu reagieren.","L'usine Stabio est entièrement automatisée et vous permet de répondre rapidement aux besoins des clients suisses, tant du Tessin que de Gottardo.") ?></p>
                <ul class="lista-dati">
                  <li><b>2500t</b> <? translate("di stoccaggio", "zementlager","de stockage") ?></li>
                  <li><b>7</b> <? translate("sili", "silo","silo") ?></li>
                  <li><b>9</b> <? translate("tipi di cemento", "zementsorten","ciments") ?></li>
                </ul>
                <img
                      class="w-100 lightbox-img"
                      src="assets/cemento/cemento2.jpg"
                      alt=""
                    />
                <p><? translate("L’impianto è a ridosso di un raccordo ferroviario ad uso esclusivo ed ha un sistema di carico dei vagoni che consente di consegnare i prodotti attraverso la rete ferroviaria.", "Das Werk befindet sich neben einem Eisenbahnknotenpunkt zur ausschließlichen Nutzung und verfügt über ein Wagenladesystem, mit dem die Produkte über das Eisenbahnnetz geliefert werden können.","L'usine est adjacente à un nœud ferroviaire à usage exclusif et dispose d'un système de chargement des wagons qui permet de livrer les produits via le réseau ferroviaire.") ?></p>
                <ul class="lista-dati">
                  <li><b>2</b> <? translate("punti di carico su gomma", "LKW-beladung","points de chargement camion") ?></li>
                  <li><b>1</b> <? translate("punto di carico per treni", "waggonbeladung","points de chargement train") ?></li>
                </ul>
                <img
                      class="w-100 lightbox-img"
                      src="assets/cemento/cemento3.jpg"
                      alt=""
                    />
                <p><? translate("Il cemento in sacco è disponibile nei magazzini di Mezzovico e di Serocca D’Agno", "Sackzement ist in den Lagern von Mezzovico und Serocca D’Agno erhältlich","Le ciment en sac est disponible dans les entrepôts de Mezzovico et Serocca D’Agno") ?></p>
                <img
                      class="w-100 lightbox-img"
                      src="assets/cemento/cemento4.jpg"
                      alt=""
                    />
                
                <img
                      class="w-100 lightbox-img pt-3"
                      src="assets/cemento/cemento5.jpg"
                      alt=""
                    />
              </div>
              <div>
                <img class="d-block m-auto" src="assets/logoghielmiswiss.jpg" style="width:180px; padding-bottom:5rem" alt="Ghielmimport Swiss">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "include/script.php" ?>

  </body>
</html>
