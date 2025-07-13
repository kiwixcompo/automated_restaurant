	<footer id="footer" class="dark-zone">
			
		<div id="fmodules" class="wrap">


			<div class="module fmodule col-module col-module-last">
				<div>
					<h3>We accept all cards</h3>
					<p><img src="demo_images/credit-cards.png" class="left" style="margin: 0 15px 15px 0;" />
					No cash? No problem! You won't have to wash dishes.</p>
				</div>
			</div>
			
			<div class="clear"></div>
		</div><!-- end fmodules -->
					
		<div id="footer-info">
			<div class="wrap relative">
				
				
									
				
				
			</div>
		</div><!-- end footer-info -->
		
	</footer><!-- end footer -->
	
	
	<script src="js/jquery.colorbox-min.js"></script>
	<script src="js/jquery.validity.pack.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>
	
	<script>
	jQuery(function(){
		captions();
		zebratables();
		hoverTables();
		pullquote();

		jQuery("a[rel*='lightbox']").colorbox({
			'opacity' : .5
		});

		jQuery.validity.setup({ outputMode:"modal" });
		
		var form = jQuery('form.form-validate');
		if( form.length > 0 ){
			// A general validation for forms
			form.validity(function(){
				jQuery('input.required').require();
				jQuery('textarea.required').require();
				jQuery('input[type="email"]').require().match('email');
				jQuery('input.required[type="url"]').require().match('url');
				jQuery('input[type="password"]').equal();
			});
		};
		userLinks();
		fades();
		inputValues();
	});
	
	jQuery(window).load(function(){
	
		jQuery('#slider').nivoSlider({
			effect : 			'fade',
			animSpeed : 		500, 	// Slide transition speed
			pauseTime : 		3000, 	// How long each slide will show
			captionOpacity : 	0.8, 	// Universal caption opacity
			prevText : 			'', 	// Prev directionNav text
			nextText : 			'', 	// Next directionNav text
			controlNav : 		false 	// 1,2,3... navigation
		});
	});
	</script>

	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
	  
	  </script>

	  <script>
		/*$(document).ready(function(){
			$("#checkAll").click(function() {
				$(".checkbox").attr("checked", "checked");

			});
		});*/

		function selectFunction (checkall,field)
			{
			    if(checkall.checked==true){
			        for (i = 0; i < field.length; i++)
			            field[i].checked = true ;
			    }else{
			        for (i = 0; i < field.length; i++)
			            field[i].checked = false ;
			    }
			}

	  </script>
	

</script>

<style>
/* Improve jQuery UI datepicker visibility */
.ui-datepicker {
    z-index: 9999 !important;
    background: #fff !important;
    border: 2px solid #009879 !important;
    font-size: 1.1em !important;
    box-shadow: 0 4px 16px rgba(0,0,0,0.2);
}
.ui-datepicker-calendar td a {
    color: #009879 !important;
    font-weight: bold;
    background: #e6f9f4 !important;
    border-radius: 4px;
}
.ui-datepicker-calendar td a.ui-state-active {
    background: #009879 !important;
    color: #fff !important;
}
</style>

</body>
</html>