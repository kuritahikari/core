if (window.matchMedia("(max-width: 960px)").matches) {
  jQuery(function () {
    jQuery(".zdo_drawer_button").click(function () {
      if (!jQuery(".zdo_drawer_button").hasClass("active")) {
        jQuery(".zdo_drawer_button").addClass("active");
        jQuery(".nav_wrapper").addClass("active");
        jQuery(".nav_wrapper").fadeIn();
        jQuery("body").addClass("noscroll");
      } else {
        jQuery(".zdo_drawer_button").removeClass("active");
        jQuery(".nav_wrapper").fadeOut();
        jQuery("body").removeClass("noscroll");
      }
    });
  });
  jQuery(function () {
    jQuery(".nav_menu a").click(function () {
      if (!jQuery(".zdo_drawer_button").hasClass("active")) {
        jQuery(".zdo_drawer_button").addClass("active");
        jQuery(".nav_wrapper").addClass("active");
        jQuery(".nav_wrapper").fadeIn();
      } else {
        jQuery(".zdo_drawer_button").removeClass("active");
        jQuery(".nav_wrapper").fadeOut();
        jQuery("body").removeClass("noscroll");
      }
    });
  });
}

// jQuery(".nav_menu a").on("click", function () {
//   jQuery(".zdo_drawer_button").toggleClass("active");
//   jQuery(".nav_wrapper").fadeToggle().toggleClass("active");
//   jQuery("body").toggleClass("noscroll");
// });

jQuery(function () {
  jQuery(window).scroll(function () {
    jQuery(".view").each(function () {
      var elemPos = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > elemPos - windowHeight + 200) {
        jQuery(this).addClass("scrollin");
      }
    });
  });
});

jQuery(function () {
  jQuery("textarea.auto-resize").on(
    "change keyup keydown paste cut",
    function () {
      if (jQuery(this).outerHeight() > this.scrollHeight) {
        jQuery(this).height(1);
      }
      while (jQuery(this).outerHeight() < this.scrollHeight) {
        jQuery(this).height(jQuery(this).height() + 1);
      }
    }
  );
});
