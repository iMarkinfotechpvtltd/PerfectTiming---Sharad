<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<footer class="footer wow fadeInUp">
            <div class="container">
                <div class="widgets">
                    <h3>Committed to making a difference in our community</h3>
                    <div class="row">
                        <div class="pd-lft col-lg-3 col-sm-4 col-lg-offset-1">
                            <div class="widget-box">
                                <div class="footer-menu">
                                    <ul>
									<!--START CODE USE FOR GETTING FOOTER MENU-->
									<?php

										$defaults = array(
										'theme_location'  => '',
										'menu'            => 'Footer_menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
										);

										wp_nav_menu( $defaults );
									?>
									<!--END OF CODE USE FOR GETTING FOOTER MENU-->
									</ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="widget-box text-center pd-mdl"> <a href="#" class="btn-find webcenter-login">
                                <i class="webcenter-login-icon">
                                 <div class="webcenter-login-icon-static">
                                  <svg id="Layer_68" data-name="Layer 68" xmlns="http://www.w3.org/2000/svg" viewBox="3 3 49 74"><path class="cls-1" d="M48.05,74.26H8.51A4.5,4.5,0,0,1,4,69.77v-33a4.5,4.5,0,0,1,4.5-4.5h39a4.5,4.5,0,0,1,4.5,4.5V70.33A3.94,3.94,0,0,1,48.05,74.26Z"/><path class="cls-1" d="M10.16,32.38V23.58A17.92,17.92,0,0,1,46,23.3H40a11.92,11.92,0,0,0-23.84.28v8.71"/><path class="cls-1" d="M30.84,60.77H25.16a1.4,1.4,0,0,1-1.38-1.63L25,51.78l-.41-1.63A3.51,3.51,0,0,1,28,45.78h0a3.51,3.51,0,0,1,3.41,4.36L31,51.78l1.23,7.36A1.4,1.4,0,0,1,30.84,60.77Z"/></svg>     
                                 </div>  
                                 <div class="webcenter-login-icon-hov">
                                 <svg id="Layer_69" data-name="Layer 69" xmlns="http://www.w3.org/2000/svg" viewBox="3 3 49 74"><path class="cls-1" d="M10.06,33V23.23a17.92,17.92,0,0,1,35.83-.28h-6a11.92,11.92,0,0,0-23.84.28v9.71"/><path class="cls-1" d="M47.38,32.62h-39C5.92,32.62,4,34,4,36.44v33c0,2.48,1.92,5.2,4.41,5.2H47.95C50.12,74.62,52,72.15,52,70V36.44C52,34,49.87,32.62,47.38,32.62Zm-16.65,28H25.05a1.49,1.49,0,0,1-1.38-1.73l1.23-7.41-.41-1.66a3.51,3.51,0,1,1,6.81,0l-.41,1.63,1.23,7.46A1.48,1.48,0,0,1,30.74,60.62Z"/></svg>     
                                 </div>    
                                </i>
                                <?php echo get_option_tree('webcenter_login_text');?></a> </div>
                        </div>
                        <div class="mr-lft col-lg-3 col-sm-4">
                            <div class="widget-box"> 
								<address>
                                    <p>
										<a href="tel:<?php echo get_option_tree('office_phone');?>">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<?php echo get_option_tree('office_phone');?>
										</a>
									</p>
                                    <p>
										<i class="fa fa-print" aria-hidden="true"></i>
										<?php echo get_option_tree('fax_no');?>
									</p>
                                    <p>
										<a href="mailto:<?php echo get_option_tree('email');?>">
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<?php echo get_option_tree('email');?>
										</a>
									</p>
                                    <p>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<?php echo get_option_tree('address');?>
									</p>
                                </address> 
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-inner">
                        <div class="footer-logo">
                            <a href="<?php echo site_url();?>"><img src="<?php echo get_option_tree('footer_logo');?>" 
							alt="Logo" title=""></a>
                        </div>
                        <div class="copyright">&copy; <?php echo date('Y');?> Perfect Timing Personnel Services, Inc..</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	
	 <!-- Jquery Files Link -->
     <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js"></script>
     <!-- Sticky Nav -->
     <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.sticky.js"></script>
	
	 <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
	 <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/js/jquery.BlackAndWhite.js"></script>
	 <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
	 <script src="<?php echo get_template_directory_uri();?>/js/jquery.gridder.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	

    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#nav").sticky({
                topSpacing: 0
            });
        });
    </script>
    <!-- Search Box -->
    <script type="text/javascript">
        jQuery(".search-btn").click(function () {
            jQuery(".search-btn").removeClass("active");
            jQuery(".search-field").addClass("active");
            jQuery(".search-close-btn").addClass("active");
        });
        jQuery(".search-close-btn").click(function () {
            jQuery(".search-btn").addClass("active");
            jQuery(".search-close-btn").removeClass("active");
            jQuery(".search-field").removeClass("active");
        });
    </script>
    <script>
        window.setInterval(function () {
            console.log("Testing");
            var length_sec = jQuery(".process-succes-box").length;
            var index_class = jQuery(".process-succes-box").index(jQuery(".highlight"));
            // alert(index_class);
            var next_eq = parseInt(index_class) + 1;
            jQuery(".highlight").removeClass("highlight");
            if (next_eq == length_sec) {
                jQuery(".process-succes-box:first").addClass("highlight");
            }
            else {
                jQuery(".process-succes-box:eq(" + next_eq + ")").addClass("highlight");
            }
        }, 2000);
    </script>
    <!-- IE Smooth Scrolling -->
    <script type="text/javascript">
        if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            jQuery('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();
                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }
    </script>
       <script>
        jQuery(function ($) {

            //Preloader
            var preloader = $('.preloader');
            $(window).load(function () {
                preloader.remove();
            });
        });
    </script>
    <!-- Animation -->
   
    <script type="text/javascript">
        var wow = new WOW({
            boxClass: 'wow'
            , animateClass: 'animated'
            , offset: 140
            , mobile: true
            , live: true
            , callback: function (box) {}
            , scrollContainer: null
        });
        wow.init();
    </script>
    
    <script type="text/javascript">
        $(window).load(function () {
            $('.bwWrapper').BlackAndWhite({
                hoverEffect: true, // default true
                // set the path to BnWWorker.js for a superfast implementation
                webworkerPath: false, // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                intensity: 1
                , speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                    fadeIn: 200, // 200ms for fadeIn animations
                    fadeOut: 800 // 800ms for fadeOut animations
                }
            });
        });
    </script>
 
 <script>
    $(document).ready(function() {

      var sync1 = $("#owl-demo1");
      var sync2 = $("#owl-demo");

      sync1.owlCarousel({
           itemsCustom: [
                [320, 1],
                 [480, 1],    
                [768, 3],
                [1200, 3],
                [1500, 3]],
        
        center:true,
        slideSpeed : 1000,
        navigation: false,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });

      sync2.owlCarousel({
      itemsCustom: [
                [320, 1],
                 [480, 2],    
                [768, 6],
                [1200, 6],
                [1500, 6]],
        pagination:false,
       
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });

      function syncPosition(el){
        var current = this.currentItem;
        $("#owl-demo")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#owl-demo").data("owlCarousel") !== undefined){
          center(current)
        }

      }

      $("#owl-demo").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });

      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }

        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
      }

    });
    </script> 
	<script>
	jQuery(document).ready(function(){
		jQuery(".owl-wrapper-outer:first>.owl-wrapper>.owl-item>.item>a").each(function(){
			jQuery(this).click(function(){
				jQuery(".owl-slide-jQuery").each(function(){
					jQuery(this).removeClass("owl-slide-jQuery");
				});
				var indexx = jQuery(".owl-wrapper-outer:first>.owl-wrapper>.owl-item>.item>a").index(jQuery(this));
				jQuery(".owl-wrapper-outer:eq(1)>.owl-wrapper>.owl-item:eq("+indexx+")").addClass("owl-slide-jQuery")
			});
		});
	});
	</script>
	
	 
 <script>
        jQuery(document).ready(function ($) {
            // Call Gridder
            $(".gridder").gridderExpander({
                scrollOffset: 60
                , scrollTo: "panel", // "panel" or "listitem"
                animationSpeed: 400
                , animationEasing: "easeInOutExpo"
                , onStart: function () {
                    console.log("Gridder Inititialized");
                }
                , onExpanded: function (object) {
                    console.log("Gridder Expanded");
                    $(".carousel").carousel();
                }
                , onChanged: function (object) {
                    console.log("Gridder Changed");
                }
                , onClosed: function () {
                    console.log("Gridder Closed");
                }
            });
        });
    </script>
	
