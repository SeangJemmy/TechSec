function addScript(scriptt) {
  var script = document.createElement("script");
  script.src = scriptt;
  script.type = "text/javascript";
  document.getElementsByTagName("head")[0].appendChild(script);
  console.log("Added " + scriptt);
}

function valEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

window.onload = function () {
  var mybutton = document.getElementById("myBtn");
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 40 ||
      document.documentElement.scrollTop > 40
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  document.getElementById("copyrightFooter").innerHTML =
    new Date().getFullYear();
};

$(document).ready(function () {
  const subemailform = document.forms["subscribe-email-form"];
  const subemailURL =
    "https://script.google.com/macros/s/AKfycbyzrgLU9rhsxo7GxFsUpXCi6P6ASil8RJk_GsWFo3sNPMNOocIhwbKLYmw8s-3wyQE/exec";

  subemailform.addEventListener("submit", (e) => {
    e.preventDefault();
    var subEm = $("#subscribe-email").val();
    if (!subEm || !valEmail(subEm)) {
      alert("You need to enter a valid email address!");
    } else {
      fetch(subemailURL, { method: "POST", body: new FormData(subemailform) })
        .then((response) => console.log("Success!", response))
        .catch((error) => console.error("Error!", error.message));
      alert(
        `You have successfully subscribed to our newsletter using email:\n - ${subEm}\n\nThank you for joining our service!\n~ TecSec`
      );
      $("#subscribe-email").val("");
    }
  });
});
