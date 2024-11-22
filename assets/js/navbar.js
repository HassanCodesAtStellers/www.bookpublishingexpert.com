let menu_btn = document.querySelectorAll("#nav-icon4");
let menu = document.querySelectorAll(".sandwich-menu");
let x = 0;

menu_btn.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    if (x == 0) {
      menu[index].style.transform = "translateX(0%)";
      menu[index].style.opacity = 1;
      x = 1;
      console.log("1");
    } else {
      menu[index].style.transform = "translateX(100%)";
      menu[index].style.opacity = 0;
      x = 0;
      console.log("0");
    }
  });
});

$(document).ready(function () {
  $("#nav-icon4").click(function () {
    $(this).toggleClass("open");
  });
});
