let cursor = document.getElementById("cursor-follow");
let hoverCard = document.querySelectorAll("a.hover-card__item-link");
let purpleBtn = document.querySelectorAll(".purple-btn");

document.addEventListener("mousemove", function (e) {
  let x = e.clientX;
  let y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
});

hoverCard.forEach((el) => {
  el.addEventListener("mouseover", () => {
    cursor.classList.add(`hover-card__white-cursor`);
  });

  el.addEventListener("mouseleave", () => {
    cursor.classList.remove(`hover-card__white-cursor`);
  });
});

purpleBtn.forEach((el) => {
  el.addEventListener("mouseover", () => {
    cursor.classList.add(`hover-card__white-cursor`);
  });

  el.addEventListener("mouseleave", () => {
    cursor.classList.remove(`hover-card__white-cursor`);
  });
});
