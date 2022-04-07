// toggle navbar and keep mobile menu open on refresh
let navStorage = sessionStorage.getItem("navstate");
const menuBtn = document.querySelector(".burger-btn");
const topNav = document.querySelector("#menu-top-nav");
const listItem = document.querySelectorAll("li");

const toggleNav = () => {
  navStorage = sessionStorage.getItem("navstate");
  topNav.classList.toggle("open");
  listItem.forEach((item) => {
    item.classList.toggle("show");
  });

  if (topNav.classList.contains("open")) {
    sessionStorage.setItem("navstate", "open");
  } else {
    sessionStorage.setItem("navstate", "closed");
  }
};

if (navStorage === "open") {
  topNav.classList.add("open");
  listItem.forEach((item) => {
    item.classList.add("show");
  });
}

menuBtn.addEventListener("click", () => {
  toggleNav();
});

// Close mobile nav on larger screens
function windowSize() {
  const list = document.querySelector("#menu-top-nav");

  widthOutput = window.innerWidth;
  if (window.innerWidth > 800) {
    topNav.classList.remove("open");
    listItem.forEach((item) => {
      item.classList.remove("show");
    });
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
