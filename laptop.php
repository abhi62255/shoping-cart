<?php


?>
<html>
<head>
	<title>test</title>
	<style>
		html,body {
	margin: 0;
	padding: 0;
}
.slider {
	margin: 2em auto;
	
}

.slider-wrapper {
	width: 100%;
	height: 300px;
	position: relative;
}

.slide {
	float: left;
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}

	</style>
</head>
<body bgcolor="#CCCCCC">
<div style="background-color:#FFFFFF; height:100px; margin-top:0px;">
		<div style="float:left;">
			<img src="images/fellowship-amazon-logo.png"  align="left" align="top" height="100" width="200"/>
		</div>
		<div style="float: right;height: 40px;margin-top: 55px;margin-right: 5px;">
			<h3 align="right" style="margin-right:10px; font-weight:bold;">Welcome Mr. Abhishek  &nbsp;&nbsp;&nbsp;<a href="home.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Home&nbsp;&nbsp;&nbsp;</a> <a href="cart.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Cart&nbsp;&nbsp;&nbsp;</a>  <a href="logout.php" style="text-decoration:none; color:#0066FF; font-weight:bold;">Log Out</a></h3>
		</div>	
	</div>
<div>
	<div class="slider" id="main-slider" style="margin-top:0px;"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="images/laptop (1).jpg" alt="First" class="slide" /><!-- slides -->
		<img src="images/laptop (2).jpg" class="slide" />
		<img src="images/laptop (3).png" alt="Third" class="slide" />
	</div>
	</div>	
	<script>
		(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();

	</script>
</div>
<a href="Apple MacBook Pro MJLQ2HNA 15-inch Laptop  by MacSafe.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;">Apple MacBook Pro MJLQ2HN/A <br>15-inch Laptop<br> (Core i7/16GB/256GB/Mac OS<br>Integrated Graphics)</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -202px;border-radius: 5px;">
		<img src="images/71UqSAcUeaL._SL1500_.jpg" height="220px" width="300px " style="margin-left: 0px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="Apple MacBook Pro MLW72HNA Laptop 2016 Silver by Apple.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>Apple MacBook Pro MLW72HN/A Laptop 2016<br> (Core i7-2.6GHz/16GB/256GB/MacOS Sierra<br>2GB Graphic/Touch Bar)<br>Silver</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -202px;border-radius: 5px;">
		<img src="images/41q0Oprn2IL.jpg" height="220px" width="300px " style="margin-left: 0px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="Omen by HP - AX250TX - 15.6-inch Laptop Black With  MS Office 2016 H & S edition by HP.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>Omen by HP<br> AX250TX <br>15.6-inch Laptop</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -174px;border-radius: 5px;">
		<img src="images/71XKYg966RL._SL1500_.jpg" height="220px" width="300px " style="margin-left: 0px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="HP Pavilion17 17.3 Inches Laptop,Silver by AC Adapter Included.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>HP Pavilion17 <br>17.3 Inches Laptop<br>(i7-6700HQ Quad Core/16 GB RAM/2 TB, 128 GB<br>Windows 10/Nvidoa),Silver</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -202px;border-radius: 5px;">
		<img src="images/4169WgIpMvL.jpg" height="220px" width="300px " style="margin-left: 0px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="HP Pavilion 15-ab522TX 15.6-inch Laptop Natural Silver by HP.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>HP HP Pavilion 15-ab522TX 15.6-inch Laptop<br> (Core i5 6200U/8 GB/1TB/Windows 10<br> Home/4GB Graphics)<br> Natural Silver</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -202px;border-radius: 5px;">
		<img src="images/41U6lfvHZDL.jpg" height="220px" width="300px " style="margin-left: 0px;margin-top: 24px;">
	</div>

</div></a>
	
	
</body>
</html>