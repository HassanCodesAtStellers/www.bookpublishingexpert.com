var Tawk_API = Tawk_API || {},
  Tawk_LoadStart = new Date();
(function () {
  var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = "https://embed.tawk.to/673b8f044304e3196ae49a06/1id0adb3t";
  s1.charset = "UTF-8";
  s1.setAttribute("crossorigin", "*");
  s0.parentNode.insertBefore(s1, s0);
})();

$(document).ready(function () {
  $(".show-popup").each(function () {
    $(this).click(function () {
      $.ajax({
        url: `includes/Pop_up.php`,
        method: "GET",
        success: function (data) {
          $("#popup-container").html(data).fadeIn();
        },
        error: function () {
          alert("Failed to load the popup.");
        },
      });
    });
  });

  $(document).on("click", ".close", function () {
    $("#popup-container").fadeOut();
  });

  $(".open-chat").each(function () {
    $(this).click(function () {
      const chatId = $(this).data("chat");

      if (typeof Tawk_API !== "undefined") {
        Tawk_API.toggle();
      } else {
        alert(`Chat widget (${chatId}) not loaded yet. Please wait.`);
      }
    });
  });
});
