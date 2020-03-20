<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
$pid=$post->ID;
$post   = get_post( $pid );
?>
<div class="container">
        <div class="container-blog blog-left" style="background: none">
     
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              
              <img
                alt="Earn Paytm Cash By Watching Ads"
                src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>"
                width="100%"
              />
              <h2>
                <?php echo $post->post_title; ?>
              </h2>
              <p>
                <?php echo $post->post_content; ?>
              </p>                           
              <hr>
		  </div>
            <div
              class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-newsletter-subscribe"
              style="padding-left: 10px; padding-right: 10px"
            > <img src="http://localhost/wordpress/wp-content/uploads/2020/03/intro1.png" width="100%" />
			<div style="clear:both; height:20px;"></div>
              <input
                class="search-blog"
                type="text"
                name="search"
                placeholder="Search Keyword"
				onkeyup="search_post(this.value);"
              />
			  <p class="serch_box" style="color:red; font-weight:600;"></p>
              <div class="newsletter-container">
                <div
                  style="font-size: 1.5rem; color: white; font-family: Bahnschrift Condensed; padding-left: 18px;"
                >
                  Subscribe To Our Newsletter
                </div>
                <div style="color: white; padding-left: 18px;">
                  Get to know more about our product.
                </div>
				<span class="sucess_msg"></span>
                <input
                  class="email-newsletter"
                  type="email"
                  name="email"
                  placeholder="E-mail Adress"
                />
                <button class="subscribe-newsletter">SUBSCRIBE</button>
              </div>
              <div class="blog-download">
                <div class="row">
                  <div class="col-6">
                    <img
                      class="newsletter-image"
                      alt="Earn Paytm Cash By Watching Ads"
                      src="<?php echo get_template_directory_uri (); ?>/images/newsletter-image.png"
                    />
                  </div>
                  <div class="col-6">
                    <div class="download-heading">
                      DOWNLOAD THE APP
                    </div>
                     <a href="https://play.google.com/store/apps/details?id=in.app.ai.callpay" target="_blank"><img
                      class="googleplay-style"
                      src="<?php echo get_template_directory_uri (); ?>/images/google-play.png"
                    /></a>
                  </div>
                </div>
              </div>
			   <div class="recent-posts container" >	
				<div class="heading_recentpost" style="font-weight: 600;
    font-size: 17px;
    padding: 20px;">THE LATEST POSTS</div>

					<ul id="slider-id" class="slider-class" style="list-style: none; padding: 0;">
					<?php
					$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 5, // Number of recent posts thumbnails to display
					'post_status' => 'publish',					
                    'order' => 'DESC' // Show only the published posts
					));
					foreach($recent_posts as $posta) : ?>
					<li>				
					<a href="<?php echo get_permalink($posta['ID']) ?>">
					<img alt="Earn Paytm Cash By Watching Ads" src="<?php echo get_the_post_thumbnail($posta['ID'], 'medium'); ?>">

					<p class=""><?php echo $posta['post_title'] ?></p>
					</a>
					</li><hr>
					<?php endforeach; wp_reset_query(); ?>
					</ul>
				</div>
            </div>
      
          <!--<div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Top 10 Money Earning Apps"
                src="img/blog/earn_1.png"
                width="100%"
              />
              <h2>
                When will you earn money on Callpay?
              </h2>
              <p>
                So you have downloaded Callpay, registered on this App too, even
                Ads are also appearing after each incoming call but you are not
                earning money, right?
                <br />We understand your problem and that is why here we have
                presented the solutions to the issues you are facing.
              </p>
              <button>
                <a href="blog/when-will-you-earn-on-callpay.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Earn Paytm Cash By Watching Ads"
                src="http://blog.wisipl.org/wp-content/uploads/2020/03/intro3.jpg"
                width="100%"
              />
              <h2>
                HOW TO USE ONLINE MONEY MAKING APP CALLPAY TO EARN PAYTM CASH BY
                WATCHING ADS
              </h2>
              <p>
                Callpay is a brand new online money making App available on
                Google Play for Android smartphones and tablets. This App lets
                you earn Paytm cash by watching ads coming on your device's
                screen during and post incoming calls.
              </p>
              <button><a href="blog/how-to-redeem.html">Read More</a></button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Top 10 Money Earning Apps"
                src="img/blog/generate.png"
                width="100%"
              />
              <h2>
                Paytm money making App Callpay- make money from my phone for
                free
              </h2>
              <p>
                Callpay is the latest Paytm money making App available in Google
                Playstore. This App is specially designed to provide fascinating
                deals to users like me. I even make money from my phone for
                free.
              </p>
              <button>
                <a href="blog/callpay-generates-deals.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Top 10 Money Earning Apps"
                src="img/blog/deals.png"
                width="100%"
              />
              <h2>
                What makes the best earning App 2019 Callpay a different deal
                providing App?
              </h2>
              <p>
                Best earning App 2019, Callpay is an amazing deal providing App
                too. This App shows Ads featuring various online deals from
                e-commerce portals like Amazon, Flipkart, Snapdeal, etc.<br />
                On this App, users don’t have to search for deals by themselves,
                because the App shows deals automatically. Users get to know
                about great online deals going on at various portals and they
                even earn for watching and accessing those deals.
              </p>
              <button>
                <a href="blog/callpay-deal-providing-app.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Money Earning Apps"
                src="img/blog/coupon.png"
                width="100%"
              />
              <h2>
                eCoupon code and epic deal App Callpay
              </h2>
              <p>
                Callpay is an eCoupon code providing App. This epic deal App
                shows Ads featuring various online discounts and offers during
                and after each incoming call.<br />
                E-commerce portals usually give discounts during festivals like
                Christmas, Diwali, etc. Other trending offer periods are the end
                of season sale. It’s not that everyday user can avail deals and
                this is exactly where Callpay helps.
              </p>
              <button><a href="blog/callpay-coupons.html">Read More</a></button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Money Earning Apps"
                src="img/blog/best.png"
                width="100%"
              />
              <h2>
                What is online money making app Callpay, one of the top 10 money
                earning apps
              </h2>
              <p>
                Online money making app Callpay is one of the top 10 money
                earning apps that rewards the user with real money for watching
                ads and following directions mentioned in the advertisements.
                <br />CallPay is a highly secured and end to end encrypted
                mobile application for Android platform based smartphones and
                other devices. The app is designed to work on Android version
                4.4 to 9. The money earning app is easily available on Google
                Play.
              </p>
              <button><a href="blog/callpay-best.html">Read More</a></button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Earn Money From Mobile Without Investment"
                src="img/blog/android.png"
                width="100%"
              />
              <h2>
                Top 10 money earning Apps for Android to earn money from mobile
                without investment
              </h2>
              <p>
                You love using smartphones. Don’t you? What if you could earn
                money from mobile without investment? Read on to know about the
                top 10 money earning Apps for the Android platform. Today,
                making money is one of the most important things to lead a
                better life. There are many smartphone users who do not know
                that they can earn money from mobile whenever they get free
                time.
              </p>
              <button>
                <a href="blog/callpay-android-income-app.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Earn Money From Mobile Without Investment"
                src="img/blog/best-deals.png"
                width="100%"
              />
              <h2>
                Callpay- get the best deals online and earn money from mobile
                without investment
              </h2>
              <p>
                Callpay is a trending App for Android users which shows
                Advertisements featuring amazing deals from various websites and
                by accessing those deals anybody can earn money from mobile
                without investment.
              </p>
              <button>
                <a href="blog/best-deals-callpay.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Download App And Earn Money"
                src="img/blog/step-by-step2.png"
                width="100%"
              />
              <h2>
                Step by step guide of online money making App Callpay
              </h2>
              <p>
                Online money making App Callpay is an online wizard. It is
                available on Google Play for Android smartphones and tablets
                from 4.4 to 9. This is a money rewarding App.
              </p>
              <button>
                <a href="blog/step-by-step-guide.html">Read More</a>
              </button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Download App And Earn Money"
                src="img/blog/find-deals.png"
                width="100%"
              />
              <h2>
                Find deals on money earning App Callpay and watch Ads and get
                paid
              </h2>
              <p>
                Callpay is one of the top money earning Apps available in India.
                This App enables money making options for you as you can just
                watch Ads and get paid.
              </p>
              <button><a href="blog/find-deals.html">Read More</a></button>
            </div>
          </div>
          <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <img
                alt="Make Money From My Phone For Free"
                src="img/blog/best-deals2.png"
                width="100%"
              />
              <h2>
                Free earning App Callpay, one of the top 10 money earning Apps
              </h2>
              <p>
                Callpay is one of the top 10 money earning Apps available in
                India for Android users. This free earning App rewards its users
                with hard cash for watching Ads and following directions shown
                in those advertisements.
              </p>
              <button><a href="blog/get-best-deals.html">Read More</a></button>
            </div>
          </div>-->
          <div
            class="col-lg-3 col-md-3 col-sm-12 col-xs-12 blog-right"
            style="padding-left: 10px; padding-right: 10px; text-align: -webkit-center;"
          >
            <input
              class="search-blog"
              type="text"
              name="search"
              placeholder="Search Keyword"
			  onkeyup="search_post(this.value);"
            />
			<p class="serch_box"></p>
            <div class="newsletter-container">
              <div
                style="font-size: 1.5rem; color: white; font-family: Bahnschrift Condensed; padding-left: 18px;"
              >
                Subscribe To Our Newsletter
              </div>
              <div style="color: white; padding-left: 18px;">
                Get to know more about our product.
              </div>
			  <span class="sucess_msg"></span>
              <input
                class="email-newsletter"
                type="email"
                name="email"
                placeholder="E-mail Adress"
              />
              <button class="subscribe-newsletter">SUBSCRIBE</button>
            </div>
            <div class="blog-download">
              <div class="row">
                <div class="col-6">
                  <img
                    alt="Earn Paytm Cash By Watching Ads"
                    src="<?php echo get_template_directory_uri (); ?>/images/newsletter-image.png"
                    width="100"
                  />
                </div>
                <div class="col-6">
                  <div
                    style="font-size: 1.2rem; color: white; font-family: Bahnschrift Condensed; text-align: center; padding-top: 30px;"
                  >
                    DOWNLOAD THE APP
                  </div>
                   <a href="https://play.google.com/store/apps/details?id=in.app.ai.callpay" target="_blank"><img src="<?php echo get_template_directory_uri (); ?>/images/google-play.png" width="90px" /></a>
                </div>
              </div>
            </div>
			<div class="recent-posts container" >	
				<div class="heading_recentpost" style="font-weight: 600; font-size: 17px; padding: 18px;">THE LATEST POSTS</div>

					<ul id="slider-id" class="slider-class" style="padding: 0; list-style: none; text-align: -webkit-left;">
					<?php
					$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 5, // Number of recent posts thumbnails to display
					'post_status' => 'publish',					
                    'order' => 'DESC' // Show only the published posts
					));
					foreach($recent_posts as $post) : ?>
					<li>				
					<a href="<?php echo get_permalink($post['ID']) ?>">
					<img alt="Earn Paytm Cash By Watching Ads" src="<?php echo get_the_post_thumbnail($post['ID'], 'medium'); ?>">

					<p class=""><?php echo $post['post_title'] ?></p>
					</a>
					</li><hr>
					<?php endforeach; wp_reset_query(); ?>
					</ul>
				</div>
          </div>
        </div>

        <div class="row" style="margin-top: 60px; margin-bottom: 30px;">
          <div class="col-12 col-lg-12 col-md-12">
         
          </div>
        </div>
      </div>
     

    </div>

<?php
get_footer();
?>