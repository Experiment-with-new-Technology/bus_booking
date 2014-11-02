<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Rajshahi University of Engineering &amp; Technology</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>

    <script>
	
	$(document).ready(function () {

		//set the default location (fix ie 6 issue)
		$('.lava').css({left:$('span.item:first').position()['left']});
		
		$('.item').mouseover(function () {
			//scroll the lava to current item position
			$('.lava').stop().animate({left:$(this).position()['left']}, {duration:200});
			
			//scroll the panel to the correct content
			$('.panel').stop().animate({left:$(this).position()['left'] * (-2)}, {duration:200});
		});
		
	});
	
	</script>
  
  
</head>
<body>
<div id="main-wraper">
<div id="top-wraper">
<div id="banner"></div>
<div id="nav">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about_ruet.php">About RUET</a></li>
  <li><a href="#">Notice Board</a></li>
  <li><a href="bus.php">Bus Booking</a></li>
  <li><a href="#">FAQ</a></li>
  
</ul>
</div>
</div>
<div id="mid-wraper">
<div class="mid-wraper-top">
<div class="mid-leftouter">
<div class="mid-left-container">
<h1>Welcome to <span class="yellow-heading">RUET</span></h1>
<div style="float:left; margin:8px 10px 5px 0px;"><img src="images/ruet_main_gate.jpg" height="143" width="190"></div>
<p>Rajshahi University of Engineering & Technology is one of the prestigious Universities in
 the Northern part of Bangladesh offering Engineering and Technological 
 education effectively. It was founded in 1964 as a faculty of
 Engineering under the University of Rajshahi providing four years
 Bachelor degree in Civil, Electrical and Electronic and Mechanical Engineering.
However, the institution could not achieve its goal because of the complicated
 management system: The administration was controlled by the Ministry of Education; 
 academic curriculum by the University of Rajshahi and the infrastructural development and 
 maintenance by the Public Works Department. To circumvent the aforesaid problems several 
 committees and commissions were formed since 1973. </p>
 <br>
 <p>On the recommendation of these committees/commissions and having considered the practical aspects, it had been taken a
 historical step to give autonomy to the four Engineering Colleges to make them centers 
 of excellence of technology and formed a 15 member high-powered committee headed by Professor Dr.
 Wahid Uddin Ahmed, the then Vice Chancellor of BUET.Formation of BIT (Bangladesh Institute of Technology)
 and fanally it has turned in to public university, RUET (Rajshahi University of Engineering & Technology) in 2003. <br>
</p>


</div>
<div class="mid-left-container" style="margin-top: 10px;">
<div class="inner-left">
<h2>Upcoming <span class="yellow-heading">Events</span></h2>
<div style="border-right: 1px solid rgb(153, 153, 153); width: 294px; float: left; padding-right: 12px;">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting
industry. Lorem Ipsum has been the industry's standard dummy text ever
since the 1500s, when an unknown printer took.<br>
<br>
</p>
<p>Galley of type and scrambled it to make a type specimen book. It has
survived not only five centuries, but also the leap into electronic
typesetting, remaining.<br>
<br>
</p>
<strong><a href="#" class="read-more">read more...</a></strong></div>
</div>
<div class="inner-right">
<h2>Important <span class="yellow-heading">Information</span></h2>
<div style="width: 290px; float: left; padding-left: 8px;">There are
many variations of passages of Lorem Ipsum available, but the majority
have suffered alteration in some form, by injected humour, or
randomised words which don't look even slightly believable. If you are
going to use a passage of Lorem Ipsum, you need to be sure there isn't
anything embarrassing hidden in the middle of text. you need to be sure
there isn't.<br>
<br>
<strong><a href="#" class="read-more">read more...</a></strong></div>
</div>
</div>
</div>
<div class="right-container">
<div class="right-container-top">
<h3>Notice<span class="yellow-heading"> Board</span></h3>
<div id="moving_tab">
	<div class="tabs">
		<div class="lava"></div>
		<span class="item">Common Notice</span>
		<span class="item">Academic Notice</span>

	</div>
					
	<div class="content">	
<marquee style="font-family:Book Antiqua; color: #FFFFFF" direction="up">	
		<div class="panel">						
			<ul>
				<li><a href='#'>Panel 01 Item 01</a></li>
				<li><a href='#'>Panel 01 Item 02</a></li>
				<li><a href='#'>Panel 01 Item 03</a></li>
				<li><a href='#'>Panel 01 Item 04</a></li>
				<li><a href='#'>Panel 01 Item 05</a></li>
				<li><a href='#'>Panel 01 Item 01</a></li>


			</ul>
			<ul>
				<li><a href='#'>Panel 02 Item 01</a></li>
				<li><a href='#'>Panel 02 Item 02</a></li>
				<li><a href='#'>Panel 02 Item 03</a></li>
				<li><a href='#'>Panel 02 Item 04</a></li>
				<li><a href='#'>Panel 02 Item 05</a></li>	
				<li><a href='#'>Panel 01 Item 01</a></li>
					
			</ul>						
		</div>
		</marquee>

	</div>	
</div>
</div>
<div class="right-container-dwn">
<h4>News and Updates</h4>
<strong>15.04.2010</strong> Lorem Ipsum is simply dummy text of the
printing and typesetting industry. Lorem Ipsum has been. <br>
<br>
<strong>15.04.2010</strong> Lorem Ipsum is simply dummy text of the
printing and typesetting industry. Lorem Ipsum has been.<br>
<br>
<strong><a href="#" class="read-more-right">read more...</a></strong> </div>
</div>
</div>
<div class="mid-wraper-bttm"><img src="images/mid-bttm.jpg" alt=""></div>
</div>
<div class="footer">



<div class="footer-left">&copy; Copyright 2014 © All rights reserved, RUET. Designed by @ Rakib Hasan, CSE-093004, RUET</a>

</div>
</div>
</div>

</body></html>