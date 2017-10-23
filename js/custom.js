jQuery(function(c) {
  if (screen.width < 720) {
    jQuery("#cont_always_ani").attr("data-animation-delay", 100)
  }
  a();
  b();

  function a() {
    if (jQuery().lazyload) {
      c(".omsc-animation .lazyload").each(function() {
        var f = c(this).data("original");
        if (f) {
          c(this).removeClass("lazyload");
          c(this).attr("src", c(this).data("original"))
        }
      });
      var d = {
        effect: "fadeIn",
        failure_limit: 1000,
        threshold: 200,
        placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=",
        skip_invisible: false
      };
      var e = c("img.lazyload");
      e.filter(".lazyload-hidden").lazyload(d);
      d.skip_invisible = true;
      e.not(".lazyload-hidden").lazyload(d);
      if (jQuery.waypoints) {
        e.load(function() {
          jQuery.waypoints("refresh")
        })
      }
    }
  }

  function b() {
    if (!jQuery("html").hasClass("touch")) {
      if (jQuery.waypoints) {
        var d = c(".omsc-animation").each(function() {
          var e = c(this).data("animation-delay");
          c(this).waypoint(function() {
            if (e) {
              var f = c(this);
              setTimeout(function() {
                f.addClass("omsc-animation-start")
              }, e)
            } else {
              c(this).addClass("omsc-animation-start")
            }
          }, {
            offset: "80%",
            triggerOnce: true
          })
        })
      }
    } else {
      c(".omsc-animation").removeClass("omsc-animation")
    }
  }
  c(window).load(function() {
    c("#status").fadeOut();
    c("#preloader").delay(350).fadeOut("slow")
  });
  c("article.portfolio a").click(function() {
    var d = c(this).attr("href");
    c("#top").addClass("portfolio-open");
    c(d).addClass("portfolio-open");
    return false
  });
  c("#portfolio-close").click(function() {
    c(".portfolio-full").removeClass("portfolio-open");
    c("#top").removeClass("portfolio-open");
    return false
  })
});