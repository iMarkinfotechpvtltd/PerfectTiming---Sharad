<?php 
/* Template Name: Find Work
*/ 
get_header();
global $post;
?>

<section class="banner wow fadeInDown employees_banner find_work_banner talent_banner">
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
                                            <h1><?php the_field('banner_section_text1',$post->ID);?>
												<small><?php the_field('banner_section_text2',$post->ID);?></small>
											</h1> 
										</div>
                                        <div class="banner-text-right">
                                            <a href="http://perfecttiming.com/resume/" class="btn-find btn-submit-resume">
											
										  <?php echo get_post_meta($post->ID,"submit_resume_button_svg_image",true); ?>
										  
											
											  <span><?php the_field('submit_resume_button_text',$post->ID);?></span>
											  </a>
                                            <a href="<?php echo site_url();?>/view-jobs" class="btn-find btn-view-job"> 
											
											 <?php echo get_post_meta($post->ID,"view_jobs_button_svg_image",true); ?>
											
											 <span><?php the_field('view_jobs_button_text',$post->ID);?></span> 
											 </a>
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
                    <h2><big><?php the_field('let_us_help_heading',$post->ID);?></big></h2>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="we-help-people-text">
                                <p><strong><?php the_field('let_us_help_section_text1',$post->ID);?></strong></p>
                                <?php the_field('let_us_help_section_text2',$post->ID);?>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="we-help-people-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#video-popup">
                                    <figure><?php the_field('let_us_help_video',$post->ID);?></figure>
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
        <section class="local-impact-area find-work-impact-area wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2><?php the_field('start_your_job_search_heading',$post->ID);?></h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <?php the_field('start_your_job_search_description',$post->ID);?>
                        </div>
                        <div class="col-md-3 col-sm-4">
							<a href="<?php echo site_url();?>/view-jobs" class="btn-green">
								<?php the_field('start_your_job_search_view_job_button_text',$post->ID);?>
							</a> 
						</div>
                    </div><!--row-->
                <div class="row find_work_srch">
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

								</div><!--expertise-box-->
                             </div><!--col-sm-4-->
                          <?php 
							}
							wp_reset_query();
							?>	

                </div><!--find_work_srch-->
            </div>
    </div>
    </section>
   <section class="we-help-people-area current_employee_form assign_info wow fadeInUp">
            <div class="container">
                <div class="we-help-people-area-inner">
                    <h2><big><?php the_field('frequently_asked_questions_text',$post->ID);?></big></h2>
                    <div class="row assign_list">
                        <div class="col-sm-12">
                            <ul class="gridder">
							
							<?php 
							$i=1;
							$args=array
							(
									'post_type'      =>'faqs',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$faqs = new WP_Query($args);

							while( $faqs -> have_posts() ) : $faqs -> the_post();
						   ?>
							
                                <li class="gridder-list" data-griddercontent="#gridder-content-<?php echo $i;?>">
                                    <div class="assign_list_bx">
                                        <h6><?php the_title();?></h6>
                                        <a href="javascript:void();" class="btn-plus btn-plus1"> <i class="plus-icon">
                                         <div class="plus-icon-static">
                                          <svg id="Layer_45" data-name="Layer 45" xmlns="http://www.w3.org/2000/svg" viewBox="14 14 62 62"><circle class="cls-1" cx="45" cy="45" r="28.96"/><line class="cls-1" x1="45" y1="60.06" x2="45" y2="29.94"/><line class="cls-1" x1="60.06" y1="45" x2="29.94" y2="45"/></svg>     
                                         </div> 
                                         <div class="plus-icon-hov">
                                          <svg id="Layer_46" data-name="Layer 46" xmlns="http://www.w3.org/2000/svg" viewBox="14 14 62 62"><circle class="cls-1" cx="45" cy="45" r="28.96"/><line class="cls-2" x1="45" y1="60.06" x2="45" y2="29.94"/><line class="cls-2" x1="60.06" y1="45" x2="29.94" y2="45"/></svg>     
                                         </div>    
                                        </i> </a>
                                        <div class="top-arrow btm_arw_shw">
                                            <div class="top-arrow-inner"></div>
                                        </div>
                                    </div>
                                </li>
							<?php
							$i++;	
							endwhile;
							wp_reset_query();
							?>
								
								
                            </ul>
							
							<?php 
							$i=1;
							$args=array
							(
									'post_type'      =>'faqs',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$faqs = new WP_Query($args);

							while( $faqs -> have_posts() ) : $faqs -> the_post();
						    ?>
							
							
                            <div id="gridder-content-<?php echo $i; ?>" class="gridder-content">
                                <div class="assign_answer">
                                    <div class="assign_answer_innr">
                                       <?php the_content();?>
                                    </div>
                                </div>
                            </div>
                              							
                            <?php
							$i++;	
							endwhile;
							wp_reset_query();
							?>	
                        </div><!--col-sm-12-->
                    </div><!--assign_list-->
                </div><!--we-help-people-area-inner-->
            </div>
        </section>
    <section class="local-impact-area change_adrs btm_gp">
        <div class="container">
            <div class="local-impact-area-inner">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <p><strong><?php the_field('still_have_questions_text',$post->ID);?></strong> </p>
                    </div>
                    <div class="col-md-3 col-sm-4"> <a class="btn-green" href="<?php echo site_url();?>/contact">
					<?php the_field('contact_us_button_text',$post->ID);?></a> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-btn-area bottom-btn-area3 wow fadeInUp">
        <div class="container">
            <div class="bottom-btn-area-inner">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="http://perfecttiming.com/resume/" class="btn-find btn-submit-resume">
						
						
						 <?php echo get_post_meta($post->ID,"submit_resume_svg_image",true); ?>
						 <span><?php the_field('submit_resume_text',$post->ID);?></span></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="<?php echo site_url();?>/view-jobs" class="btn-find btn-view-job"> 
						
						 <?php echo get_post_meta($post->ID,"view_jobs_svg_image",true); ?>
						 <span><?php the_field('view_jobs_button_text',$post->ID);?></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();?>