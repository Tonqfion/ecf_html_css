const toggleMenu = document.querySelector(".toggle-menu");
const menu = document.querySelector("#menu");
const mainHeader = document.querySelector(".site-header");
let positionAvant = window.pageYOffset;
const submitForm = document.querySelector(".submit-btn");

submitForm.addEventListener("submit", submitFunction);

toggleMenu.addEventListener("click", function () {
  const open = JSON.parse(toggleMenu.getAttribute("aria-expanded"));
  toggleMenu.setAttribute("aria-expanded", !open);
  menu.hidden = !menu.hidden;
  toggleMenu.classList.toggle("toggle");
});

window.onscroll = function () {
  let positionMaintenant = window.pageYOffset;
  if (positionAvant > positionMaintenant) {
    mainHeader.style.top = "0";
  } else {
    mainHeader.style.top = "-150px";
  }
  positionAvant = positionMaintenant;
};

function submitFunction(e) {
  e.preventDefault();
}
