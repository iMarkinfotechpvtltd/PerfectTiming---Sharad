<?php 
/* Template Name: Home 
*/ 
get_header();

global $post;
?>


  <section class="banner wow fadeInDown">
            <div id="home-banner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                   
				   <?php 
				    $i=0;
					$args=array
					(
							'post_type'      =>'slider',
							'posts_per_page' => -1,
							'order'          => 'ASC',
					);
					$slider = new WP_Query($args);
					
					
					while( $slider -> have_posts() ) : $slider -> the_post();
				 ?>

				   <div class="item <?php if($i==0){echo 'active' ;}?>">
				   
				   
				   <?php 
					if ( has_post_thumbnail() )
					{
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider_image_size' );
					?>
					
						<div class="banner-caption" style="background-image: url('<?php echo $image[0]; ?>');">
					
						
					<?php
					} 
					else 
					{
					?>
						<img src="http://placehold.it/1920x494&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
					<?php 
					}
					?>
				   
                            <div class="container">
                                <div class="figcaption">
                                    <div class="text">
                                        <div class="banner-text-left">
                                             <h1><?php the_field('section_1_text',$slider->ID);?>
											 <small><?php the_field('section_2_text',$slider->ID);?></small></h1> 
											 <a href="#" class="btn-green"><?php the_field('button_text',$slider->ID);?></a> 
										</div>
                                        <div class="banner-text-right"> 
											<a href="<?php echo site_url();?>/find-work" class="btn-find btn-find-work">
											    <?php echo get_post_meta($post->ID,"find_work_svg_image_code",true); ?>
											
												<?php the_field('find_work_text',$slider->ID);?></a> 
												
											<a href="<?php echo site_url();?>/find-talent" class="btn-find btn-find-talent">

												<?php echo get_post_meta($post->ID,"find_talent_svg_image_code",true); ?>

												<?php the_field('find_talent_text',$slider->ID);?></a> 
										</div>
                                    </div><!--text-->
                                </div><!--figcaption-->
                            </div><!--container-->
                        </div><!--banner-caption-->
                    </div><!--item-->
					<?php
						$i++;
						endwhile; 
						wp_reset_query();
					?>
                </div><!--carousel-inner-->
				
                <div class="container">
                    <div class="carousel-indicators-inner">
                        <ol class="carousel-indicators">
						
						  <?php 
							$i=0;
							$args=array
							(
									'post_type'      =>'slider',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$slider = new WP_Query($args);
							
							
							while( $slider -> have_posts() ) : $slider -> the_post();
						   ?>

                            <li data-target="#home-banner" data-slide-to="<?php echo $i;?>" <?php if($i==0){?> class="active" <?php }?>></li>
							
							<?php
								$i++;
								endwhile; 
								wp_reset_query();
							?>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="we-help-people-area  wow fadeInUp">
            <div class="container">
                <div class="we-help-people-area-inner">
                    <h2><big><?php the_field('we_help_people_section_heading',$post->ID);?></big></h2>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="we-help-people-text">
                                <?php the_field('we_help_people_section_description',$post->ID);?>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="we-help-people-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#video-popup">
                                    <!--<figure><img src="<?php //echo get_template_directory_uri();?>/images/video-img.jpg" alt="" title=""></figure>
                                    <div class="video-play"><i class="video-play-icon"></i></div>-->
									<?php the_field('we_help_people_video',$post->ID);?>
                                </a>
                                <!-- Video Popup -->
                                <div class="modal fade video-popup" id="video-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe src="https://www.youtube.com/embed/yAoLSRbwxL8" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                </div><!--expertise-area-inner-->
            </div><!--container-->
        </section> 
		
    
        <section class="process-succes-area wow fadeInUp">
            <div class="container">
                <div class="process-succes-area-inner">
                    <h2><big><?php the_field('our_process_for_success_heading',$post->ID)?></big></h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="process-succes-box highlight">
                                <div class="process-succes-head">
                                    <figure>
									
										<?php echo get_post_meta($post->ID,"section_1_svg_image",true); ?>
								
                                    </figure>
                                    <h6><?php the_field('section_1_heading',$post->ID);?></h6> 
								</div>
									<p><?php the_field('section_1_description',$post->ID);?></p>
                                <div class="dot-icon"></div>
                            </div>
                        </div>
						
                        <div class="col-sm-4">
                            <div class="process-succes-box">
                                <div class="process-succes-head">
                                    <figure>
										<?php echo get_post_meta($post->ID,"section_2_svg_image",true); ?>
                                    </figure>
                                    <h6><?php the_field('section_2_heading',$post->ID);?></h6> 
								</div>
                                <p><?php the_field('section_2_description',$post->ID);?></p>
                                <div class="dot-icon"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="process-succes-box">
                                <div class="process-succes-head">
                                    <figure>
									
										<?php echo get_post_meta($post->ID,"section_3_svg_image",true); ?>
                                       
                                    </figure>
                                    <h6><?php the_field('section_3_heading',$post->ID);?></h6> 
								</div>
                                <p><?php the_field('section_3_description',$post->ID);?></p>
                                <div class="dot-icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="local-impact-area wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2><?php the_field('local_impact_heading',$post->ID);?></h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <?php the_field('local_impact_description',$post->ID);?>
                        </div>
                        <div class="col-md-3 col-sm-4"> <a href="<?php echo site_url();?>/about" class="btn-green">
						<?php the_field('learn_about_us_button_text',$post->ID);?></a> 
						<a href="<?php echo site_url();?>/contact" class="btn-green"><?php the_field('contact_us_button_text',$post->ID);?></a> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-btn-area wow fadeInUp">
            <div class="container">
                <div class="bottom-btn-area-inner">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?php echo site_url();?>/find-work" class="btn-find btn-find-work"> 
							<?php echo get_post_meta($post->ID,"find_work_svg_image",true); ?>
							<?php the_field('find_work_heading',$post->ID);?></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo site_url();?>/find-talent" class="btn-find btn-find-talent"> 
							<?php echo get_post_meta($post->ID,"find_talent_svg_image",true); ?>
							<?php the_field('find_talent_heading',$post->ID);?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<?php get_footer();?>