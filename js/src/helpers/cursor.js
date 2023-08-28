let cursor = document.getElementById("cursor-follow");
// let fCard = document.querySelectorAll("a.f-card__item-link");
// let fBlogCard = document.querySelectorAll(".blog__item-link");

document.addEventListener("mousemove", function (e) {
  let x = e.clientX;
  let y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
});

// FrontPage Service Cards
// fCard.forEach((el, index) => {
//   el.addEventListener("mouseover", (event) =>
//     handleMouseEnter(event, "f-card__data-", index)
//   );
//   el.addEventListener("mouseleave", () =>
//     handleMouseLeave("f-card__data-", index)
//   );
// });

// FrontPage Blog Cards
// fBlogCard.forEach((el) => {
//   el.addEventListener("mouseover", (event) =>
//     handleMouseEnter(event, "blog-card__data")
//   );
//   el.addEventListener("mouseleave", () => handleMouseLeave("blog-card__data"));
// });

// function handleMouseEnter(event, className, index) {
//   if (index !== undefined) {
//     return cursor.classList.add(`${className}${index}`);
//   }

//   return cursor.classList.add(`${className}`);
// }

// function handleMouseLeave(className, index) {
//   if (index !== undefined) {
//     return cursor.classList.remove(`${className}${index}`);
//   }

//   return cursor.classList.remove(`${className}`);
// }
