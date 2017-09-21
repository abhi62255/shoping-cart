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
		<img src="images/ipod (1).jpg" alt="First" class="slide" /><!-- slides -->
		<img src="images/ipod (2).jpg" class="slide" />
		<img src="images/ipod (3).jpg" alt="Third" class="slide" />
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
<a href="Apple iPod Shuffle MKMJ2HNA 2GB Music Player (Space Grey) by Apple.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;">Apple iPod Shuffle <br> MKMJ2HN/A 2GB Music Player <br>Space Grey</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/21h5V3qDQmL.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="Captcha Green Sports Shuffle Real Aluminium Metal Body Mp3 Audio Music Player With Tf Card Slot (One Year Warranty, Color May Vary) by captcha.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>Captcha Green Sports Shuffle<br> Real Aluminium Metal Body<br> Mp3</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/41X+I8ExTlL.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="Apple 16GB 6th Generation iPod Nano (Space Grey) by Apple.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>Apple 16GB <br>6th Generation iPod Nano <br>Space Grey</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/31mWIbN1qML.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a>



	
	
</body>
</html>