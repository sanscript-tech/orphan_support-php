<?php
    session_start();
  
   $serverName = 'localhost';
   $userName = 'root';
   $passWord = 'Debmukh@2206';
   $dbName = 'orphansupport';
   
   $db = new mysqli($serverName, $userName, $passWord, $dbName);
   if ($db->connect_error) {
       //throw an error if generated while establishing the connection with the dataBase
       die('Connect Error: ' . $db->connect_error);
   }
   else {
        if(isset($_POST['comment'])) {
        
            $blogId   = $_SESSION['blogId'];
            $userName = $_POST['username'];
            $email    = $_POST['email'];
            $message  = $_POST['message'];

            $sql = "INSERT INTO comment (blogId, userName, email, msg) VALUES ('$blogId', '$userName', '$email', '$message')";
            $result = $db->query($sql);

            if(!$result) {
                    // entry into the database failed 
                //  echo "<h1>" . "UNSUCESSFUL" . "</h1>";
            }
            else {
            //  echo "<h1>" . "ENTRY INTO THE DATABASE SUCESSFUL" . "</h1>";
            
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.commonsupport.xyz/2019/loveus/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 16:05:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>LoveUs - Charity and Fundraising HTML Template | Blog Details</title>
<!-- Stylesheets -->
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="../assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="../assets/css/color.css" rel="stylesheet">

<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"><div class="icon"></div></div> -->

    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
				<div class="inner clearfix">
                    <div class="top-left">
                        <ul class="social-links clearfix">
                            <li class="social-title">Follow Us:</li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
    
                    <div class="top-right">
                        <ul class="info clearfix">
                            <li class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button></li>
                            <li><a href="tel:12345615523"><span class="icon fa fa-phone-alt"></span> Call: &nbsp;123 4561 5523</a></li>
                            <li><a href="mailto:info@templatepath.com"><span class="icon fa fa-envelope"></span> Email: &nbsp;info@loveuscharity.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html" title="LoveUs - Charity and Fundraising HTML Template"><img src="../assets/images/LOGO/logo-16.png" alt="LoveUs - Charity and Fundraising HTML Template" title="LoveUs - Charity and Fundraising HTML Template"></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
                                            <li><a href="index-5.html">Home page 04</a></li>
                                            <li><a href="index-6.html">Home page 05</a></li>
                                            <li><a href="index-7.html">Home page 06</a></li>
                                            <li><a href="index-8.html">Home page 07</a></li>
                                            <li><a href="index-9.html">Home page 08</a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="about.html">About</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
											<li><a href="services.html">Our Services</a></li>
                                            <li><a href="volunteers.html">Our Volunteers</a></li>
											<li><a href="faq.html">Faq's</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="causes.html">Causes</a>
                                        <ul>
                                            <li><a href="causes.html">Causes</a></li>
											<li><a href="cause-single.html">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="donate.html">Pages</a>
                                        <ul>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="event-single.html">Event Details</a></li>
											<li><a href="portfolio.html">Portfolio</a></li>
                                            <li class="dropdown"><a href="shop.html">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Products</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="donate.html">Make Donation</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="blog.php">Blog</a>
                                        <ul>
                                            <li><a href="blog.php">Our Blog</a></li>
											<!-- <li><a href="blog-single.php">Blog Single</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <div class="link-box clearfix">
                        	<div class="donate-link"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                            <div class="cart-link"><a href="shopping-cart.html" class="theme-btn"><span class="icon flaticon-paper-bag"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="../assets/images/LOGO/logo-18.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="../assets/images/favicon.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>


    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('../assets/images/Blog-gallery/blog-main3.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Blog Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    
    <!--Sidebar Page Container-->
    
    <div class="sidebar-page-container">
        <div class="auto-container ">
            <div class="row clearfix">

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12  ">
                    <!--Blog Posts-->
                    <!-- <div class="blog-post-detail">
                        <div class="inner">
                        	<div class="post-meta">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 3 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                            <h2>Raise Fund for Healthy Food</h2>
                            
                            <div class="content">
                                <p class="big-text">Cupidatat non proident sunt culpa qui officia deserunt mollit anim idest laborum sed ux perspiciatis unde omnis iste natuserror sit voluptatem accusantium. dolore laudantium totam rem aperiam eaque.</p>
                                
                               
                             
                                <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.</p>
                                <br>
                                <h3>Startups Are Still</h3>
                                <p>Mollit anim id est laborum perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam volupe.</p>
                                <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi sed nesciunt. neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit quia non numquam eius modi tempora incidunt ut labore.</p>
                            </div>
                        </div> -->
                        <?php
                           
                            require_once('/opt/lampp/htdocs/orphan_support-php/config.php');
                        
                           
                                if(isset($_POST['readBlog'])) {
                                    $id = $_POST['blogId'];
                                    $_SESSION['blogId'] = $id;
                                    echo "<h1>Blog #" . $_SESSION['blogId'] . "</h1>"; 
                                    $id = $_SESSION['blogId'];
                                    $sql = "SELECT * FROM blogs WHERE id = '$id'";
                                    
                                    $result = $db->query($sql);

                                    if($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                            echo '<div class = "blog-post-detail"';
                                            echo '<div class = "content">';
                                            echo '<p><h1><b>' . $row['title'] . '</b></h1></p>';
                                            echo '<p><h4>' . $row['blogArea'] . '</h4></p>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                }
                            
                            
                        ?>
                        
                        <!-- <div class="post-share-options clearfix">
                            <div class="pull-left">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="#">Children</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                </ul>                               
                            </div> -->
                            <div class="post-share-options clearfix">
                            <div class="social-links pull-right">
                                <p>Share:</p>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                            </div>

                    </div>
                    
                    <!-- Comments Area -->
<!--                    
                    <div class="comments-area">
                        <div class="group-title"><h3>Comments</h3></div>
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image" src="../assets/images/resource/image-spacer-for-validation.png" data-src="../assets/images/resource/author-thumb-1.jpg" alt=""></div>  -->
                                <!-- <div class="comment-info">
                                    <h4 class="name">Hanson Deck</h4>
                                    <div class="time">November 7, 2020 at 1:44 pm</div>
                                </div>
                                <div class="text">Great Job man</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div> --> 

                        <!-- </div> -->

                        <!-- <div class="comment-box reply-comment">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image" src="../assets/images/resource/image-spacer-for-validation.png" data-src="../assets/images/resource/author-thumb-2.jpg" alt=""></div> 
                                <div class="comment-info">
                                    <h5 class="name">Norman Gordon</h5>
                                    <div class="time">October 7, 2019 at 12:26 am</div>
                                </div>
                                <div class="text">Amazing Thought</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div>
                        </div>

                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img class="lazy-image" src="../assets/images/resource/image-spacer-for-validation.png" data-src="../assets/images/resource/author-thumb-3.jpg" alt=""></div> 
                                <div class="comment-info">
                                    <h4 class="name">Jake Weary</h4>
                                    <div class="time">November 16, 2019 at 10:14 pm</div>
                                </div>
                                <div class="text">Nice Thought</div>
                                <a href="#" class="reply-btn"><span class="arrow_back"></span> Reply</a>
                            </div>
                        </div>
                    </div> -->
                    
                    <!--Comment Form-->
                   
                    <div class="container comment-form default-form container-custom">
                        <div class="group-title centered"><h2>Leave a Thought !</h2></div>

                        <form id = "frm-comment">
                            <div class="row clearfix">
                               
                                <div class="col-md-6 col-sm-12 form-group">
                                <!-- <input type="hidden" name="comment_id" id="commentId" placeholder="Name" > -->
                                <input type="hidden" name="comment_id" id = "commentId" placeholder = "Name"><input  class="container-custom-1"
                    type="text" name="name" id="name" placeholder="Name" required = "">
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment">  </textarea>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 form-group centered">
                                <input type = "button" class="theme-btn btn-submit" id="submitButton"
                 value = "Publish" onclick = "postReply(0)"><div id="comment-message"><span class="btn-title"></span>
                                </div>
                                <br>
                            </div>
                        </form>
                            <div id = "output"></div>
                       
                       
           
                    </div>
                    
                    <!-- comment form -->
                   
                    
                </div>
                

            </div>
        </div>
    </div>


    <!-- End Sidebar Page Container -->


    
	<!-- Main Footer -->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
                        	<div class="widget-content">
                                <div class="footer-logo">
                                    <a href="index-2.html"><img class="lazy-image" src="../assets/images/resource/image-spacer-for-validation.png" data-src="images/footer-logo.png" alt="" /></a>
                                </div>
                                <div class="text">This Orphan Support site is a non-profit initiative, by Team Sanscript, and is developed under Autumn of Open Source (AOS). Our name "Sanscript" was inspired by ancient Indian language named "Sanskrit", and our goal is about spreading positivity with technologies and being an ever growing open source community. Follow our community to stay up-to-date with our other such initiatives.</div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://facebook.com/sanscriptindia"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="https://mobile.twitter.com/Sanscriptindia"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://www.linkedin.com/company/sanscript"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="https://www.instagram.com/sanscriptindia/"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="https://www.youtube.com/channel/UC4kapSYmu_pLVy7zIWSwRYw"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget links-widget">
							<div class="widget-content">
								<h3>Services</h3>
                                <ul>
                                    <li><a href="#">Donate</a></li>
                                    <li><a href="#">Sponsor</a></li>
                                    <li><a href="#">Fundraise</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                    <li><a href="#">Partner</a></li>
                                    <li><a href="#">Jobs</a></li>
                                </ul>
							</div>	
						</div>
					</div>
					
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget info-widget">
							<div class="widget-content">
								<h3>Contact Us</h3>
								<ul class="contact-info">
                                	<li><i class="fa fa-map-marker"></i>West Bengal, North-24-Parganas, India</li>
                                    <li><a href="tel:"></a></li>
                                    <li><a href="mailto:help@sanscript.tech">help@sanscript.tech</a></li>
                                </ul>
							</div>	
						</div>
					</div>
                    
                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<div class="widget-content">
                                <ul class="pt-md-5">
                                    <li><a href="https://www.sanscript.tech/terms and conditions.html">Terms &amp; Conditions</a></li>
                                    <li><a href="https://www.sanscript.tech/privacy.html">Privacy &amp; Policy</a></li>
                                    <li><a href="https://www.sanscript.tech/disclaimer.html">Disclaimer</a></li>
                                </ul>
							</div>	
						</div>
					</div>
					
				</div>
                
                <div class="nav-box clearfix">
                	<div class="inner clearfix">
                    	<ul class="footer-nav clearfix">
                        	<li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        
                        <div class="donate-link"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                    </div>
                </div>
                
			</div>
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				
				<!--Scroll to top-->
				<div class="clearfix">
                	<div class="copyright">Sanscript &copy; 2020. All Right Reserved.</div>
                    <ul class="bottom-links">
                    	<li><a href="https://www.sanscript.tech/terms and conditions.html">Terms of Service</a></li>
                        <li><a href="https://www.sanscript.tech/privacy.html">Privacy Policy</a></li>
                    </ul>
				</div>
			</div>
		</div>
		
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
<script src="jquery-3.2.1.min.js"></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/jquery.fancybox.js"></script>
<script src="../assets/js/owl.js"></script>
<script src="../assets/js/appear.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/lazyload.js"></script>
<script src="../assets/js/scrollbar.js"></script>
<script src="../assets/js/script.js"></script>


<script>
    
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    var comments = "<div class='comment-box'><div class='comment'> <h4 class='name'><div class='comment-info'>" + data[i]['comment_sender_name'] + 
    "</h4><div class='time'>" + data[i]['date'] + "</div></div><div class='text'>" + data[i]['comment'] + "<div><a class='btn-reply' onclick='postReply(" + commentId + ")'>Reply</a></div>" + " </div></div></div>" ;

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>" + "<div><class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+"</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
</script>


</body>

<!-- Mirrored from html.commonsupport.xyz/2019/loveus/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 16:05:09 GMT -->
</html>
