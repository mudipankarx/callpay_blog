<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
 <div class="scrolltop">
        <div class="scroll icon">
          <img src="<?php echo get_template_directory_uri (); ?>/images/up-arrow.png" width="30" />
        </div>
      </div>
 <footer class="footer-callpay">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-lg-3 col-md-3 col-sm-12 col-12"
              style="text-align: center;"
            >
              <a
                href="https://play.google.com/store/apps/details?id=in.app.ai.callpay"
                ><img src="<?php echo get_template_directory_uri (); ?>/images/google-play.png" width="150"
              /></a>
              <p class="footer-text-1 text-white">
                <a
                  class="text-white"
                  href="https://play.google.com/store/apps/details?id=in.app.ai.callpay"
                  >DOWNLOAD THE APP NOW</a
                >
              </p>
			    <ul class="social-icons">
                <li>
                  <a
                    href="https://www.facebook.com/callpay.in/"
                    class="social-icon"
                  >
                    <i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/callpayi" class="social-icon">
                    <i class="fa fa-twitter"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.instagram.com/callpayindia/"
                    class="social-icon"
                  >
                    <i class="fa fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/channel/UCeYhrwfyTClu-w6RUAYIlSQ"
                    class="social-icon"
                  >
                    <i class="fa fa-youtube"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.linkedin.com/company/callpayindia"
                    class="social-icon"
                  >
                    <i class="fa fa-linkedin"></i
                  ></a>
                </li>
              </ul>
            </div>
            <div
              class="col-lg-6 col-md-6 col-sm-12 col-12"
              style="text-align: center;"
            >
              <p class="footer-text-1 text-white">
                <a class="text-white" href="http://callpay.wisipl.org/help.html">Help</a> |
                <a class="text-white" href="http://callpay.wisipl.org/faq.html">FAQ</a> |
                <a class="text-white" href="http://callpay.wisipl.org/disclaimer.html">Disclaimer</a> |
                <a class="text-white" href="http://callpay.wisipl.org/terms.html">Terms & Conditions</a>
              </p>
              <p class="footer-text-1 text-white">
                <a class="text-white" href="http://callpay.wisipl.org/features.html">Features</a> |
                <a>Blog</a> |
                <a class="text-white" href="http://callpay.wisipl.org/contact.html">Contact</a> |
                <a class="text-white" href="http://callpay.wisipl.org/advertising.html">Advertise</a> |
                <a class="text-white" href="http://callpay.wisipl.org/sitemap.xml">Sitemap</a>
              </p>
              <p class="footer-text-1 text-white">
                <a class="text-white" href="http://callpay.wisipl.org/privacy-policy.html"
                  >Privacy Policy</a
                >
              </p>
            </div>
            <div
              class="col-lg-3 col-md-3 col-sm-12 col-12"
              style="text-align: center;"
            >
              <img src="<?php echo get_template_directory_uri (); ?>/images/footer-logo.png" width="150" />
            </div>
          </div>
        </div>
      </footer>
      <div class="footer-2">
        <p class="footer-2-text1 text-white">CallPay ©. All rights reserved</p>
      </div>
    </div>
  </body>
  <script>
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50) {
        $(".scrolltop:hidden")
          .stop(true, true)
          .fadeIn();
      } else {
        $(".scrolltop")
          .stop(true, true)
          .fadeOut();
      }
    });
    $(function() {
      $(".scroll").click(function() {
        $("html,body").animate(
          { scrollTop: $(".callpayblog").offset().top },
          "1000"
        );
        return false;
      });
    });
  </script>
  <script>
    jQuery(function() {
      createSticky(jQuery("#sticky-wrap"));
    });

    function createSticky(sticky) {
      if (typeof sticky != "undefined") {
        var pos = sticky.offset().top,
          win = jQuery(window);

        win.on("scroll", function() {
          if (win.scrollTop() > pos) {
            sticky.addClass("stickyhead");
          } else {
            sticky.removeClass("stickyhead");
          }
        });
      }
    }
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    !(function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod
          ? n.callMethod.apply(n, arguments)
          : n.queue.push(arguments);
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = "2.0";
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s);
    })(
      window,
      document,
      "script",
      "https://connect.facebook.net/en_US/fbevents.js"
    );
    fbq("init", "795375914237721");
    fbq("track", "PageView");
	
	 $('.subscribe-newsletter').click(function(){  
		var news_email=$('#email').val();

		if (news_email == "") {  // If something was entered

                   
			       $('.sucess_msg').html('<span>Not a valid email address</span>');   //focus on email field

                                return false;  
		        }
                  
		//alert(news_email);
		$.ajax('http://callpay.wisipl.org/blog/ajax.php', {
		type: 'POST',  // http method
		data: { newsletter: news_email },  // data to submit
		success: function (data, status, xhr) {
         //alert(data);
			$('.sucess_msg').html(data);
		},
		error: function (jqXhr, textStatus, errorMessage) {
				$('p').append('Error' + errorMessage);
		}
	});
		
	});
	
	function search_post(val)
	{
		if(val=='')
		{  
	         $('.serch_box').html('Enter any text to search.');
			return false;
		}else{			
		   window.location="<?php echo home_url(); ?>/search/?se="+val;
		}
	}
  </script>
  <noscript
    ><img
      height="1"
      width="1"
      style="display:none"
      src="https://www.facebook.com/tr?id=795375914237721&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

</html>
