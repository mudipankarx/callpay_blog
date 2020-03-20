<?php
/*
Template Name: Test
*/
get_header();
?>
<style>
.anc{
	border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    margin: 2px;
}	
</style>
<div class="container">
	<div class="container-blog blog-left" style="background: none">
		<div class="row" style="margin-top: 60px; margin-bottom: 30px;">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5,
	'post_status' => 'publish',
	'paged' => $paged
	
	);	
    $wp_query = new WP_Query( $args );	
	//echo $posts->last_query();
    $recent_posts=$posts->posts;

	//echo "<pre>";print_r($recent_posts);
	//die;
    /*$recent_posts = wp_get_recent_posts(array(         
        'post_status' => 'publish',
		'posts_per_page' => 60,
        'paged' => get_query_var('page')
		// Show only the published posts
    ));*/
	//die;
    
if ($wp_query -> have_posts()) : while ( $wp_query -> have_posts() ) : $wp_query -> the_post();

$img=get_the_post_thumbnail_url($post->ID,'large');?>

<div class="blog_repeat" >
					<img alt="Earn Paytm Cash By Watching Ads" src="<?php echo $img; ?>" <?php if(isset($img)&&$img!=''){?>width="100%"<?php } else { echo '';}?>/>
						<h2><?php echo $post->post_title ?></h2>
						<p><?php echo wp_trim_words($post->post_content,40); ?></p>
						<button><a href="<?php echo esc_url( get_permalink($post->ID));?>">Read More</a></button>
					<hr></div>
<?php
endwhile;
 pagination($wp_query->max_num_pages);
endif;
?>

				
				</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-newsletter-subscribe" style="padding-left: 10px; padding-right: 10px">
    <img src="http://callpay.wisipl.org/blog/wp-content/uploads/2020/03/intro1.png" width="100%" />
    <div style="clear:both; height:20px;"></div>
    <input class="search-blog" type="text" name="search" placeholder="Search Keyword" onkeyup="search_post(this.value);" />
    <p class="serch_box" style="color:red; font-weight:600;"></p>
    <div class="newsletter-container">
        <div style="font-size: 1.5rem; color: white; font-family: Bahnschrift Condensed; padding-left: 18px;">
            Subscribe To Our Newsletter
        </div>
        <div style="color: white; padding-left: 18px;">
            Get to know more about our product.
        </div>
       <span id="sucess_msg"></span>
         <input class="email-newsletter" type="email" name="email" placeholder="E-mail Adress" />
        <button class="subscribe-newsletter">SUBSCRIBE</button>
    </div>
    <div class="blog-download">
        <div class="row">
            <div class="col-6">
                <img class="newsletter-image" alt="Earn Paytm Cash By Watching Ads" src="
									<?php echo get_template_directory_uri (); ?>/images/newsletter-image.png" />
            </div>
            <div class="col-6">
                <div class="download-heading">
                    DOWNLOAD THE APP
                </div>
                <a href="https://play.google.com/store/apps/details?id=in.app.ai.callpay" target="_blank">
										<img
                      class="googleplay-style"
                      src="<?php echo get_template_directory_uri (); ?>/images/google-play.png"/>
										</a>
            </div>
			
        </div>
		
    </div>
	<div class="recent-posts container" >	
				<div class="heading_recentpost" style="font-weight: 600; font-size: 17px; padding: 20px;">THE LATEST POSTS</div>

					<ul id="slider-id" class="slider-class" style="list-style: none; padding: 0;">
					<?php
					$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 4, // Number of recent posts thumbnails to display
					'post_status' => 'publish',
					'order' => 'DESC',	// Show only the published posts
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
				<div class="heading_recentpost"  style="font-weight: 600; font-size: 17px; padding: 20px;">THE LATEST POSTS</div>

					<ul id="slider-id" class="slider-class" style="padding: 0; list-style: none; text-align: -webkit-left;">
					<?php
					$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 5, // Number of recent posts thumbnails to display
					'post_status' => 'publish',
                    'order' => 'DESC',					// Show only the published posts
					));
					foreach($recent_posts as $post) : ?>
					<li>				
					<a href="<?php echo get_permalink($post['ID']) ?>">
					<?php echo get_the_post_thumbnail($post['ID'], 'medium'); ?>

					<p class=""><?php echo $post['post_title'] ?></p>
					</a>
					</li><hr>
					<?php endforeach; wp_reset_query(); ?>
					</ul>
				</div>
          </div>


		</div>
		
							
            
              <?php
                // echo $posts->max_num_pages;
			  if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
      } ?>	
     
	</div>

</div>
					<?php

get_footer();

?>