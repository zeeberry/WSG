<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="With Style and Grace is an online jewelry store established in New York and inspired on the designs of it's founder Grace Gallo">
		<meta name="keywords" content="With Style and Grace, Style and Grace,Fashion jewelry, Jewelry, Pearls, pearl necklace, cultured clearwater pearls, clearwater pearls, Pearl jewelry, online jewelry store, pearl store">
        
		<link href="lib/style1.css" rel="stylesheet" type="text/css" />
		<link href="lib/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="lib/default.css" rel="stylesheet"  type="text/css" media="screen" />

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
		<script type="text/javascript" src="lib/js/jquery.nivo.slider.pack.js" ></script>
		
		<script type="text/javascript" src="lib/js/navClick.js"></script>
		
		<script type="text/javascript">
			$(window).load(function() {
    			$('#slider').nivoSlider({
					effect: 'fade',
					pauseTime: 3000
					
				});
				
			});

		</script>
	
		
		<title>With Style and Grace</title>
    
	
	</head>
    <body oncontextmenu="alert('Content is protected'); return false;">

		<div id="header">
		</div> <!-- end #header -->

		<div id="wrapper">
		
		<div id="menu_wrapper">
			<?php include('includes/nav.php'); ?>
		</div> <!-- end #nav -->
		
		<div id="content">
		
		<img src="imgsite/thescroll.jpg" width="900" height="37">
		
			<div class="slider-wrapper theme-default">
    			<div class="ribbon"></div>
  				  <div id="slider" class="nivoSlider">
						<img src="imgsite/slide1.jpg"/>
						<img src="imgsite/slide2.jpg"/>
						<img src="imgsite/slide3.jpg"/>
						<img src="imgsite/slide4.jpg"/>
					</div>
					
			</div>
			
 				<div class="featBox">
 					<a href="19.php"><img src="imgsite/feat_img/feat2.jpg"></a>
 					<div class="text">
 					White Pearls and Crystals<br><br>

 					<div class="price">$425</div>
 					</div>
       		 	</div>
			
 				<div class="featBox">
 					<a href="19.php"><img src="imgsite/feat_img/feat3.jpg"></a>
 					<div class="text">
 					White Scatter Pearl Necklace<br><br>

					<div class="price">$245</div> 
 					</div>
       		 	</div>
       		 	<div class="featBox">
 					<a href="19.php"><img src="imgsite/feat_img/feat1.jpg"></a>
 					<div class="text">
 					Pearl Drop Necklace<br><br>
					<div class="price">$105 </div>
 					</div>
       		 	</div>

			<div id="facebook">
				<p>
				<a href="http://www.facebook.com/withstyleandgrace" title="Like us on Facebook"><img src="imgsite/Facebooklogopic.png" width="40" height="40" alt="" /></a>
				<a href="http://www.facebook.com/withstyleandgrace" title="Like us on Facebook"><img src="imgsite/likefb.png" width="200" height="25" alt="" /></a>
					
			</div>
		</div> <!-- end #content -->

		<div id="footer">
			<?php include('includes/footer.php'); ?>
		</div> <!-- end #footer -->

 	 </div> <!-- End #wrapper -->
	
    </body>
</html>
