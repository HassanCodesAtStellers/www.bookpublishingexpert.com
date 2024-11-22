document.addEventListener("DOMContentLoaded", function () {
  const categoryButtons = document.querySelectorAll(".section-2-category");
  const portfolioItems = document.querySelectorAll(
    ".section-2-items-container"
  );

  function filterItems(category) {
    portfolioItems.forEach((item) => {
      if (item.dataset.category === category) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }
  categoryButtons.forEach((button) => {
    button.addEventListener("click", function () {
      categoryButtons.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");
      const category = this.getAttribute("data-category");
      filterItems(category);
    });
  });
  filterItems("new_releases");
});
