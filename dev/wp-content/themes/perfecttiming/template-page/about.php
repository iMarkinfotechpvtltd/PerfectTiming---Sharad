<?php 
/* Template Name: About 
*/ 
get_header();
global $post;
?>


<section class="about_banner resume_banner wow fadeInDown">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="about_banner_innr">
                            <div class="about_section">
                                <h2><big><?php the_field('passionate_experienced_heading',$post->ID);?></big></h2>
									<?php the_field('passionate_experienced_description',$post->ID);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-arrow">
                <div class="bottom-arrow-inner"> </div>
            </div>
        </section>
        <!--about_banner end-->
        <section class="expertise-area team_section">
            <div class="container">
                <div class="expertise-area-inner">
                    <h2><big><?php the_field('our_team_heading',$post->ID)?></big></h2>
					
					<?php 
					$args=array
					(
							'post_type'      =>'our_team',
							'posts_per_page' => -1,
							'order'          => 'ASC',
					);
					$team = new WP_Query($args);
				
					while( $team -> have_posts() ) : $team -> the_post();
				   ?>
					<div class="row team_ind">
                        <div class="col-sm-3">
                            <figure> 
							
						 <?php if ( has_post_thumbnail() ) 
						 {
							$image = wp_get_attachment_image_src( get_post_thumbnail_id($team->ID),'our_team_image_size' );
						 ?>
							<a href="<?php the_field('linkedin_url',$team->ID);?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>"/></a>
						<?php
						 } 
						 else 
						 { 
					     ?>
							<img src="http://placehold.it/257x308&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
						<?php 
						} 
						?>
							</figure>
                        </div>
                        <div class="col-sm-9">
                            <div class="team_info">
                                <h4><?php the_title();?></h4>
                                <h5><?php the_field('designation',$team->ID)?></h5>
                                <!--<ul>
                                    <li><a href="tel:4154616450"><i aria-hidden="true" class="fa fa-phone"></i>
									<?php //the_field('phone_no',$team->ID);?></a></li>
                                    <li><a href="mailto:<?php //the_field('email',$team->ID);?>"><i aria-hidden="true" class="fa fa-envelope"></i><?php //the_field('email',$team->ID);?></a></li>
                                </ul>-->
                                <div class="team_cntnt">
                                   <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    </div>
				   
					<?php  
					endwhile; 
					wp_reset_query();
					?>
					
                    <div class="quote"><?php the_field('our_team_quote',$post->ID);?></div>
                </div>  
            </div>
        </section>
        <section class="expertise-area team-expertise-area">
            <div class="container">
                <div class="expertise-area-inner">
                    <h2><big>Our Areas of Expertise</big></h2>
                    <div class="row">
					
		                  <!--****************** START GETTING CATEGORIES FROM SAIL RANGE CATEGORIES *********************-->
					  <?php
							
							$args = array( 'taxonomy' => 'expertise_category','hide_empty'=>0 );
							$terms = get_terms('expertise_category', $args);
                          
						   foreach ($terms as $term) 
						   {
						   ?>
					        <div class="col-sm-4 wow fadeInUp">
                              <div class="expertise-box">
                                <figure>
								 <a href="<?php echo get_category_link( $term->term_id ); ?>" title="">
									<?php echo get_field('category_image',$term);?>  
								 </a>
								</figure>
									<h6><?php echo $term->name;?></h6>
									
								<a href="<?php echo get_category_link( $term->term_id ); ?>" class="learn-more">learn more</a> 
								</div><!--expertise-box-->
                             </div><!--col-sm-4-->
                          <?php 
							}
							wp_reset_query();
							?>			   

                    </div><!--row-->
                </div>
            </div>
        </section>
        <section class="local-impact-area team-impact-area wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2><?php the_field('exceptional_credentials_heading',$post->ID);?></h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <?php the_field('exceptional_credentials_description',$post->ID)?>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <p><strong><?php the_field('have_a_question_text',$post->ID)?></strong> </p> 
							<a href="<?php echo site_url();?>/contact" class="btn-green">
							<?php the_field('contact_us_button_text',$post->ID)?></a> 
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="expertise-area team_testimonial">
            <div class="container">
                <div class="expertise-area-inner">
                    <h2><big>What Our Clients Say</big></h2>
                    <div id="owl-demo" class="owl-carousel owl-theme" data-wow-duration="1000ms" data-wow-delay="300ms">
                        
						<?php 
							$args=array
							(
									'post_type'      =>'our_clients',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$clients = new WP_Query($args);
						
							while( $clients -> have_posts() ) : $clients -> the_post();
						
							if ( has_post_thumbnail() ) 
							{
							$image = wp_get_attachment_image_src( get_post_thumbnail_id($clients->ID),'our_client_logo_size' );
							?>
							
							<div class="item">
								<a href="#" title="" class="bwWrapper"><img src="<?php echo $image[0]; ?>" 
								 alt="<?php the_title();?>"/></a>
							</div>
							
							<?php
							} 
							else 
							{ 
							?>
							<img src="http://placehold.it/418x168&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
							<?php 
							} 
			 
							endwhile;
							wp_reset_query();
						?>
					
                    </div>
                    <!--owl-carousel end-->
                </div>
            </div>
        </section>
        <section class="testimonial_blw_sec">
            <div class="testimonial_cntnt">
                
                <div id="owl-demo1" class="owl-carousel owl-theme wow fadeInUp  animated" data-wow-duration="1000ms" data-wow-delay="300ms">
				
							<?php 
							$args=array
							(
									'post_type'      =>'our_clients',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$clients = new WP_Query($args);
						
							while( $clients -> have_posts() ) : $clients -> the_post();
				            ?>
							 
							 <div class="item">
								<div class="testi_info">
									<div class="qt_strt">
                                <svg id="Layer_70" data-name="Layer 70" xmlns="http://www.w3.org/2000/svg" viewBox="16 16 70 70">
                                    <path class="cls-1" d="M91.8,18.65a53.66,53.66,0,0,0-14.41,5.61A61.54,61.54,0,0,0,64,34.27a53.55,53.55,0,0,0-9.9,13.2,32,32,0,0,0-3.85,15.18q0,9.46,5.83,13.86a24.18,24.18,0,0,0,13.53,4.84,18.27,18.27,0,0,0,6.27-3.08,33.48,33.48,0,0,0,6.27-5.83A30.38,30.38,0,0,0,86.74,65a17.64,17.64,0,0,0,1.54-8,62.87,62.87,0,0,1-7.81-3.41,12.72,12.72,0,0,1-5.83-5.61q1.1-5.94,6.6-11.66a30.66,30.66,0,0,1,13.64-8.14Zm-45.1,0a53.66,53.66,0,0,0-14.41,5.61,61.54,61.54,0,0,0-13.42,10A53.55,53.55,0,0,0,9,47.47,32,32,0,0,0,5.12,62.65q0,9.46,5.83,13.86a24.18,24.18,0,0,0,13.53,4.84,18.27,18.27,0,0,0,6.27-3.08A33.48,33.48,0,0,0,37,72.44,30.37,30.37,0,0,0,41.64,65a17.64,17.64,0,0,0,1.54-8,62.86,62.86,0,0,1-7.81-3.41,12.72,12.72,0,0,1-5.83-5.61q1.1-5.94,6.6-11.66a30.66,30.66,0,0,1,13.64-8.14Z" />
                                </svg>
                            </div>
                            <?php the_content();?>
                            <div class="qt_end">
                                <svg id="Layer_71" data-name="Layer 71" xmlns="http://www.w3.org/2000/svg" viewBox="16 16 70 70">
                                    <path class="cls-1" d="M8.2,81.35a53.66,53.66,0,0,0,14.41-5.61A61.54,61.54,0,0,0,36,65.73a53.55,53.55,0,0,0,9.9-13.2,32,32,0,0,0,3.85-15.18q0-9.46-5.83-13.86a24.18,24.18,0,0,0-13.53-4.84,18.27,18.27,0,0,0-6.27,3.08,33.48,33.48,0,0,0-6.27,5.83A30.38,30.38,0,0,0,13.26,35a17.64,17.64,0,0,0-1.54,8,62.87,62.87,0,0,1,7.81,3.41,12.72,12.72,0,0,1,5.83,5.61q-1.1,5.94-6.6,11.66A30.66,30.66,0,0,1,5.12,71.89Zm45.1,0a53.66,53.66,0,0,0,14.41-5.61,61.54,61.54,0,0,0,13.42-10A53.55,53.55,0,0,0,91,52.53a32,32,0,0,0,3.85-15.18q0-9.46-5.83-13.86a24.18,24.18,0,0,0-13.53-4.84,18.27,18.27,0,0,0-6.27,3.08A33.48,33.48,0,0,0,63,27.56,30.37,30.37,0,0,0,58.36,35a17.64,17.64,0,0,0-1.54,8,62.86,62.86,0,0,1,7.81,3.41,12.72,12.72,0,0,1,5.83,5.61q-1.1,5.94-6.6,11.66a30.66,30.66,0,0,1-13.64,8.14Z" />
                                </svg>
                            </div>
								<h5><?php the_field('client_name',$clients->ID);?></h5>
								<h6><?php the_field('client_designation',$clients->ID);?></h6> 
								<span><?php the_field('client_company_name',$clients->ID);?></span> 
							</div>
								<div class="top-arrow btm_arw_shw">
                                        <div class="top-arrow-inner"></div>
								</div>
                          </div><!--item-->
				            <?php 
							endwhile;
							wp_reset_query();
						   ?>
                </div>
            </div>
        </section>

<?php get_footer();?>