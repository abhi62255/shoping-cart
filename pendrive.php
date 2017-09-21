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
		<img src="images/pendrive (1).jpg" alt="First" class="slide" /><!-- slides -->
		<img src="images/pendrive (2).jpg" class="slide" />
		<img src="images/pendrive (3).jpg" alt="Third" class="slide" />
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
<a href="Strontium Ammo 16GB 2.0 USB Pen Drive (Silver).php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;">Strontium Ammo 16GB <br>2.0 USB Pen Drive <br>Silver</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/51sSkMlxqgL.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="SanDisk Cruzer Blade 32GB USB Flash Drive by Copper.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>SanDisk Cruzer Blade <br> 32GB <br>USB Flash Drive</span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/71Q8QsmuSAL._SL1417_.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="SanDisk Ultra Dual 32GB USB 3.0 OTG Pen Drive by SanDisk.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>SanDisk Ultra Dual<br> 32GB USB 3.0 OTG<br> Pen Drive</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/61wwFOWnEGL._SL1500_.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="SanDisk Cruzer Force 16GB USB Flash Drive by MATEL CASING.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>SanDisk Cruzer Force <br>16GB <br>USB Flash Drive</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/61x2-N8ea+L._SL1100_.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a><hr><hr><hr>


<a href="Strontium Nitro Plus OTG Pen Drive, USB3.0, 32GB.php" style="text-decoration:none;">
<div style="background:url(images/blue_color_background_sea_wall_wave_72426_3840x1200.jpg); height:300px; margin-top:-32px;">
	<div style="margin-left:100px; padding-top:100px;">
		<span style="color:#FFFFFF; font-size:30px;"><span>Strontium Nitro Plus <br>OTG Pen Drive USB3.0<br> 32GB</span></span>
	</div>
	<div style=" background-color:#FFFFFF;height: 266px;width: 300px;float: right;margin-right: 120px;margin-top: -170px;border-radius: 5px;">
		<img src="images/61IQNDSjIQL._SL1500_.jpg" height="220px" width="125px " style="margin-left: 90px;margin-top: 24px;">
	</div>

</div></a>
	
	
</body>
</html>