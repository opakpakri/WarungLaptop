// Toggle Class Active //
const navbarNav = document.querySelector("#navbar");
//ketika hamburger menu di klik
document.querySelector("#bar").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Toggle class active untuk search //
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#lg-search").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};

//klik diluar elemen//
const hm = document.querySelector("#bar");
const sb = document.querySelector("#lg-search");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});

//Popup Iklan Index//
var Popup = document.querySelector(".popup");
var btn = document.querySelector(".popup-btn");
var iklan = document.querySelector(".popup-iklan");

setTimeout(function () {
  Popup.classList.add("popup-show");
}, 2000);

btn.addEventListener("click", function () {
  Popup.classList.remove("popup-show");
  Popup.classList.add("popup-close");
});
iklan.addEventListener("click", function () {
  Popup.classList.add("popup-close");
});

//fitur filter harga//
function toggleFilterButtons() {
  var filterButtons = document.querySelector(".filter-buttons");
  filterButtons.classList.toggle("visible");
}
