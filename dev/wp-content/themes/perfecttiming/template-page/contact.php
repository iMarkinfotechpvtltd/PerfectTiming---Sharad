<?php 
/* Template Name: Contact
*/ 
get_header();
global $post;
session_start();



/*Getting  Home Banner Image */
$Banner_image=get_post_meta($post->ID,"banner_image",true);
$Banner = wp_get_attachment_image_src($Banner_image, 'contact_banner_image_size');
			?>							
   <section class="contact_banner wow fadeInDown " style="background-image: url('<?php echo $url=$Banner[0]?>');">
            <div class="container">
                <div class="contact_inner">
				<input type="hidden" value="<?php echo site_url();?>" name="site_url" id="site_url">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact_bx">
                                <a href="<?php echo site_url();?>/find-talent" class="cntct_brdr btn-find-talent">
								
									<?php echo get_post_meta($post->ID,"looking_for_talent_svg_image",true); ?>
								
                                    
                                   <?php the_field('looking_for_talent_button_text',$post->ID);?></a>
								   
                                <h3>
									<a href="#" class="shw_form"><?php the_field('submit_a_job_order_text',$post->ID);?></a>
								</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact_bx">
                                <a href="#" class="cntct_brdr btn-find-talent">
								
									<?php echo get_post_meta($post->ID,"looking_for_work_svg_image",true); ?>
								
                                 <?php the_field('looking_for_work_button_text',$post->ID);?></a>
                                <h3><a href="perfecttiming.com/resume"> <?php the_field('submit_your_resume_text',$post->ID);?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-arrow">
                <div class="bottom-arrow-inner"></div>
            </div>
        </section>
        <section class="contact_top wow fadeInUp hide_form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact_expnd_form">
 
                            <div class="contact_form_sec">
							<?php if(isset($_POST['submit'])){
								echo "<pre>";	print_r($_POST);	echo "</pre>";
								echo "<pre>";	print_r($_FILES);	echo "</pre>";
								
								$getPath	=	getcwd();
								$uploads_dir = $getPath."/cimages/"; 
								foreach ($_FILES["filesToUpload"]["error"] as $key => $error) {
									if ($error == UPLOAD_ERR_OK) 
									{
										$tmp_name = $_FILES["filesToUpload"]["tmp_name"][$key];
										
										 $name = basename($_FILES["filesToUpload"]["name"][$key]);
										if(move_uploaded_file($tmp_name, $uploads_dir.$name))
										{
											echo 'done';
										}
										else
										{
											echo $error;
										}
									}
								}
							
							}
							?>
                              <form name="upload_form" enctype="multipart/form-data" method="post" action="">
                                    <h3>Your Contact Information</h3>
                                    <div class="frm_sec1">
                                        <p>
                                            <span><label>Name *</label></span>
                                            <input type="text">
                                        </p>
                                        <p>
                                            <span><label>company Name *</label></span>
                                            <input type="text">
                                        </p>
                                        <p>
                                            <span><label>email address *</label></span>
                                            <input type="email">
                                        </p>
                                        <p>
                                            <span><label>phone number *</label></span>
                                            <input type="text">
                                        </p>
                                    </div>
                                    <!--frm_sec1 end-->
                                   <div class="frm_sec2">
                                        <h3>Job Description</h3>
                                        <p class="inpt_title">
                                            <span><label>Job title *</label></span>
                                            <input type="text">
                                        </p>
                                        <div class="radio_list">

                                            <label class="lt_0" for="phone">
                                                <input type="radio" checked="" id="phone" value="email" name="active" checked>
                                                <span class="circle"></span>Temporary staffing

                                            </label>
                                            <label for="email">
                                                <input type="radio" id="email" value="email" name="active">
                                                <span class="circle"></span>Direct staffing

                                            </label>
                                        </div>
										
										<!--frm_sec1 end-->
								<div class="contact_form_sec">		
                                    <div class="frm_sec2">
                                       
                                        <div class="slct_cstm">
                                            <label>select a job category that interests you</label>
                                            <select class="selectpicker" id="first-disabled">
                                                <option>I’m interested in all categories</option>
                                                <option>Accounting &amp; Financial</option>
                                                <option>Administrative &amp; HR</option>
                                                <option>Construction Management</option>
                                                <option>Customer Service &amp; Support</option>
                                                <option>Marketing &amp; Communications</option>
                                                <option>Non-profit &amp; Public Agencies</option>
                     
                                            </select>
                                        </div>
                                       </div>
                                    </div>
                                    <!--frm_sec2 end-->

                                       <div class="upload_sec">
                                            <label>Upload a job description *</label>

                                            <div class="fileUpload btn-green">
                                                <span>Choose File</span>
                                                <!--<input id="uploadBtn" type="file" class="upload" />--> 
												
												<input name="filesToUpload[]" id="filesToUpload" type="file" class="upload" multiple="" onChange="makeFileList();"/>
                                            </div>
											<ul id="fileList"><li>No Files Selected</li></ul>
                                            <!--<input id="uploadFile" placeholder="No file chosen" disabled=""/>-->
                                        </div> 
                                    </div>
                                    <!--frm_sec2 end-->
									
									
                                  <div class="adtnl_info">
                                     <p>    
                                      <span><label>Job Overview</label></span>   
                                      <textarea></textarea>   
                                     </p>    
                                    </div>
									<div class="adtnl_info">
                                     <p>    
                                      <span><label>Responsibilities</label></span>   
                                      <textarea></textarea>   
                                     </p>    
                                    </div>
									<div class="adtnl_info">
                                     <p>    
                                      <span><label>Requirements</label></span>   
                                      <textarea></textarea>   
                                     </p>    
                                    </div>
									
                                    <p class="inpt_title">
                                     <span><label>verification *</label></span> 
                                     <span>Please enter any two digits with no spaces (Example: 12):</span>   
                                     <input type="text">   
                                    </p>
                                    <div class="sbmt_btn">
                                    <input type="submit" class="btn-green" name="submit" value="Submit"></div>
                                </form>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_btm wow fadeInUp">
            <div class="contact_btm_innr">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact_info">
                                <h3><?php the_field('get_in_touch_text',$post->ID);?></h3>
                                <ul>
                                    <li><a href="tel:<?php echo get_option_tree('office_phone');?>">
                                        <i class="contact-phone">
                                         <div class="contact-phone-static">
                                          <svg id="Layer_27" data-name="Layer 27" xmlns="http://www.w3.org/2000/svg" viewBox="5 4 60 60"><path id="Phone" class="cls-1" d="M62.24,49.6,61.86,49c-1.07-2.11-12.62-4.59-13.54-4.59l-.72.12c-1.36.36-2.79,1.72-5.56,4.49a1.79,1.79,0,0,1-2.09.41A51.77,51.77,0,0,1,28.32,41a41.41,41.41,0,0,1-7.9-10.74,2,2,0,0,1,.38-2.08c3.14-3.26,4.48-4.81,4.5-6.4,0-.93-2.8-12.43-4.91-13.4l-.62-.35C18.4,7.3,16.34,6.19,14.2,6.8a6,6,0,0,0-1.47.7c-1.38,1-4.82,3.78-6.24,7.12-.84,2.11,0,20.62,14.92,35.23S53.13,63.79,55.59,63.09h.07l.19-.08c3.33-1.49,6-4.92,7-6.38C64.73,54.05,63.14,51.19,62.24,49.6Z"/></svg>     
                                         </div>    
                                         <div class="contact-phone-hov">
                                          <svg id="Layer_28" data-name="Layer 28" xmlns="http://www.w3.org/2000/svg" viewBox="5 4 60 60"><path id="Phone" class="cls-1" d="M62.24,49.6,61.86,49c-1.07-2.11-12.62-4.59-13.54-4.59l-.72.12c-1.36.36-2.79,1.72-5.56,4.49a1.79,1.79,0,0,1-2.09.41A51.77,51.77,0,0,1,28.32,41a41.41,41.41,0,0,1-7.9-10.74,2,2,0,0,1,.38-2.08c3.14-3.26,4.48-4.81,4.5-6.4,0-.93-2.8-12.43-4.91-13.4l-.62-.35C18.4,7.3,16.34,6.19,14.2,6.8a6,6,0,0,0-1.47.7c-1.38,1-4.82,3.78-6.24,7.12-.84,2.11,0,20.62,14.92,35.23S53.13,63.79,55.59,63.09h.07l.19-.08c3.33-1.49,6-4.92,7-6.38C64.73,54.05,63.14,51.19,62.24,49.6Z"/></svg>     
                                         </div>   
                                        </i><span><?php echo get_option_tree('office_phone');?></span></a>
                                    </li>
                                    <li><a href="#">
                                      <i class="contact-fax">
                                       <div class="contact-fax-static">
                                         <svg id="Layer_29" data-name="Layer 29" xmlns="http://www.w3.org/2000/svg" viewBox="3 3 63 63"><path class="cls-1" d="M15.42,29.08h-3a7.83,7.83,0,0,0-7.83,7.83V56.58a7.83,7.83,0,0,0,7.83,7.83H57.58a7.83,7.83,0,0,0,7.83-7.83V36.92a7.83,7.83,0,0,0-7.83-7.83h-2"/><path class="cls-1" d="M15.34,5.59V53.66H54.66V5.59Zm29.49,10H25.17m14.66,7.33H25.17m17.66,7.23H25.17m11.66,6.6H25.17m19.66,7.17H25.17"/></svg>
                                       </div>  
                                       <div class="contact-fax-hov">
                                        <svg id="Layer_30" data-name="Layer 30" xmlns="http://www.w3.org/2000/svg" viewBox="3 3 63 63"><path class="cls-1" d="M57.66,28.09V56.66H12.34V28.09a8.84,8.84,0,0,0-8.75,8.83V56.58a8.84,8.84,0,0,0,8.83,8.83H57.58a8.84,8.84,0,0,0,8.83-8.83V36.92A8.84,8.84,0,0,0,57.66,28.09Z"/><path class="cls-1" d="M14.34,4.59V54.66H55.66V4.59ZM25.17,21.91H39.83v2H25.17Zm0,7.23H42.83v2H25.17Zm0,6.6H36.83v2H25.17Zm19.66,9.17H25.17v-2H44.83Zm0-28.33H25.17v-2H44.83Z"/></svg>   
                                       </div>   
                                      </i><span><?php echo get_option_tree('fax_no');?></span></a>
                                    </li>
                                    <li><a href="mailto:hi@perfecttiming.com">
                                        <i class="contact-mail">
                                         <div class="contact-mail-static">
                                          <svg id="Layer_31" data-name="Layer 31" xmlns="http://www.w3.org/2000/svg" viewBox="9 9 52 52"><path class="cls-1" d="M60.07,58.71H10.63A5.37,5.37,0,0,1,5,53.63V16.37a5.37,5.37,0,0,1,5.62-5.08H59.37A5.37,5.37,0,0,1,65,16.37V54.26A4.7,4.7,0,0,1,60.07,58.71Z"/><polyline class="cls-1" points="5.4 18.52 35 41.84 64.6 18.52"/><line class="cls-1" x1="43.43" y1="35.64" x2="64.6" y2="52.32"/><line class="cls-1" x1="5.4" y1="52.32" x2="26.9" y2="35.39"/></svg>     
                                         </div>    
                                         <div class="contact-mail-hov">
                                          <svg id="Layer_32" data-name="Layer 32" xmlns="http://www.w3.org/2000/svg" viewBox="9 9 52 52"><polygon class="cls-1" points="44.76 35.42 65.99 52.14 65.99 18.7 44.76 35.42"/><path class="cls-1" d="M35,40.57l31-24.4a6.39,6.39,0,0,0-6.61-5.87H10.63A6.39,6.39,0,0,0,4,16.17Z"/><polygon class="cls-1" points="25.24 35.42 4.01 18.7 4.01 52.14 25.24 35.42"/><path class="cls-1" d="M43.15,36.7,35,43.11,26.85,36.7,4.1,54.61a6.49,6.49,0,0,0,6.53,5.09H60.07a5.75,5.75,0,0,0,5.9-5Z"/></svg>     
                                         </div>   
                                        </i><span><?php echo get_option_tree('email');?></span></a>
                                    </li>
                                    <li><a href="#">
                                        <i class="contact-pin">
                                         <div class="contact-pin-static">
                                          <svg id="Layer_33" data-name="Layer 33" xmlns="http://www.w3.org/2000/svg" viewBox="13 15 42 42"><path class="cls-1" d="M35,5.37A20.08,20.08,0,0,0,14.93,25.44c0,.24,0,.48,0,.72a20,20,0,0,0,1.15,6C20.38,46.27,35,64.63,35,64.63S49.62,46.27,53.91,32.19a20,20,0,0,0,1.15-6q0-.37,0-.72A20.07,20.07,0,0,0,35,5.37Zm0,29.91a9.83,9.83,0,1,1,9.83-9.83A9.83,9.83,0,0,1,35,35.27Z"/></svg>     
                                         </div>
                                        <div class="contact-pin-hov"> 
                                        <svg id="Layer_34" data-name="Layer 34" xmlns="http://www.w3.org/2000/svg" viewBox="13 15 42 42"><path class="cls-1" d="M35,5.37A20.08,20.08,0,0,0,14.93,25.44c0,.24,0,.48,0,.72a20,20,0,0,0,1.15,6C20.38,46.27,35,64.63,35,64.63S49.62,46.27,53.91,32.19a20,20,0,0,0,1.15-6q0-.37,0-.72A20.07,20.07,0,0,0,35,5.37Zm0,29.91a9.83,9.83,0,1,1,9.83-9.83A9.83,9.83,0,0,1,35,35.27Z"/></svg>    
                                        </div>
                                        </i><span><?php echo get_option_tree('address');?></span></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact_map">
							<?php 
							/***getting map from custom field**/
		 
								$location=get_post_meta($post->ID, 'contact_map', TRUE);
		 
								if( !empty($location) ):
								?>
								<div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
								<?php endif; ?>
							
							
                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.2378356472905!2d-122.5132234843267!3d37.94823230993298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a43d82a891b%3A0xc2d1dedf35eb685c!2s700+Larkspur+Landing+Cir+%23165%2C+Larkspur%2C+CA+94939%2C+USA!5e0!3m2!1sen!2sin!4v1466691698292" height="293" frameborder="0" style="border:0" allowfullscreen></iframe>-->
								
								
								
								
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_form_sec">
                                <p><?php the_field('got_a_question_text',$post->ID);?></p>
								
								<?php echo do_shortcode('[contact-form-7 id="154" title="Contact form"]');?>
								
								
                                <!--<form>  
                                    <p>
                                        <span><label>Name *</label></span>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <span><label>company Name *</label></span>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <span><label>email address *</label></span>
                                        <input type="email">
                                    </p>
                                    <p>
                                        <span><label>phone number *</label></span>
                                        <input type="text">
                                    </p>
                                    <p class="txtarea">
                                        <span><label>Your message *</label></span>
                                        <textarea></textarea>
                                    </p>
                                    <p><a href="#" class="btn-green">Submit</a>
                                    </p>
                                </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--**************START SCRIPT FOR GOOGLE MAP*****************-->
        <style type="text/css">
            .acf-map {
                border: 1px solid #ccc;
                height: 427px;
                margin: 0;
            }
            /* fixes potential theme css conflict */
            
            .acf-map img {
                max-width: inherit !important;
            }
        </style>
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7XPVX2w3Q22FgcxuCDibIkDQbUwmo-88"
		type="text/javascript"></script>
		
        
        <script type="text/javascript">
            (function ($) {
                /*
                 *  render_map
                 *
                 *  This function will render a Google Map onto the selected jQuery element
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	$el (jQuery element)
                 *  @return	n/a
                 */
                function render_map($el) {
                    // var
                    var $markers = $el.find('.marker');
                    // vars
                    var args = {
                        zoom: 30,
                        center: new google.maps.LatLng(0, 0),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    // create map	        	
                    var map = new google.maps.Map($el[0], args);
                    // add a markers reference
                    map.markers = [];
                    // add markers
                    $markers.each(function () {
                        add_marker($(this), map);
                    });
                    // center map
                    center_map(map);
                }
                /*
                 *  add_marker
                 *
                 *  This function will add a marker to the selected Google Map
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	$marker (jQuery element)
                 *  @param	map (Google Map object)
                 *  @return	n/a
                 */
                function add_marker($marker, map) {
                    // var
                    var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
                    // create marker
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    // add to array
                    map.markers.push(marker);
                    // if marker contains HTML, add it to an infoWindow
                    if ($marker.html()) {
                        // create info window
                        var infowindow = new google.maps.InfoWindow({
                            content: $marker.html()
                        });
                        // show info window when marker is clicked
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(map, marker);
                        });
                    }
                }
                /*
                 *  center_map
                 *
                 *  This function will center the map, showing all markers attached to this map
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	4.3.0
                 *
                 *  @param	map (Google Map object)
                 *  @return	n/a
                 */
                function center_map(map) {
                    // vars
                    var bounds = new google.maps.LatLngBounds();
                    // loop through all markers and create bounds
                    $.each(map.markers, function (i, marker) {
                        var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
                        bounds.extend(latlng);
                    });
                    // only 1 marker?
                    if (map.markers.length == 1) {
                        // set center of map
                        map.setCenter(bounds.getCenter());
                        map.setZoom(15);
                    } else {
                        // fit to bounds
                        map.fitBounds(bounds);
                    }
                }
                /*
                 *  document ready
                 *
                 *  This function will render each map when the document is ready (page has loaded)
                 *
                 *  @type	function
                 *  @date	8/11/2013
                 *  @since	5.0.0
                 *
                 *  @param	n/a
                 *  @return	n/a
                 */
                $(document).ready(function () {
                    $('.acf-map').each(function () {
                        render_map($(this));
                    });
                });
            })(jQuery);
        </script>
        <!--**************END OF SCRIPT FOR GOOGLE MAP*****************-->

<script>

jQuery("#btn_submit" ).click(function() {
	
var url = jQuery('.contact_inner').find('#site_url').val();
jQuery("input[name='siteurl']").val(url);
});
</script>		

	
<?php get_footer();?>