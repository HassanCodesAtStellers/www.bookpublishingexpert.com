const menuBtns = document.querySelectorAll(".menu-button");

menuBtns.forEach((menuBtn) => {
  menuBtn.addEventListener("click", function () {
    //----- open only one menu --------------
    const activeAccordion = document.querySelector(".menu-button.open");
    if (activeAccordion && activeAccordion !== this) {
      activeAccordion.nextElementSibling.style.height = 0;
      activeAccordion.classList.remove("open");
    }
    //------------------------------------------------

    this.classList.toggle("open");
    const content = this.nextElementSibling;
    if (this.classList.contains("open")) {
      content.style.height = content.scrollHeight + "px";
    } else {
      content.style.height = 0;
    }
  });
});
