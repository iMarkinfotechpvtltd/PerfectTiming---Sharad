<?php 
/* Template Name: Find Talent
*/ 
get_header();
global $post;
?>

 <section class="banner wow fadeInDown employees_banner talent_banner">
            <div id="home-banner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
					   
					   <?php
							/*Getting  Home Banner Image */
							$Banner_image=get_post_meta($post->ID,"banner_image",true);
							$Banner = wp_get_attachment_image_src($Banner_image, 'work_talent_banner_size');	
		
						if(!empty($Banner))
						{
						?>
						<div class="banner-caption" style="background-image: url('<?php echo $url=$Banner[0]?>');">
							
						<?php 
						}
						else
						{
						?>		
						<div class="banner-caption" style="background-image:url('http://placehold.it/1920x423&amp;text=No image found')">
						
						<?php	
						}
						?>	 

                            <div class="container">
                                <div class="figcaption">
                                    <div class="text">
                                        <div class="banner-text-left">
                                            <h1><?php the_field('banner_text1',$post->ID);?><small>
											<?php the_field('banner_text2',$post->ID);?></small></h1> 
										</div>
                                        <div class="banner-text-right">
                                            <a href="#" class="btn-find btn-web-clock"> 
											
											 <?php echo get_post_meta($post->ID,"place_a_temporary_svg_image",true); ?>
											
											 <span><?php the_field('place_a_temporary_button_text',$post->ID);?></span></a>
                                            
											<a href="#" class="btn-find btn-talent-usr"> 
											
											 <?php echo get_post_meta($post->ID,"place_direct_staffing_svg_image",true); ?>
											
											
										 <span><?php the_field('place_direct_staffing_button_text',$post->ID);?></span></a>
										 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="we-help-people-area  wow fadeInUp animated" style="visibility: visible;">
            <div class="container">
                <div class="we-help-people-area-inner">
                    <h2><big><?php the_field('let_us_help_you_heading',$post->ID);?></big></h2>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="we-help-people-text">
                                <p><strong><?php the_field('let_us_help_text1',$post->ID);?></strong></p>
                                 <div class="prcnt_80"><svg id="Layer_76" data-name="Layer 76" xmlns="http://www.w3.org/2000/svg" viewBox="394 10 60 60"><path class="cls-1" d="M195.33,38.79A14.27,14.27,0,0,0,199,46.54h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0A14.18,14.18,0,0,0,218,38.79s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S195.33,38.79,195.33,38.79Z"/><path class="cls-1" d="M199.15,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M277.27,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S277.27,38.79,277.27,38.79Z"/><path class="cls-1" d="M281.09,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0S310,56.67,307,56.15s-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M359.21,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S359.21,38.79,359.21,38.79Z"/><path class="cls-1" d="M363,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M441.16,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S441.16,38.79,441.16,38.79Z"/><path class="cls-1" d="M445,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M523.1,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S523.1,38.79,523.1,38.79Z"/><path class="cls-1" d="M526.92,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M605,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S605,38.79,605,38.79Z"/><path class="cls-1" d="M608.86,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M687,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S687,38.79,687,38.79Z"/><path class="cls-1" d="M690.8,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-1" d="M768.93,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a20.74,20.74,0,0,0-9.68,0s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S768.93,38.79,768.93,38.79Z"/><path class="cls-1" d="M772.74,47.05a38.34,38.34,0,0,1-.27,5.14c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7,56.85,6,54.56,0-5.94-7.19-8.85-7.7-10-2.29-10.62-4a38,38,0,0,1-.28-5.28"/><path class="cls-2" d="M31.44,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a12.36,12.36,0,0,0-4.84-.57,12.34,12.34,0,0,0-4.84.57s-11.05,3.85-8.35,18c0,0-2.08-1-1,3.44S31.44,38.79,31.44,38.79Z"/><path class="cls-2" d="M70.07,63.81c-2.29-6-5.94-7.19-8.85-7.7s-10-2.29-10.62-4a19.39,19.39,0,0,1-.24-3.22c-2.46,2.28-5,3.44-7.66,3.44h-.33a11.6,11.6,0,0,1-7.14-3.27A18.68,18.68,0,0,1,35,52.15c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7S72.37,69.86,70.07,63.81Z"/><path class="cls-2" d="M113.63,38.79a14.27,14.27,0,0,0,3.67,7.75h0c.73.89,3.55,4,7.32,4.15,2.77.1,5.53-1.39,8.22-4.48h0a14.18,14.18,0,0,0,3.41-7.43s1.88.31,2.92-4.17-1-3.44-1-3.44c2.71-14.16-8.35-18-8.35-18a12.36,12.36,0,0,0-4.84-.57,12.34,12.34,0,0,0-4.84.57S109,17,111.76,31.18c0,0-2.08-1-1,3.44S113.63,38.79,113.63,38.79Z"/><path class="cls-2" d="M152,63.81c-2.29-6-5.94-7.19-8.85-7.7s-10-2.29-10.62-4a19.39,19.39,0,0,1-.24-3.22c-2.46,2.28-5,3.44-7.66,3.44h-.33a11.6,11.6,0,0,1-7.14-3.27,18.68,18.68,0,0,1-.24,3.06c-.62,1.66-7.71,3.44-10.62,4s-6.56,1.66-8.85,7.7S154.31,69.86,152,63.81Z"/></svg></div>
                                
								 <?php the_field('let_us_help_text2',$post->ID);?>
                                
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="we-help-people-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#video-popup">
                                     <figure><?php the_field('let_us_help_you_find_video',$post->ID);?></figure>
                                    <!--<div class="video-play"><i class="video-play-icon"></i></div>-->
                                </a>
                                <!-- Video Popup -->
                                <!--<div class="modal fade video-popup" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe src="https://www.youtube.com/embed/yAoLSRbwxL8" frameborder="0" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!-- Video Popup -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-arrow">
                <div class="bottom-arrow-inner"> </div>
            </div>
        </section>
        <section class="local-impact-area talent-impact-area wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2><?php the_field('you’ve_come_heading',$post->ID);?></h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <?php the_field('you’ve_come_text1',$post->ID);?>
							
                            <?php the_field('you’ve_come_text2',$post->ID);?>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="<?php echo site_url();?>/about" class="btn-green"><?php the_field('meet_our_team_button_text',$post->ID);?></a> 
							<a href="#" class="btn-green"><?php the_field('testimonial_button_text',$post->ID);?></a> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="what-perfect-time">
            <div class="container">
                <div class="what-perfect-time-inner">
                    <h2><big><?php the_field('what_perfect_timing_heading',$post->ID);?></big></h2>
                    <div class="what-perfect-time-list">
                     <div class="row">
                      <div class="col-sm-3">
                        <div class="what-perfect-time-bx">
                         <figure>
                          <a href="#" title="" class="need-evaluation-icon">
						  
								<?php echo get_post_meta($post->ID,"needs_evaluation_svg_image",true); ?>
                          </a>     
                         </figure> 
                         <h6><?php the_field('needs_evaluation_text',$post->ID);?></h6>  
						 
                            <?php the_field('needs_evaluation_description',$post->ID);?>
                        </div>  
                      </div>
                      <div class="col-sm-3">
                        <div class="what-perfect-time-bx">
                         <figure>
                          <a href="#" title="" class="extensive-screening-icon">
						  
						  <?php echo get_post_meta($post->ID,"extensive_screening_svg_image",true); ?>
                         
                          </a>     
                         </figure> 
                         <h6><?php the_field('extensive_screening_text',$post->ID);?></h6> 
						 
                          <?php the_field('extensive_screening_description',$post->ID);?>  
                        </div>  
                      </div>  
                      <div class="col-sm-3">
                        <div class="what-perfect-time-bx">
                         <figure>
                          <a href="#" title="" class="ongoing-support-icon">
						  
						   <?php echo get_post_meta($post->ID,"ongoing_support_svg_image",true); ?>
						   
                           
                          </a>     
                         </figure> 
                         <h6><?php the_field('ongoing_support_text',$post->ID);?></h6>     
							 <?php the_field('ongoing_support_description',$post->ID);?>  
                        </div>  
                      </div> 
                      <!--<div class="col-sm-3">
                        <div class="what-perfect-time-bx">
                         <figure>
                          <a href="#" title="" class="mnth-guarantee-icon">
						  
						   <?php //echo get_post_meta($post->ID,"3_month_guarantee_svh_image",true); ?>
						   
                          </a>
						  
                         </figure> 
                         <h6><?php //the_field('3_month_guarantee_text',$post->ID);?></h6>     
                         <?php //the_field('3_month_guarantee_description',$post->ID);?>  
                        </div>  
                      </div>-->   
                     </div>       
                    </div> 
                </div>
            </div>
        </section>
        <section class="expertise-area">
            <div class="container">
                <div class="expertise-area-inner">
                    <h2><big>Our Areas of Expertise</big></h2>
                    <div class="row">
					<!--****************** START GETTING CATEGORIES FROM EXPERTISE CATEGORIES *********************-->
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
									<p><?php echo wp_trim_words( $term->description, 12);?></p> 
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
		
		
		
		
        <section class="bottom-btn-area bottom-btn-area2 wow fadeInUp">
            <div class="container">
                <div class="bottom-btn-area-inner">
                    <div class="row">
                        <div class="col-sm-6">
                                                      
                            
                            <a href="#" class="btn-find btn-web-clock">
								 <?php echo get_post_meta($post->ID,"place_a_temporary_svg_image",true); ?>
							 <span><?php the_field('place_a_temporary_button_text',$post->ID);?></span></a>
                        </div>
                        <div class="col-sm-6"> 
                         <a href="#" class="btn-find btn-talent-usr">
						 
							 <?php echo get_post_meta($post->ID,"place_direct_staffing_svg_image",true); ?>
							 
						 <span><?php the_field('place_direct_staffing_button_text',$post->ID);?></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<?php get_footer();?>