const scriptURL =
  "https://script.google.com/macros/s/AKfycby75WYTTkujAfBz8-m6PewwIVClpquBQBzpZNJ7kFb3YfjhV8oZWS9LSgWWo4tOefTF/exec";
const form = document.forms["techsec-form"];

form.addEventListener("submit", (e) => {
  $("#submit-date").val(
    new Date().toLocaleString("en-US", { timeZone: "Asia/Jakarta" })
  );
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => console.log("Successfully submited!", response))
    .catch((error) => console.error("Error!", error.message));
  alert("Successfully submited your contact information!");
});
