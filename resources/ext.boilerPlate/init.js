function logAndStoreURL() {
  const currentPageURL = window.location.href;
  console.log(currentPageURL);
}
logAndStoreURL();

function takeSummary() {
  console.log("Le résumé a été pris !");
}
const button = document.querySelector(".mw-htmlform-submit");

button.addEventListener("click", takeSummary);

const div = document.createElement('div');