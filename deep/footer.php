<div id='toTop'>
    <span class="glyphicon glyphicon-chevron-up"></span><br>
    <span>TOP</span>
  </div>

  <footer class="text-center window">

    <div class="container">

      <div class="clearfix">
        <div class="cus_tab_footer">
          <a href="http://php-project-antonadorama658454.codeanyapp.com/" title="Home"><img src="http://www.spiderboost.com/img/logo-spiderboost.png" alt="spiderboost" class="img-responsive center-block"/></a>
        </div>
      </div>

      <div class="text-center cus_call_footer">
        <span>&laquo; Fill out the form below or Call me at <a href="tel:+786-797-4641">786-797-4641</a> &raquo;</span>
      </div>

      <form role="form" id="cus_contact_footer" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
        <input type=hidden name="oid" value="00D80000000cvlH">
        <input type=hidden name="retURL" value="http://www.spiderboost.com/?q=thanks-page">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 omsc-animation omsc-animation-almost-visible omsc-effect-fade-ltr" data-animation-delay="150">
            <div id="contact_image_loading">Processing...</div>
            <div id="contact_message" class="alert alert-success"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <input type="text" class="cus_max_width" id="first_name" name="first_name" placeholder="Name">
            <input type="tel" class="cus_max_width" id="phone" name="phone" placeholder="Phone">
            <input type="email" class="cus_max_width email required" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="col-md-5">
            <textarea class="cus_max_width required" name="description" placeholder="Write your comments here... " required></textarea>
            <input type="text" value="" name="h_b" id="h_b">
            <button type="submit" class="btn cus_btn_default cus_max_width" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>

    <div class="cus_line_separator"></div>



    <a href="http://via.placeholder.com/" title="Home"><img src="http://www.spiderboost.com/img/logo-spiderboost.png" alt="spiderboost"/></a>
  </footer>



  <input type="hidden" value="-1" id="hidden_param">
  <input type="hidden" value="Home" id="active_page">
  <input type="hidden" value="http://php-project-antonadorama658454.codeanyapp.com/" id="site_url">
  <input type="hidden" value="-1" id="hidden_thxparam">




  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://php-project-antonadorama658454.codeanyapp.com/js/bootstrap.min.js"></script>


  <!-- Lazy and Waypoints JavaScript
    ================================================== -->
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.lazyload.min.js'></script>
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.waypoints.min.js'></script>
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.waypoints-sticky.min.js'></script>
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.maskedinput.min.js'></script>
  <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/custom.js'></script>


  <!-- Circle Chart
        ================================================== -->
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.circliful.min.js'></script>

  <!-- Windows
        ================================================== -->
  <script type='text/javascript' src='http://php-project-antonadorama658454.codeanyapp.com/js/jquery.windows.js'></script>





  <script language="Javascript" type="text/javascript">
    $(document).ready(function() {
      var thx_param = $("#hidden_thxparam").attr('value');
      if (thx_param != -1) {
        $('#thx_contact').modal('show');
        var xSeconds = 20000; // 2 second
        setTimeout(function() {
          $('#thx_contact').modal('hide');
        }, xSeconds);
      }
      $("#phone").mask("(999) 999-9999");
      //Image replacement
      $('.imgHoverable').tooltip();
      $('.cus_cursor_down_img').tooltip();
      // Change the image of hoverable images
      $(".imgHoverable").hover(function() {
        var hoverImg = HoverImgOf($(this).attr("src"));
        $(this).attr("src", hoverImg);
      }, function() {
        var normalImg = NormalImgOf($(this).attr("src"));
        $(this).attr("src", normalImg);
      });
      function HoverImgOf(filename) {
        var re = new RegExp("(.+)\\.(gif|png|jpg)", "g");
        return filename.replace(re, "$1-on.$2");
      }
      function NormalImgOf(filename) {
        var re = new RegExp("(.+)-on\\.(gif|png|jpg)", "g");
        return filename.replace(re, "$1.$2");
      }
      /*$('#carousel-insights').carousel({
        interval: 0
      })*/
      /*----------------------------------------------------------------*/
      var percent = 0,
        bar = $('.progressbar-0'),
        crsl = $('#carousel-insights'),
        currentIndex = 0,
        total = 0;
      var temp_var = 0,
        item_slide = 0,
        temp_item = 0,
        carouselData;
      function progressBarCarousel() {
        bar = $('.progressbar-' + currentIndex);
        //Older brothers elements validation
        if (currentIndex + 1 < total) {
          temp_var = currentIndex;
          temp_item = currentIndex;
          while (temp_var + 1 < total) {
            temp_var++;
            $('.progressbar-' + temp_var).css({
              width: '0%'
            });
          }
        }
        //Younger brothers elements validation
        if (currentIndex > 0) {
          temp_item = currentIndex;
          while (temp_item > 0) {
            temp_item--;
            $('.progressbar-' + temp_item).css({
              width: '100%'
            });
          }
        }
        bar.css({
          width: percent + '%'
        });
        percent = percent + 1;
        if (percent > 100) {
          //crsl.carousel('next');            
          percent = 100;
        }
      }
      var barInterval = setInterval(progressBarCarousel, 100);
      crsl.carousel({
        interval: 10000,
        /*pause: 'hover'*/
      }).on('slid.bs.carousel', function() {
        percent = 0;
        carouselData = $(this).data('bs.carousel');
        currentIndex = carouselData.getActiveIndex();
        total = carouselData.$items.length;
      });
      /*crsl.hover(
          function(){
              clearInterval(barInterval);
          },
          function(){
              barInterval = setInterval(progressBarCarousel, 100);
      })*/
      /*-----------------------------------------------------------------------------*/
      $('#stat_point').waypoint(function() {
        $('#myStat').circliful();
        $('#moneyStat').circliful();
      }, {
        offset: '50%', // middle of the page
        triggerOnce: true
      });
      if (screen.width >= 720) {
        function cus_windows() {
          var $windows = $('.window');
          $windows.windows({
            snapping: true,
            snapSpeed: 500,
            snapInterval: 800,
            onScroll: function(s) {},
            onSnapComplete: function($el) {},
            onWindowEnter: function($el) {
              /*if ($('.cus_always_sect').isOnScreen()) {
              	alert('siii');
              };*/
            }
          });
        }
        cus_windows();
      }
      if (screen.width < 720) {
        $("#cont_always_ani div").removeClass("omsc-animation");
      }
      /* URL generation
      ========================*/
      /*=======/URL generation =========*/
      $(".show_hide").show();
      /* Param validation for active overlay
			========================*/
      var param = $("#hidden_param").attr('value');
      var page = $("#active_page").attr('value');
      var site_url = $("#site_url").attr('value');
      site_url = site_url + "processor.php"
      if (param != -1 && param != 'whatwedo') {
        $(".slidingDiv").show("slow");
        var target = $('#' + param).attr('element-target');
        var image = $('#' + param).attr('element-img');
        var title = $('#' + param).attr('title');
        //Collapsable elements replacement id
        if (param == 'ppc') {
          target = "ppc";
        }
        if (param == 'seo') {
          target = "seo";
        }
        if (image == null) {
          image = 'blank.jpg';
        }
        if (title == null) {
          title = 'Title 1 Line';
        }
        $(window).scrollTop($('#scroll-to').offset().top);
        //var  formData = "name=ravi&age=31";  //Name value Pair	
        //var formData = {name:"ravi",age:"31"}; //Array 				 
        $.ajax({
          url: site_url,
          type: "POST",
          data: {
            data: target,
            image: image,
            title: title,
            page: page
          },
          beforeSend: function() {
            $('#image').show();
          },
          complete: function() {
            $('#image').hide();
          },
          success: function(data) {
            $('.cus_collapse_body').html(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $('.cus_collapse_body').html(textStatus);
          }
        });
      } /*=======/Param validation for active overlay =========*/
      /* Overlay visibility
			========================*/
      $('.show_hide').click(function() {
        if ($(".slidingDiv").is(":visible")) {
          $(".slidingDiv").show("slow");
        } else {
          $(".slidingDiv").show("slow");
        }
        //$(".slidingDiv").slideToggle();					
      });
      $('.cus_close_box').click(function() {
        $(".slidingDiv").hide("slow");
      }); /*=======/Overlay visibility =========*/
      /* Loading elements AJAX
			========================*/
      $('.cus_trigger').click(function() {
        var target = $(this).attr('element-target');
        var image = $(this).attr('element-img');
        var title = $(this).attr('title');
        if (image == null) {
          image = 'blank.jpg';
        }
        if (title == null) {
          title = 'Title 1 Line';
        }
        $(window).scrollTop($('#scroll-to').offset().top);
        $.ajax({
          url: site_url,
          type: "POST",
          data: {
            data: target,
            image: image,
            title: title,
            page: page
          },
          beforeSend: function() {
            $('#image').show();
            if (screen.width >= 720 && page == "Home") {
              //$(window).off("scroll");                         	                        	
            }
          },
          complete: function() {
            $('#image').hide();
          },
          success: function(data) {
            $('.cus_collapse_body').html(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $('.cus_collapse_body').html(textStatus);
          }
        });
      }); /*=======/Loading elements AJAX =========*/
      $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
          $('#toTop').fadeIn();
        } else {
          $('#toTop').fadeOut();
        }
      });
      $("#toTop").click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 1000);
      });
      $("#cus_contact_footer").validate({
        submitHandler: function(form) {
          form.submit();
          var formData = $('#cus_contact_footer').serialize();
          /*if($('input#h_b').val().length == 0){ 
							$.ajax({
			                    url : "mail.php",
			                    type: "POST",
			                    data : formData,
			                    success: function(data) {
			                    	$("#cus_contact_footer")[0].reset(); //reset fields
			                        alert("Message Sent");
			                        //form.submit();
			                    }
			                });
			                
						}*/
        }
      }); //validate the form
    });
  </script>


</body>

</html>