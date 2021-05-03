<?php
$con = mysqli_connect("localhost","root","","testing");
if($con == false){
	die("error!!".mysqli_connect_error($con));
} 
$messege = mysqli_real_escape_string($con,$_REQUEST['messege']);
$phone_number = mysqli_real_escape_string($con,$_REQUEST['phone']);
$sql = "INSERT INTO contact (messege,phone_number) VALUES ('$messege','$phone_number')";
if(mysqli_query($con,$sql)){
	echo "<div align='center'>your messege was successfully sent to the owner</div>";
}
else{
	echo "failed";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="./ajax-live-search/index.php">Search</a></li>
            <li><a href="books.php">Books</a></li>            
            <li><a href="new_release.php">New Releases</a></li>  
             <li><a href="login.php">logout</a></li>
            <li><a href="contact.php">Contact</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			<a href="subpage.html" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>
            <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<div class="templatemo_content_left_section">
            	<h1>Categories</h1>
                <ul>
                    <li><a href="assamese.php">ASSAMESE</a></li>
                    <li><a href="politics.php">POLITICAL SCIENCE</a></li>
                    <li><a href="cs.php">COMPUTER SCIENCE</a></li>
                    <li><a href="hs.php">HISTORY</a></li>
                    <li><a href="prg.php">PROGRAMMING</a></li>
            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Bestsellers</h1>
                <ul>
                    <li><a href="./books/Mossad.pdf">MOSSAD OPERATION</a></li>
                    <li><a href="./books/Arthashastra_of_Chanakya_-_English.pdf">Arthasastra_chanakya</a></li>
                    <li><a href="./books/Dr.B.R.Ambedkar-TheMakerofModernIndia.pdf">DR. BR AMBEDKAR</a></li>
                    <li><a href="./books/choices.pdf">Choices</a></li>
                    
            	</ul>
            </div>
            
            <div class="templatemo_content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>Photography lighting secrets <span>(by Michael Allen)</span></h1>
                
   	      <img src="images/templatemo_image_01.jpg" alt="image" />
                <div class="product_info">
                	<p>"simple techniques for- available light, natural light and halo light"</p>
                  <h3>Rs.0</h3>
                    <div class="buy_now_button">

                        <a href="./books/pht.pdf">Buy Now</a></div>
                    <div class="detail_button"><a href="./books/pht.pdf">Free</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Cooking basic for dummies! <span>(by Bryan miller)</span></h1>
       	    <img src="images/templatemo_image_02.jpg" alt="image" />
                <div class="product_info">
                	<p>Making everything easier</p>
                    <h3>Rs.0</h3>
                    <div class="buy_now_button"><a href="./books/ck.pdf">Buy Now</a></div>
                    <div class="detail_button"><a href="./books/ck.pdf">Free</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Teaching organic farming<span>(by Martha brown)</span></h1>
   	      <img src="images/templatemo_image_03.jpg" alt="image" />
                <div class="product_info">
                	<p>organic farming and the gardening skill.</p>
                    <h3>$0</h3>
                    <div class="buy_now_button"><a href="./books/to.pdf">Buy Now</a></div>
                    <div class="detail_button"><a href="to.pdf">Free</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            
            <div class="templatemo_product_box">
            	<h1>Networking<span>(by Doug Lowe)</span></h1>
            	<img src="images/templatemo_image_04.jpg" alt="image" />
                <div class="product_info">
                	<p>Beginers guide</p>
                    <h3>$0</h3>
                    <div class="buy_now_button"><a href="./books/Networking.pdf">Buy Now</a></div>
                    <div class="detail_button"><a href="./books/Networking.pdf">Free</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_height">&nbsp;</div>
            
            <a href="subpage.html"><img src="images/templatemo_ads.jpg" alt="ads" /></a>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="index.html">Home</a> | <a href="./ajax-live-search/index.php">Search</a> | <a href="books.php">Books</a> | <a href="new_release.pdf">New Releases</a> | <a href="#">FAQs</a> | <a href="contact.php">Contact Us</a><br />
        Copyright © 2020 <a href="#"><strong></strong></a> | 	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>