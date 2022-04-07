let navStorage = sessionStorage.getItem("navstate");
const menuBtn = document.querySelector(".burger-btn");
const navContainer = document.querySelector(".nav-container");
const navList = document.querySelector(".nav-list");


// toggle navbar and keep mobile menu open on refresh
const toggleNav = () => {
  navStorage = sessionStorage.getItem("navstate");
  navContainer.classList.toggle("open");
  navList.classList.toggle("open");

  if (navContainer.classList.contains("open")) {
    sessionStorage.setItem("navstate", "open");
  } else {
    sessionStorage.setItem("navstate", "closed");
  }
};

if (navStorage === "open") {
  navContainer.classList.add("open");
  navList.classList.add("open");
}

menuBtn.addEventListener("click", () => {
  toggleNav();
});

// Close mobile nav on larger screens
function windowSize() {
  const list = document.querySelector(".nav-list");

  widthOutput = window.innerWidth;
  if (window.innerWidth > 800) {
    navContainer.classList.remove("open");
    navList.classList.remove("open");
    sessionStorage.setItem("navstate", "closed");
  }
}

window.onload = windowSize;
window.onresize = windowSize;

// Close mobile menu when clicking a link
const item = document.querySelectorAll("a");

item.forEach((link) => {
  link.addEventListener("click", function () {
    sessionStorage.setItem("navstate", "closed");
  });
});
