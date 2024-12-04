console.log("Works!!");

window.onload = () => {
  const header = document.getElementById("header-mobile");
  const burgerMenu = document.getElementById("mobile-menu-burger");

  burgerMenu.addEventListener("click", function () {
    header.classList.toggle("open");
    document.body.classList.toggle("overflow-y-hidden");
  });
};
