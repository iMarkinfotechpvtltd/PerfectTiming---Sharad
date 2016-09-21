<?php 
/* Template Name: Employee 
*/ 
get_header();
global $post;
?>

 <section class="banner wow fadeInDown employees_banner">
            <div id="home-banner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
					<?php
							/*Getting  Home Banner Image */
							$Banner_image=get_post_meta($post->ID,"contact_banner_image",true);
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
                                            <h1><?php the_field('banner_text1',$post->ID);?><small><?php the_field('banner_text2',$post->ID);?></small></h1> </div>
                                        <div class="banner-text-right">
                                            <a href="<?php the_field('web_center_url',$post->ID);?>" class="btn-find btn-web-login">
											
											 <?php echo get_post_meta($post->ID,"webcenter_svg_image_code",true); ?>
											 
											 <span><?php the_field('web_center_login_button_text',$post->ID);?></span></a>
                                            
											<a href="#" class="btn-find btn-web-mail"> 
											
											<?php echo get_post_meta($post->ID,"contact_us_svg_image",true); ?>
											
											 <span><?php the_field('contact_us_button_text',$post->ID);?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="we-help-people-area current_employee_form wow fadeInUp">
            <div class="container">
                <div class="we-help-people-area-inner">
                    <h2><big><?php the_field('current_employee_forms_heading',$post->ID);?></big></h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="we-help-people-text current_employee_form_text">
                                
								<?php the_field('current_employee_forms_description',$post->ID);?>
								
                            </div>
                            <div class="current_employee_form_list">
                                <ul>
                                    <li>
                                        <div class="employee_form_dwnld">
                                            <figure>
											
											 <?php echo get_post_meta($post->ID,"timecard_form_svg_image",true); ?>
											
											</figure> 
											
											<span><?php the_field('timecard_form_text',$post->ID);?></span> 
											<a download href="<?php the_field('timecard_form_file',$post->ID);?>" class="learn-more">Download</a> </div>
                                    </li>
                                    <li>
                                        <div class="employee_form_dwnld">
                                            <figure> 
											
											 <?php echo get_post_meta($post->ID,"direct_deposit_form_svg_image",true); ?>
											
											</figure><span><?php the_field('direct_deposit_form_text',$post->ID);?></span> 
											<a download href="<?php the_field('direct_deposit_form_file',$post->ID);?>" class="learn-more">Download</a> </div>
                                    </li>
                                    <li>
                                        <div class="employee_form_dwnld">
                                            <figure> 
											
												<?php echo get_post_meta($post->ID,"w-4_form_svg_image",true); ?>
											
											</figure> <span><?php the_field('w-4_form_text',$post->ID);?></span>
											<a download href="<?php the_field('w-4_form_file',$post->ID);?>" class="learn-more">Download</a> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<section class="local-impact-area competetive-pay wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2>Competitive Pay</h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <p><strong>Perfect Timing annually reviews the compensation for each job category <br> we provide to our clients.</strong> </p>
                            <p>This ensures that the amount you are paid for a Perfect Timing job is competitive and is equivalent to comparable positions. Beginning in January 2011, short and long term assignments including benefit and holiday pay will be available with a nationally recognized research facility.</p>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <p><strong>Have a question or <br> want to learn more?</strong> </p> <a href="#" class="btn-green">contact us</a> </div>
                    </div>
                </div>
            </div>
        </section>-->
        <section class="we-help-people-area current_employee_form assign_info wow fadeInUp">
            <div class="container">
                <div class="we-help-people-area-inner">
                    <h2><big><?php the_field('assignment_information_text',$post->ID);?></big></h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="we-help-people-text current_employee_form_text">
                                <?php the_field('assignment_information_description',$post->ID);?>
                            </div>
                        </div>
                    </div>
                    <div class="row assign_list">
                        <div class="col-sm-12">
						
						
							<ul class="gridder">
							
							<?php 
							$i=1;
							$args=array
							(
									'post_type'      =>'assignment',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$assignment = new WP_Query($args);
							
							// echo '<pre>';

							// print_r($assignment);

                            // echo '</pre>';
							
							// die;
							while( $assignment -> have_posts() ) : $assignment -> the_post();
						   
							
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
									'post_type'      =>'assignment',
									'posts_per_page' => -1,
									'order'          => 'ASC',
							);
							$assignment = new WP_Query($args);

							while( $assignment -> have_posts() ) : $assignment -> the_post();
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
                    </div>
                </div>
            </div>
        </section>
        <section class="local-impact-area change_adrs wow fadeInUp">
            <div class="container">
                <div class="local-impact-area-inner">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <p><strong><?php the_field('change_of_address_heading',$post->ID);?></strong> </p>
								<?php the_field('change_of_address_description',$post->ID);?>
                        </div>
                        <div class="col-md-3 col-sm-4">
							<a download class="btn-green" href="<?php the_field('w-4_form_file',$post->ID);?>">
							<?php the_field('w-4_form_text',$post->ID);?></a> 
						</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-btn-area bottom-btn-area1 wow fadeInUp">
            <div class="container">
                <div class="bottom-btn-area-inner">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="btn-find btn-web-login"> 
							
								 <?php echo get_post_meta($post->ID,"webcenter_svg_image_code",true); ?>
								 <?php the_field('web_center_login_button_text',$post->ID);?>
							</a>
                        </div>
                        <div class="col-sm-6"> 
							<a href="<?php echo site_url();?>/contact" class="btn-find btn-web-mail">
								<?php echo get_post_meta($post->ID,"contact_us_svg_image",true); ?>
								<?php the_field('contact_us_button_text',$post->ID);?>
							</a> 
						</div>
                    </div>
                </div>
            </div>
        </section>
		
<?php get_footer();?>