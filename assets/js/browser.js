function BrowserDetection() {
  //Check if browser is IE
  if (
    navigator.userAgent.indexOf("MSIE ") > -1 ||
    navigator.userAgent.indexOf("Trident/") > -1
  ) {
    alert(
      "Internet Explorer non è più supportato! Utilizzare Chrome, Firefox, Safari o Microsoft EDGE"
    );
  }
}

BrowserDetection();