<script>
        $(document).ready(function () {

            $('.shw_form').click(function () {
                $(".contact_top ").removeClass("hide_form");
                $(".contact_top").addClass("show_form") && $(".shw_form").addClass("active_btn") && $(".bottom-arrow").addClass("btm_arw_shw") && $(".contact_banner").addClass("bg_shw");
            });
            
        });
    </script>
    <script>
    // document.getElementById("uploadBtn").onchange = function () 
	// {
		// document.getElementById("uploadFile").multiple;
		// document.getElementById("uploadFile").value = this.value;
	
	// };
    </script>	
	
	<script type="text/javascript">
		// function makeFileList() {
			// var input = document.getElementById("filesToUpload");
			// var ul = document.getElementById("fileList");
			// while (ul.hasChildNodes()) {
				// ul.removeChild(ul.firstChild);
			// }
			// for (var i = 0; i < input.files.length; i++) {
				// var li = document.createElement("li");
				// li.innerHTML = input.files[i].name + '<a href="#"pid="'+i+'" class="fa fa-times-circle fa-lg closeBtn" title="remove"></a>';    
				//li.innerHTML="'<span class='fa fa-times-circle fa-lg closeBtn' title='remove'></span>'";
				// ul.appendChild(li);
				
				
			// }							
			// if(!ul.hasChildNodes()) {
				// var li = document.createElement("li");
				// li.innerHTML = 'No Files Selected';
				// ul.appendChild(li);
			// }
			
		// }
		
	</script>
  
  
  <!-------------- script use for multiple file upload ------------------->
  <script>
  jQuery(document).on("change", "#filesToUpload", function() {
	
	
	var session_id = '<?php echo session_id();?>';
	
	var data = new FormData();
	jQuery.each(jQuery('#filesToUpload')[0].files, function(i, file) {
    //data.append('file-'+i, file);
	data.append('file[]', file);
	 
	});
	data.append("session_id", session_id); 
	jQuery.ajax({
    url:"<?php bloginfo('template_url'); ?>/ajax/upload_image.php",
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    type: 'POST',
    success: function(data){
        alert(data);
		jQuery('#fileList').empty().append(data);
    }
});
	
	
	
	
});
  
  </script>
  
  <script>
	jQuery(document).on('click','.closeBtn',function(){
    
			var file_name  = jQuery(this).attr('file_name');
			//alert(file_name);
			var session_id=jQuery(this).attr('session_id');
			//alert(session_id);
			
			var del_id=jQuery(this).attr('del_id');
			//alert(removeLi);
			var removeLi  = "#pid_"+del_id;
			alert(removeLi);
			var data = new FormData();
			data.append("session_id", session_id); 
			data.append("file_name", file_name); 
			
			jQuery.ajax({
			url:"<?php bloginfo('template_url'); ?>/ajax/delete_file.php",
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
				success: function(data)
				{
					alert(data);
					if(data==1){
						jQuery(removeLi).remove();
					}
				}
			});
				 
});
       
  </script>
  
<script>
		(function($){
			$(window).on("load",function(){
				
				$(".resume_info_sec .dropdown-menu").mCustomScrollbar({
					
					theme:"minimal-dark"
				});
		
				
			});
		})(jQuery);
	</script>	
	

<!--****************************** START SCRIPT ADDED BY DEVELOPER  *********************************************-->


<!--script use for add a submenu class-->
<script type="text/javascript">
jQuery(document).ready(function()
{
	jQuery('.sub-menu').addClass("submenu");
});
</script>




<!--****************************** END OF SCRIPT ADDED BY DEVELOPER  *********************************************-->
	

<?php wp_footer(); ?>
</body>
</html>
