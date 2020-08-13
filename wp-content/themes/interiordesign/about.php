<?php
/*
Template Name: About
*/
?>
<?php get_header();?>



    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?php  echo $interiordesign_opt['about-us-bg-img']['url']?>)">
    	<div class="auto-container">
        	<h2><?php echo $interiordesign_opt['breadcup-name']?></h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li><?php echo $interiordesign_opt['breadcup-name']?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Story Section -->
	<section class="story-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2><?php echo $interiordesign_opt['about-us-headline']?></h2>
						<div class="bold-text"><?php echo $interiordesign_opt['about-us-subheadline']?></div>
						<div class="text">
					<?php echo $interiordesign_opt['about-us-desc']?>
						</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
				<img src="<?php echo $interiordesign_opt['stoty-interior-bg-img']['url']?>" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Story Section -->
	
	<!-- Interior Section -->
	<section class="interior-section style-three">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="<?php echo $interiordesign_opt['about-us-interior-bg-img']['url']?>" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2><?php echo $interiordesign_opt['about-us-interior-headline']?></h2>
							<div class="text"><?php echo $interiordesign_opt['about-us-interior-des']?></div>
							<div class="row clearfix">
							
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-award-1"></span>
										</div>
										<h3>Superior Quality</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-answer"></span>
										</div>
										<h3>Professional Team</h3>
									</div>
								</div>
								
								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-hand"></span>
										</div>
										<h3>Unmatched Warranty</h3>
									</div>
								</div>
								
							</div>
							
							<div class="bold-text"><?php echo $interiordesign_opt['about-us-interior-headline-two']?></div>
							<div class="column-text"><?php echo $interiordesign_opt['about-us-interior-headline-dream']?></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->
	
	<!-- Counter Section -->
	<section class="counter-section style-two">
		<div class="auto-container">
		
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<?php
                       $args = array(
                       'posts_per_page' =>4,
                       'post_type'      =>'about_us_counter',
                       'order'          =>'ASC'
                      
                       );

                       $about_counters = new WP_Query($args);
                       while($about_counters->have_posts()): $about_counters->the_post();
					?>
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="8"><?php the_title();?>
								</div>
								<h4 class="counter-title"><?php the_content();?></h4>
							</div>
						</div>
					</div>
				<?php endwhile;?>

				</div>
			</div>
			
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Team Section -->
	<section class="team-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2><?php echo $interiordesign_opt['our-team']?></h2>
				<div class="text"><?php echo $interiordesign_opt['our-team-des']?></div>
			</div>
			
			<div class="clearfix">
				
				<?php
                 $args = array(
                 	'posts_per_page' =>4,
                 	'post_type'      =>'about_us_team',
                 	'order'          =>'ASC'

                 );

                 $team_members = new WP_Query($args);
                 while ($team_members->have_posts()): $team_members->the_post(); 
				?>
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="<?php echo get_field('team_member_image')['url'];?>" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="<?php echo get_field('facebook_link');?>"><i class="fab fa-facebook"></i></a></li>
									<li><a href="<?php echo get_field('linkedin_link');?>"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="<?php echo get_field('twitter_link');?>"><i class="fab fa-twitter-square"></i></a></li>
									<li><a href="<?php echo get_field('skype_link');?>"><i class="fab fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="team.html"><?php the_title();?></a></h3>
							<div class="designation"><?php the_content();?></div>
						</div>
					</div>
				</div>
				<?php endwhile;?>
				
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Mission Section -->
    <section class="mission-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="<?php echo $interiordesign_opt['mission-bg-img']['url']?>" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-xl-9 col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2><?php echo $interiordesign_opt['compy-mission']?></h2>
						<div class="bold-text"><?php echo $interiordesign_opt['compy-mission-subheading']?></div>
						<div class="text"><?php echo $interiordesign_opt['compy-mission-des']?></div>
						
					
					</div>
				</div>
				
			</div>
		</div>
	</section>
<section class="call-to-action-section" style="background-image: url(<?php echo $interiordesign_opt['contact_bg_img']['url']?>)">
		<div class="auto-container">
			<h2><?php echo $interiordesign_opt['contact_headline']?></h2>
			<div class="text"><?php echo $interiordesign_opt['contact_subheadline']?></div>
			<a href="contact.html" class="theme-btn btn-style-two"><span class="txt"><?php echo $interiordesign_opt['contact_link_text']?></span></a>
		</div>
	</section>
<?php get_footer();?>
