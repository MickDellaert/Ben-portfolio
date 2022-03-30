document.addEventListener("DOMContentLoaded", () => {
    initApp();
  });
  
  const initApp = () => {
    const menuBtn = document.querySelector(".nav__burger-btn");
    const list = document.querySelector("#menu-top-nav");
    menuBtn.addEventListener("click", toggleButtonAndMenu);
    list.addEventListener("click", toggleButtonAndMenu);
  };
  
  const toggleButtonAndMenu = () => {
    const menuBtn = document.querySelector(".nav__burger-btn");
    const list = document.querySelector("#menu-top-nav");
    menuBtn.classList.toggle("open");
    list.classList.toggle("open");
  };
  
 