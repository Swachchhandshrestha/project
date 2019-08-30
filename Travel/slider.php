<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.or
/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/paragliding-2-1920x900.jpg" alt="" style="
    height: 311px;
" >
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/Kumari-Devi-of-Nepal.jpg" alt="" style="
    height: 311px;
">
			        <div class="caption">
			          	<div>
							<h2></h2>
							<lable></lable>
							<h1></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/03-nepal-rafting.jpg" alt="" style="
    height: 311px;
">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Adventure!!</a></h2>
							<lable></lable>
							<h1><a href="#">See it! Feel it! Love it!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/gosaikunda-lake-trek.jpg" alt="" style="
    height: 311px;
">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">The Destination</a></h1>
							<lable></lable>
							<h2><a href="#">OF YOUR DREAMS</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/mustang-tk-adventure.jpeg" alt="" style="
    height: 311px;
">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Feel Protected</a></h2>
							<lable></lable>
							<h1><a href="#">During your Vacation</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>