<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
global $post; 



$category= get_queried_object();
$term_id= $category->term_id;


// echo '<pre>';

// print_r($category);

// echo '</pre>';

// die;

$term_slug=$category->slug;

$value = get_field('category_banner_image','expertise_category_'.$term_id);


if ( $value )
{
?>
<section class="resume_banner cat_admin_banner wow fadeInDown" style="background-image: url('<?php echo $value['url']; ?>');">
<?php 

}
else
{
?>		
<section class="resume_banner cat_admin_banner wow fadeInDown" style="background-image:url('http://placehold.it/1920x375&amp;text=No image found')">

<?php	
}
?>	 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="resume_banner_innr">
                            <figure class="look_wrk_fig">
							
								<?php echo get_field('category_svg_image','expertise_category_'.$term_id);?>
                            
							</figure>
                            <div class="resume_section category_section">
                                <h2><?php echo $cat_title=single_cat_title(); ?></h2>
                                <?php echo get_field('banner_description','expertise_category_'.$term_id);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-arrow">
                <div class="bottom-arrow-inner"> </div>
            </div>
        </section>
        <!--resume_banner end-->
        <section class="local-impact-area client_place_order">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2>Clients</h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
						 <?php echo get_field('client_section','expertise_category_'.$term_id);?>
                        </div>
                        <div class="col-md-3 col-sm-4"> <a href="#" class="btn-green">place a job order</a> </div>
                    </div>
                </div>
            </div>
        </section>
        <!--client_place_order end-->
        <section class="local-impact-area client_place_order bg_grey">
            <div class="container">
                <div class="local-impact-area-inner">
                    <h2>Candidates</h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
							<?php echo get_field('candidates_section','expertise_category_'.$term_id);?>
                        </div>
                        <div class="col-md-3 col-sm-4"> <a href="#" class="btn-green">submit your resume</a> </div>
                    </div>
                </div>
            </div>
        </section>
        <!--client_place_order end-->
        <section class="local-impact-area client_place_order competetive-pay">
            <div class="container">
                <div class="local-impact-inner">
                    <h2>Top <?php single_cat_title(); ?> jobs</h2>
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
							<?php echo get_field('top_category_decription','expertise_category_'.$term_id);?>  
                        </div>
                        <div class="col-md-3 col-sm-4"> <a href="#" class="btn-green">View all jobs</a> </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 job_listing_info">
                            <div class="job_list_bx">
							   <?php
								$args = array(
											'post_type' => 'expertise',
											'posts_per_page' =>4,
											'expertise_category'=>$term_slug,
											'order'          => 'DESC',
											);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
							
                                <div class="job_list_view wow fadeInUp">
                                    <h4><?php the_title();?></h4>
                                    <ul>
                                        <li> <i class="job_user">
                     
                                             <svg id="Layer_48" data-name="Layer 48" xmlns="http://www.w3.org/2000/svg" viewBox="8 7 36 36"><path class="cls-1" d="M18.27,24a8.47,8.47,0,0,0,2.18,4.6h0a6.56,6.56,0,0,0,4.34,2.47c1.64.06,3.28-.83,4.88-2.66h0a8.42,8.42,0,0,0,2-4.41s1.11.19,1.73-2.47-.62-2-.62-2c1.61-8.41-5-10.69-5-10.69A7.34,7.34,0,0,0,25,8.46a7.32,7.32,0,0,0-2.87.34s-6.56,2.29-5,10.69c0,0-1.24-.62-.62,2S18.27,24,18.27,24Z"/><path class="cls-1" d="M20.53,28.91A22.75,22.75,0,0,1,20.37,32c-.37,1-4.57,2-6.3,2.35s-3.89,1-5.25,4.57,33.74,3.59,32.38,0-3.52-4.26-5.25-4.57S30,32.95,29.63,32a22.58,22.58,0,0,1-.16-3.14"/></svg>    
                                            </i><?php the_field('job_type',$loop->ID);?>
										 </li>
                                        <li><i class="job_dollar">
                            <svg id="Layer_49" data-name="Layer 49" xmlns="http://www.w3.org/2000/svg" viewBox="10 10 28 28"><path class="cls-1" d="M25,39.9c-6.15,0-11.15-3.86-11.15-8.61h6c0,2.18,2.3,4,5.13,4s5.13-1.78,5.13-4-2.3-4-5.13-4c-6.15,0-11.15-3.86-11.15-8.61s5-8.61,11.15-8.61S36.15,14,36.15,18.71h-6c0-2.18-2.3-4-5.13-4s-5.13,1.78-5.13,4,2.3,4,5.13,4c6.15,0,11.15,3.86,11.15,8.61S31.15,39.9,25,39.9Z"/><line class="cls-1" x1="25" y1="6.04" x2="25" y2="10.1"/><line class="cls-1" x1="25" y1="39.9" x2="25" y2="43.96"/><line class="cls-1" x1="25" y1="27.95" x2="25" y2="35.24"/><line class="cls-1" x1="25" y1="15.28" x2="25" y2="22.57"/></svg>
                            </i><?php the_field('salary',$loop->ID);?>
							</li>
                                        <li><i class="job_pin">
                             <svg id="Layer_50" data-name="Layer 50" xmlns="http://www.w3.org/2000/svg" viewBox="10 10 30 30"><path class="cls-1" d="M25,6.93A12.24,12.24,0,0,0,12.76,19.17c0,.14,0,.29,0,.44a12.22,12.22,0,0,0,.7,3.68C16.08,31.87,25,43.07,25,43.07s8.92-11.2,11.53-19.78a12.19,12.19,0,0,0,.7-3.68q0-.22,0-.44A12.24,12.24,0,0,0,25,6.93Zm0,18.24a6,6,0,1,1,6-6A6,6,0,0,1,25,25.17Z"/></svg>
                            </i><?php the_field('job_location',$loop->ID);?></li>
                                    </ul>
                                    <div class="job_list_info_main">
                                        <div class="info_main_lft">
                                            <?php the_content();?>
                                        </div>
                                        <div class="info_main_rght"> 
											<a href="<?php the_permalink();?>" class="btn-green" title="">view</a> 
											<a href="<?php the_permalink();?>" class="btn-green" title="">Apply</a> 
										</div>
                                    </div>
                                </div>
                                <!--job_list_view end-->
								
								<?php endwhile;?>
							
                            </div>
                            <!--job_list_bx end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php
			$cat_footer_banner = get_field('category_footer_banner','expertise_category_'.$term_id);
		?>		
        <section class="about_banner cat_btm_list" style="background-image: url('<?php echo $cat_footer_banner['url']; ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2><big>Other Categories</big></h2>
                        <ul>
							<?php
							
							$args = array( 'taxonomy' => 'expertise_category','hide_empty'=>0 );
							$terms = get_terms('expertise_category', $args);
                          
						   foreach ($terms as $term) 
						   {
						  ?>
							 <li>
							  
								<a href="<?php echo get_category_link( $term->term_id ); ?>" 
								<?php
								if($term_slug==$term->slug)		
								{
								?>
									class="active">
								
								<?php
								}
								else
								{
								?>
	                               title="">					
								<?php
								}
								
								 echo get_field('other_category_svg_image','expertise_category_'.$term->term_id );?> 

                                    <h6><?php echo $term->name;?></h6></a>
							 </li>
								
						   <?php
						   }//end of for loop
						   ?>     
                        </ul>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer(); ?>
