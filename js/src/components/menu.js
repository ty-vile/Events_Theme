const menu = document.querySelector(".menu");
const body = document.body;
const menuBtn = document.querySelector(".test-menu-btn");

menuBtn.addEventListener("click", function () {
  if (menu.classList.contains("open")) {
    console.log("123");
    menu.classList.remove("open");
    menu.classList.add("close");
  } else {
    console.log("456");
    menu.classList.remove("close");
    menu.classList.add("open");
  }
});
