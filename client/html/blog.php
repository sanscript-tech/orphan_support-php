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
        if(isset($_POST['submitform'])) {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $tags = $_POST['tags'];
            $title = $_POST['title'];
            $blogArea = $_POST['blogarea'];

            $sql = "INSERT INTO blogs(firstName, lastName, email, tags, title, blogArea) VALUES ('$firstName', '$lastName', '$email', '$tags', '$title', '$blogArea')";
            $result = $db->query($sql);

            if(!$result){
                //error in creating the page;
            }
            else{
            } 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.commonsupport.xyz/2019/loveus/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 16:05:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>LoveUs - Charity and Fundraising HTML Template | Blog Page</title>
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
    <div class="preloader"><div class="icon"></div></div>

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
											<!-- <li><a href="blog-single.html">Blog Single</a></li> -->
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
                <div class="nav-logo"><a href="index-2.html"><img src="../assets/images/logo.png" alt="" title=""></a></div>
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
                <form method="post" action="http://html.commonsupport.xyz/2019/loveus/index.html">
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
        <div class="image-layer lazy-image" data-bg="url('../assets/images/Blog-gallery/blog-main.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Blog Page</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Page</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    
    
    <!-- Blog Gallery section-->
    <div class="container container-custom">
       
            <div class="row">
                            <div class="image-block col-lg-8 col-md-8 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="../assets/images/Blog-gallery/blog1.jpg"  alt=""></figure>
                                    </div>
                          
                                </div>
                            </div>
                             <div class="image-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="../assets/images/Blog-gallery/blog2.jpg"  alt=""></figure>
                                    </div>
                          
                                </div>
                            </div>
                             <div class="image-block col-lg-3 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="../assets/images/Blog-gallery/blog5.jpg"  alt=""></figure>
                                    </div>
                          
                                </div>
                            </div>
                             <div class="image-block col-lg-6 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="../assets/images/Blog-gallery/blog4.jpg"  alt=""></figure>
                                    </div>
                          
                                </div>
                            </div>
                            
                            
                            <div class="image-block col-lg-3 col-md-4 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="../assets/images/Blog-gallery/blog6.jpg"  alt=""></figure>
                                    </div>
                          
                                </div>
                            </div>
                             
                </div>
        </div>
    <!-- End Blog Gallery section-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <!--Blog Posts-->
                    <div class="blog-posts">
                        <div class="row clearfix">
                            <!--News Block-->
                            

                            <?php
                            
                                $sql = 'SELECT * FROM blogs';
                                $result = $db->query($sql);
                                $id = 0;
                                if($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        
                                        $id = $row['id'];
                                        
                                        $sql1 = "SELECT * FROM comment WHERE blogId = '$id'" ;
                                        $result1 = $db->query($sql1);

                                        $count = $result1->num_rows;
                                        echo '<div class="news-block col-lg-4 col-md-6 col-sm-12" id="card-4">';
                                        echo ' <div class="inner-box">';
                                        echo '<div class="image-box">';
                                        echo '<figure class="image"><a href="blog-single.php"><img class="lazy-image" src="../assets/images/Blog-cards/card4.jpg" data-src="../assets/images/Blog-cards/card4.jpg" alt=""></a></figure>';
                                        echo '</div>';
                                        echo '<div class="lower-content">';
                                        echo '<div class="date">9 <span class="month">Mar</span></div>';
                                        echo '<h5> Blog #' . $row['id'] . '</h5>';
                                        echo '<h3><a href="blog-single.html">'. $row['title'] . '</a></h3>';
                                        
                                        echo '<div class="post-meta">';
                                        echo '<ul class="clearfix">';
                                                echo '<li><a href="#"><span class="icon fa fa-user"></span> ' . $row['firstName'] . ' ' . $row['lastName'] . '</a></li>';
                                                echo '<li><a href="#"><span class="icon fa fa-comments"></span>' . $count . ' Comments'. '</a></li>';
                                                echo '<li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>';
                                           echo ' </ul>';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                   // $id = $id + 1;
                                    }
                                    
                                    
                                }
                            ?>
                           
        
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
           <!--            pagination-->
           <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
    </div>
    <!-- choose a blog -->
    
    <div class="container container-custom comment-form default-form ">
           <div class="group-title centered"><h1>Choose a blog ID</h1></div>
            <form action="blog-single.php" method = "post">
                            <div class="row clearfix">
                                
                                <div class="col-md-6 col-sm-12 form-group"><h5>Blog Id</h5>
                                    <input class="container-custom-1" type="number" name="blogId" placeholder="Blog Id" required="">
                                </div>

                                <div class="col-md-12 col-sm-12 form-group centered">
                                    <button class="theme-btn btn-style-one" type="submit" name="readBlog" ><span class="btn-title"> Read Blog </a></span></button>
                                </div>
                            </div>
                </form>
            </div>
    </div>
<!--write a blog-->
       <div class="container container-custom comment-form default-form ">
           <div class="group-title centered"><h1>Write a Blog</h1></div>
            <form action="" method = "post">
                            <div class="row clearfix">
                                
                                <div class="col-md-6 col-sm-12 form-group"><h5>First Name</h5>
                                    <input class="container-custom-1" type="text" name="firstname" placeholder="First Name *" required="">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <h5>Last Name</h5>
                                    <input class="container-custom-1" type="text" name="lastname" placeholder="Last Name *" required="">
                                </div>

                                <div class="col-md-6 col-sm-12 form-group">
                                    <h5>Email-id</h5>
                                    <input class="container-custom-1" type="email" name="email" placeholder="Your Email *" required="">
                                </div>
                                 <div class="col-md-6 col-sm-12 form-group">
                                    <h5>Blog-Tag</h5>
                                   <select class="container-custom-1"  name="tags" class=" form-control-lg">
                                    <option>Children</option>
                                    <option>Family</option>
                                    <option>Education</option>
                                    <option>Happines</option>
                                    <option>Life</option>
                                    <option>Volunteer</option>
                                    
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <h5>Title</h5>
                                    <input class="container-custom-1" type="text" name="title" placeholder="Title *" required="" maxlength="35">
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <h5>Blog-Area</h5>
                                    <textarea class="container-custom-1"  name="blogarea" placeholder="Blog Area" required=""></textarea>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 form-group centered">
                                    <button class="theme-btn btn-style-one" type="submit" name="submitform" onclick = "return mess();"><span class="btn-title">Post Blog</span></button>
                                </div>
                                <br>
                            </div>
                        </form>
    
    </div>

    
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
                                    <a href="index.html"><img class="lazy-image" src="../assets/images/resource/image-spacer-for-validation.png" data-src="images/footer-logo.png" alt="" /></a>
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
<script> 
    function mess() {
        alert('Your Blog is added successfully');
    }
</script>
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

</body>

<!-- Mirrored from html.commonsupport.xyz/2019/loveus/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 16:05:09 GMT -->
</html>