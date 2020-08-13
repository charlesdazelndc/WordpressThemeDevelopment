<?php get_header()?>
    <!-- End Main Header -->

    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">
		
			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
			

			<?php 
             $sliders = $interiordesign_opt['home_slider'];
           foreach ($sliders as $slider){
             	?>
				<!-- Slide -->
				<div class="slide">

                	<div class="image-layer" style="background-image:url(<?php echo $slider['image']?>)"></div>
					<div class="auto-container">
						<div class="content">
							<h2><?php echo $slider['title']?></h2>
							<div class="text"><?php echo $slider['description']?></div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt"><?php echo $slider['button_tex']?></span></a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				
				
			</div>
			
		</div>
	</section>
	<!-- End Banner Section -->
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2><?php echo $interiordesign_opt['service_one_head']?></h2>
			</div>
			
			<div class="row clearfix">
				<?php 
                  $args = array(
                  'posts_per_page' =>6,
                  'post_type'      =>'services-two',
                  'order'          =>'ASC'
                 );

                  $services = new WP_Query($args);
                  while($services->have_posts()):$services->the_post()
                
				?>
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="residental-interior.html"><img src="<?php echo get_template_directory_uri()?>/images/resource/service-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Residential Interiors</a></h3>
							<div class="text"><?php the_content()?></div>
							<a href="residental-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>
			<?php endwhile;?>
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2><?php echo $interiordesign_opt['service_two_head']; ?></h2>
				<div class="text"><?php echo $interiordesign_opt['service_two_desc']; ?></div>
			</div>
			
			<div class="row clearfix">


				<?php
					  $args=array(
					    'posts_per_page' => 6, 
					    'post_type' => 'services-one',
					    'order'     =>'ASC'
					  );
					  $services = new WP_Query($args);
					  while ($services->have_posts()): $services->the_post() 
					  	# code...
					 

				?>
				
				<!-- Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="<?php echo get_field('add_icon');?>"></span>
							</div>
							<h3><a href="office-interior.html"><?php the_title();?></a></h3>
							<div class="text"><?php the_content();?></div>
							<a href="office-interior.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				
				<?php endwhile; ?>
				
			
			
				
				
				
			
				
			</div>
			
		</div>
	</section>
	<!-- End Services Section Two -->
	

	<!-- End Project Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	
			<!--Content Column-->
			<div class="content-column">
				<div class="content-box">
					<h2><?php echo $interiordesign_opt['fluid_one_head'];?></h2>
					<div class="text"><?php echo $interiordesign_opt['fluid_desc'];?></div>
					<ul class="list-style-one">
						<?php 
                       foreach ($interiordesign_opt['fluid_options'] as $option=>$value) {
                        ?>
						<li><?php echo $value ;?></li>
						<?php } ?>
					</ul>


					<div class="bold-text"> <?php echo $interiordesign_opt['fluid_footer_headline'];?><br> <a href="contact.html">
						<?php echo $interiordesign_opt['fluid_link_text'];?></a></div>
				</div>
			</div>
			
			<!--Image Column-->
        	<div class="image-column" style="background-image: url(<?php  echo $interiordesign_opt['fluid_bg_img']['url']?>)">
				<div class="inner-column">
					<div class="image">
						<img src="<?php echo $interiordesign_opt['fluid_bg_img']['url']?>" alt="">
					</div>
					<a href="https://www.youtube.com/watch?v=SXZXtD60t2g" class="overlay-link lightbox-image">
						<div class="icon-box">
							<span class="icon <?php echo $interiordesign_opt['fluid_video_icon']?>"></span>
                            <i class="ripple"></i>
						</div>
					</a>
				</div>
            </div>
            <!--End Image Column-->
			
		</div>
	</section>
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<h2><?php echo $interiordesign_opt['customer_headline']?></h2>
				<div class="title-text"><?php echo $interiordesign_opt['customer_headline']?></div>
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<?php 
                 $args = array(
                 'posts_per_page' =>4,
                 'post_type'      =>'customers',
                 'order'          =>'ASC'
                 );
                 $customers = new WP_Query($args);
                 while($customers->have_posts()):$customers->the_post();
               
				?>
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="<?php echo get_field('profile_image')['url']?>" alt="" />
								</div>
							</div>
							<h3><?php the_title();?></h3>
							<div class="title"><?php echo get_field('customer_quotes')?></div>
							<div class="text"><?php the_content();?></div>
						</div>
					</div>
				</div>
				
				<?php endwhile;?>
				
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url(<?php echo get_template_directory_uri()?>/images/background/2.jpg)">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2><?php echo $interiordesign_opt['work_headline']?></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Feature Block -->
				<?php 
                  $args = array
                  (
                  'posts_per_page'=>4,
                  'post_type'     =>'works',
                  'order'         =>'ASC'
                  );

                  $works = new WP_Query($args);
                  $i=1;
                  while ($works->have_posts()): $works->the_post();  
                  	?>
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon <?php echo get_field('work_icon')?>"></span>
							</div>
							<div class="feature-number"><?php echo $i++?></div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html"><?php the_title();?></a></h3>
							<div class="text"><?php the_content();?></div>
						</div>
					</div>
				</div>

			<?php endwhile;?>
			</div>
			
		</div>
	</section>
	<!-- End Featured Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2><?php echo $interiordesign_opt['news_headline'];?></h2>
				<div class="text"><?php echo $interiordesign_opt['news_subheadline'];?></div>
			</div>
			
			<div class="row clearfix">

				<?php
                    $args=array(
					    'posts_per_page' =>3, 
					    'post_type' => 'megazines',
					    'order'     =>'ASC'
					  );

                    $megazines = new WP_Query($args);

                    while($megazines->have_posts()): $megazines->the_post()
                 
				?>
				
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="<?php echo get_field('megazine_image')['url']?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span><?php echo get_field('author_name')?></span></li>
								<li><?php echo get_field('article_type')?></li>
							</ul>
							<h3><a href="blog-detail.html"><?php the_content();?></a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
				
			</div>
			
		</div>
	</section>
	<!-- End News Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(<?php echo $interiordesign_opt['contact_bg_img']['url']?>)">
		<div class="auto-container">
			<h2><?php echo $interiordesign_opt['contact_headline']?></h2>
			<div class="text"><?php echo $interiordesign_opt['contact_subheadline']?></div>
			<a href="contact.html" class="theme-btn btn-style-two"><span class="txt"><?php echo $interiordesign_opt['contact_link_text']?></span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
<?php get_footer();?>