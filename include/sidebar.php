<div class="overlay"></div>
<nav class="sidebar">
  <div class="logo">  
    <a href="https://ghielmimport.ch">
      <img src="assets/logo.png" alt=""/>
    </a>
  </div>
  <div class="sidebar-heading">
    <div class="row mb-2">
      <div class="col">
        <a href="?lang=it" class="btn btn-light <? if($_GET["lang"] === "it" || $_GET["lang"] === ""){ echo "active"; } ?>">IT</a>
      </div>
      <div class="col">
        <a href="?lang=de" class="btn btn-light <? if($_GET["lang"] === "de"){ echo "active"; } ?>">DE</a>
      </div>
      <div class="col">
        <a href="?lang=fr" class="btn btn-light <? if($_GET["lang"] === "fr"){ echo "active"; } ?>">FR</a>
      </div>
    </div>
    <span class="h4"><? translate("Richiesta d'offerta", "Anfrageformular","Demande d'offre") ?></span>
  </div>
  <ul class="sidebar-menu"> 
    <a href="ferro.php<? if($_GET["lang"]){echo "?lang=".$_GET["lang"];}; ?>"><li><? translate("Ferro", "Eisen","Fer") ?></li></a>
    <a href="accessoriferro.php<? if($_GET["lang"]){echo "?lang=".$_GET["lang"];}; ?>"><li><? translate("Accessori Ferro", "Eisen Zubehör","Accessoires de fer") ?></li></a>
    <a href="accessoriferrospeciali.php<? if($_GET["lang"]){echo "?lang=".$_GET["lang"];}; ?>"><li><? translate("Accessori Ferro (speciali)", "Eisen Zubehör (Spezial)","Accessoires de fer (spécial)") ?></li></a>
    <a href="cemento.php<? if($_GET["lang"]){echo "?lang=".$_GET["lang"];}; ?>"><li><? translate("Cemento", "Zement","Ciment") ?></li></a>
  </ul>
</nav>
