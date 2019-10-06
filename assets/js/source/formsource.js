const axios = require("axios");

var APIURL = "http://api.ghielmimport.ch:1500";

var form = document.forms[0];
var submitBtn = document.getElementById("submit");

function BrowserDetection() {
  //Check if browser is IE
  if (navigator.userAgent.search("MSIE") >= 0) {
    alert(
      "Internet Explorer non è supportato! Utilizzare Chrome, Firefox o Safari"
    );
  }
  //Check if browser is Chrome
  else if (navigator.userAgent.search("Chrome") >= 0) {
    // insert conditional Chrome code here
  }
  //Check if browser is Firefox
  else if (navigator.userAgent.search("Firefox") >= 0) {
    // insert conditional Firefox Code here
  }
  //Check if browser is Safari
  else if (
    navigator.userAgent.search("Safari") >= 0 &&
    navigator.userAgent.search("Chrome") < 0
  ) {
    // insert conditional Safari code here
  }
  //Check if browser is Opera
  else if (navigator.userAgent.search("Opera") >= 0) {
    // insert conditional Opera code here
  }
}

BrowserDetection();

if (form) {
  //Aggiunge ai campi obbligatori il messaggio di errore
  for (var i = 0; i < form.length; i++) {
    if (form[i].required) {
      var invalidFeedback = document.createElement("div");

      invalidFeedback.classList.add("invalid-feedback");
      invalidFeedback.innerHTML = "Il campo è obbligatorio!";
      form[i].parentNode.insertBefore(invalidFeedback, form[i].nextSibling);
    }
  }
}

if (submitBtn) {
  //Evento click del pulsante submit del form
  submitBtn.addEventListener("click", e => {
    e.preventDefault();

    const data = new FormData();

    var requiredCounter = 0;
    for (var i = 0; i < form.length; i++) {
      switch (form[i].type) {
        case "file":
          var file = form[i].value;
          if (file !== "") {
            file = file.replace("C:\\fakepath\\", "");
            data.append(form[i].id, form[i].files[0], file);
          }
          break;
        default:
          if (form[i].required && form[i].value === "") {
            requiredCounter++;
            form[i].classList.add("is-invalid");
          } else {
            form[i].classList.remove("is-invalid");
            data.append(form[i].id, form[i].value);
          }
          break;
      }
    }
    if (requiredCounter !== 0) {
      $("html,body").animate(
        {
          scrollTop: 0
        },
        500
      );
    }

    if (document.querySelectorAll(".is-invalid").length > 0) return;
    axios
      .post(`${APIURL}/${form.id}`, data)
      .then(success => {
        $("html,body").animate(
          {
            scrollTop: 0
          },
          500
        );
        $("#conferma").modal("show");

        form.reset();
        var validInputs = document.querySelectorAll(".is-valid");
        for (var i = 0; i < validInputs.length; i++) {
          validInputs[i].classList.remove("is-valid");
        }
        console.log(success);
      })
      .catch(err => console.log(err));
  });
}

//Gestione input testo
var inputText = document.querySelectorAll("input,select");
for (var i = 0; i < inputText.length; i++) {
  inputText[i].addEventListener("change", e => {
    if (e.target.value !== "") {
      e.target.classList.add("is-valid");
      e.target.classList.remove("is-invalid");
    } else {
      e.target.classList.add("is-invalid");
      e.target.classList.remove("is-valid");
    }
  });
}

//Gestione input file
var inputFile = document.querySelectorAll(".custom-file-input");
for (var i = 0; i < inputFile.length; i++) {
  inputFile[i].addEventListener("change", e => {
    var file = e.target.files[0];
    console.log(file);
    if (file.size <= 10000000) {
      var fileName = file.name.replace("C:\\fakepath\\", "");
      e.target.nextElementSibling.innerHTML = fileName;
      e.target.classList.add("is-valid");
      e.target.classList.remove("is-invalid");
    } else {
      e.target.value = "";
      console.log(e.target.value);
      e.target.nextElementSibling.innerHTML =
        "Dimensione file superiore a 10MB";
      e.target.classList.add("is-invalid");
      e.target.classList.remove("is-valid");
    }
  });
}
