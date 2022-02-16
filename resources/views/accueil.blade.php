<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
		<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
		<meta name="CreativeLayers" content="ATFN">
		<!-- css file -->
		<link rel="stylesheet" href="{{asset('styleCss/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('styleCss/style.css')}}">
		<!-- Responsive stylesheet -->
		<link rel="stylesheet" href="{{asset('styleCss/responsive.css')}}">
		<!-- Title -->
		<title>Yeccolab</title>
		<!-- Favicon -->
		<link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
		<link href="{{asset('images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" -->
		<link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">

	</head>
</head>
<body>
	<div class="wrapper">
		<div class="preloader"></div>

		<div class="header_top home3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-xl-5">
						<ul class="home3_header_top_contact pull-left">
							
						</ul>
					</div>
					<div class="col-lg-7 col-xl-7">
				        <ul class="sign_up_btn pull-right dn-smd mt15 home3">
			                <!-- <li class="list-inline-item"><a href="#" class="btn btn-md"><i class="flaticon-megaphone"></i><span class="dn-md">Become an Instructor</span></a></li> -->
			                <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter"><i class="flaticon-user"></i> <span class="dn-md">Connexion</span></a></li>
			            </ul><!-- Button trigger modal -->
					</div>
				</div>
			</div>
		</div>

		<!-- Main Header Nav -->
		<header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
			<div class="container-fluid">
		    	<!-- Ace Responsive Menu -->
			    <nav>
			        <!-- Menu Toggle btn-->
			        <div class="menu-toggle">
			            <img class="nav_logo_img img-fluid" src="images/header-logo3.png" alt="header-logo3.png">
			            <button type="button" id="menu-btn">
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			        <a href="#" class="navbar_brand float-left dn-smd">
			            <!-- img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png" -->
			            <!-- img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png" -->
			            <span class="">Yeccolapp</span>
			        </a>
			        <!-- Responsive Menu Structure-->
			        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
					<div class="ht_left_widget home3 float-left">
						<ul>
							<li class="list-inline-item">
								<div class="header_top_lang_widget">
									<div class="ht-widget-container">
										<div class="vertical-wrapper">
											<h2 class="title-vertical home3">
												<span class="text-title">Menu</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
											</h2>
											<div class="content-vertical">
												<ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
													<li><a href="#">Comptes écoles</a></li>
													<li><a href="#">Branches par option</a></li>
													<li><a href="#">Yeccolapp Award</a></li>
													<li><a href="#">Cartographie des écoles</a></li>
													<li><a href="#">Changement de mentalité (CCM)</a></li>
													<li><a href="#">Prévisions des matières uniformisées</a></li>
													<li><a href="#">STEM</a></li>
													<li><a href="#">Cursus scolaire</a></li>
													<li><a href="#">Formation et sensibilisation aux TIC</a></li>
													<li><a href="#">Coaching scolaire</a></li>
													<li><a href="#">YeccoTech</a></li>
													<li><a href="#">YeccoBox</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="list-inline-item dn-1366">
								
							</li>
			                <li class="list-inline-item list_s dib-1366 dn">
			                	<div class="search_overlay home3">
								  	<a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
								    	<span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
								  	</a>
								</div>
			                </li>
						</ul>
					</div>
			    </nav>
		    	<!-- End of Responsive Menu -->
			</div>
		</header>

		<!-- Modal Create Compte And Connexion -->
		<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  		<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Connexion</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inscription</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="#">
								<div class="heading">
									<h3 class="text-center">Connexion</h3>
									<p class="text-center">Vous n'avez pas de compte ? <a class="text-thm" href="#">Inscrivez-vous</a></p>
								</div>
								 <div class="form-group">
							    	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Numéro de téléphone">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
									<a class="tdu text-thm float-right" href="#">Mot de passe oublié ?</a>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Connexion</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Creer un nouveau compte</h3>
								<p class="text-center">Vous avez un compte ? <a class="text-thm" href="#">Connexion</a></p>
							</div>
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="pR2NOM">
								</div>
								 <div class="form-group">
							    	<input type="number" class="form-control" id="exampleInputEmail2" placeholder="Numéro de téléphone">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmez le mot de passe">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">Devenir instructeur ?</label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">S'inscrire</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  		</div>
		</div>
		<!-- End Modal Create Compte And Connexion -->

		<!-- Modal Search Button Bacground Overlay -->
    	<div class="search_overlay dn-992">
			<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
			    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
			    <div id="mk-fullscreen-search-wrapper">
			      <form method="get" id="mk-fullscreen-searchform">
			        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
			        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
			      </form>
			    </div>
			</div>
		</div>
		<!-- End Modal Search Button Bacground Overlay  -->

		<!-- Il ya un menu pour le pobile ici voir ligne 219 du template -->
			<!-- Main Header Nav For Mobile -->
			<div id="page" class="stylehome1 h0">
				<div class="mobile-menu">
					<div class="header stylehome1">
						<div class="main_logo_home2">
							<img class="nav_logo_img img-fluid float-left mt20" src="{{asset('images/header-logo.png')}}" alt="header-logo.png">
							<span>Yeccolapp</span>
						</div>
						<ul class="menu_bar_home2">
							<li class="list-inline-item">
								<div class="search_overlay">
									<a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
										<div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
									</a>
									<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
										<a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
										<div id="mk-fullscreen-search-wrapper2">
											<form method="get" id="mk-fullscreen-searchform2">
												<input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
												<i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
											</form>
										</div>
									</div>
								</div>
							</li>
							<li class="list-inline-item"><a href="#menu"><span></span></a></li>
						</ul>
					</div>
				</div><!-- /.mobile-menu -->
				<nav id="menu" class="stylehome1">
					<ul>
						<li><span>Home</span>
							<ul>
								<li><a href="index.html">Home 1</a></li>
								<li><a href="index2.html">Home 2</a></li>
								<li><a href="index3.html">Home 3</a></li>
								<li><a href="index4.html">Home 4</a></li>
								<li><a href="index5.html">Home 5</a></li>
								<li><a href="index6.html">Home - University</a></li>
								<li><a href="index7.html">Home College</a></li>
								<li><a href="index8.html">Home Kindergarten</a></li>

								<li><span>Update New Homepages</span>
									<ul>
										<li><a href="index9.html">New Home 01</a></li>
										<li><a href="index10.html">New Home 02</a></li>
										<li><a href="index11.html">New Home 03</a></li>
										<li><a href="index12.html">New Home 04</a></li>
										<li><a href="index13.html">New Home 05</a></li>
									</ul>
								</li>

							</ul>
						</li>
						<li><span>Courses</span>
							<ul>
								<li><span>Courses List</span>
									<ul>
										<li><a href="page-course-v1.html">Courses v1</a></li>
										<li><a href="page-course-v2.html">Courses v2</a></li>
										<li><a href="page-course-v3.html">Courses v3</a></li>
									</ul>
								</li>
								<li><span>Courses Single</span>
									<ul>
										<li><a href="page-course-single-v1.html">Single V1</a></li>
										<li><a href="page-course-single-v2.html">Single V2</a></li>
										<li><a href="page-course-single-v3.html">Single V3</a></li>
										<li><a href="page-course-single-v4.html">New Single V4</a></li>
										<li><a href="page-course-single-v5.html">New Single V5</a></li>
										<li><a href="page-course-single-v6.html">New Single V6</a></li>
										<li><a href="page-course-single-v7.html">New Single V7</a></li>
									</ul>
								</li>
								<li><a href="page-instructors.html">Instructors</a></li>
								<li><a href="page-instructors-single.html">Instructor Single</a></li>
							</ul>
						</li>
						<li><span>Events</span>
							<ul>
								<li><a href="page-event.html">Event List</a></li>
								<li><a href="page-event-single.html">Event Single</a></li>
							</ul>
						</li>
						<li><span>Pages</span>
							<ul>
								<li><span>Shop Pages</span>
									<ul>
										<li><a href="page-shop.html">Shop</a></li>
										<li><a href="page-shop-single.html">Shop Single</a></li>
										<li><a href="page-shop-cart.html">Cart</a></li>
										<li><a href="page-shop-checkout.html">Checkout</a></li>
										<li><a href="page-shop-order.html">Order</a></li>
									</ul>
								</li>
								<li><span>User Admin</span>
									<ul>
										<li><a href="page-dashboard.html">Dashboard</a></li>
										<li><a href="page-my-courses.html">My Courses</a></li>
										<li><a href="page-my-order.html">My Order</a></li>
										<li><a href="page-my-message.html">My Message</a></li>
										<li><a href="page-my-review.html">My Review</a></li>
										<li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
										<li><a href="page-my-listing.html">My Listing</a></li>
										<li><a href="page-my-setting.html">My Setting</a></li>
									</ul>
								</li>
								<li><a href="page-about.html">About Us</a></li>
								<li><a href="page-gallery.html">Gallery</a></li>
								<li><a href="page-gallery2.html">Video Gallery</a></li>
								<li><a href="page-faq.html">Faq</a></li>
								<li><a href="page-login.html">LogIn</a></li>
								<li><a href="page-login2.html">New LogIn V2</a></li>
								<li><a href="page-login3.html">New LogIn V3</a></li>
								<li><a href="page-login4.html">New LogIn V4</a></li>
								<li><a href="page-register.html">Register</a></li>
								<li><a href="page-pricing.html">Membership</a></li>
								<li><a href="page-error.html">404 Page</a></li>
								<li><a href="page-terms.html">Terms and Conditions</a></li>
								<li><a href="page-become-instructor.html">Become an Instructor</a></li>
								<li><a href="page-ui-element.html">UI Elements</a></li>
							</ul>
						</li>
						<li><span>Blog</span>
							<ul>
								<li><a href="page-blog-v1.html">Blog List 1</a></li>
								<li><a href="page-blog-grid.html">Blog List 2</a></li>
								<li><a href="page-blog-list.html">Blog List 3</a></li>
								<li><a href="page-blog-list2.html">New Blog List 4</a></li>
								<li><a href="page-blog-list3.html">New Blog List 5</a></li>
								<li><a href="page-blog-list4.html">New Blog List 6</a></li>
								<li><a href="page-blog-single.html">Single Post</a></li>
							</ul>
						</li>
						<li><a href="page-contact.html">Contact</a></li>
						<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
						<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
					</ul>
				</nav>
			</div>
		<!-- /End Il ya un menu pour le pobile ici -->

		<!-- Home Design -->
		<section class="home-three home3-overlay home3_bgi6">
			<div class="container">
				<div class="row posr">
					<div class="col-lg-12">
						<div class="home-text text-center">
							<h2 class="fz50">Contenus éducatifs de qualité et uniformisés pour tout enfant congolais, enseignant et parents d'élèves.</h2>
							<p class="color-white">Yeccolapp "appui à la réforme du système éducatif congolais"</p>
							<a class="btn home_btn" href="#">Commencer</a>
						</div>
					</div>
				</div>
				<div class="row_style">
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
				</div>
			</div>
		</section>
		<!-- End Home Design -->

		<!-- School category courses -->
		<section class="school-category-courses pt30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="mt0">Cartographie des écoles repertoriées par provinces.</h3>
							<p>Plus de 5.000.000 d'utilisateurs (Élèves, enseignants et parents) bénéficient des services yeccolapp</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/2.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kinshasa</h5>
									<p>+ 20 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/1.png')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kongo Central</h5>
									<p>+ 30 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/3.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Bandundu</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/4.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kwango</h5>
									<p>+ 30 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/5.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Equateur</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/6.jpg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Mai-Ndombe</h5>
									<p>+ 20 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/7.jpg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kasai-central</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/8.jpg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Autres</h5>
									<p>+ 50 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-6 offset-lg-3">
						<div class="courses_all_btn home3 text-center">
							<a class="btn btn-transparent" href="#">View All Courses</a>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- End School category courses -->

		<!-- New formation -->
		<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3" style="background-position: 50% -23.3734px;">
			<div class="container bg-dangerM">
				<div class="row align-items-center">
					<div class="col-lg-4 bg-primaryM offset-lg-2M text-center">
						<div class="divider-one">
							<h4 class="color-white" style="font-weight: bold;">FORMATIONS ET SENSIBILISATION CONTINUE MARS 2022</h4>
							<!-- h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1 -->
							<p>
								<a href="{{asset('documents/Conditions générales de participation.pdf')}}" style="color: blue;">
									<span class="color-white">Conditions generales des participation à telecharger
									</span>Ici...
								</a>
							</p>
							<p>
								<a href="{{asset('documents/Bulletin_inscription.pdf')}}" style="color: blue;">
									<span class="color-white">Bullettin d’inscription pour la formation à telecharger </span>Ici...
								</a>
							</p>
							<!-- a class="btn btn-transparent divider-btn" href="#">Get Started Now</a -->
						</div>
					</div>

					<div class="col-lg-8 bg-dangerM offset-lg-2M text-center">
						<div class="divider-one">
							<!-- p class="color-white">STARTING ONLINE LEARNING</p -->
							<!-- h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1 -->
							<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScETF-vHZGF0mYv9tqGvsGJhfRUyGRBmS2lTrlMjFC1adW9Lg/viewform?embedded=true" width="640" height="405" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
							<!-- a class="btn btn-transparent divider-btn" href="#">Get Started Now</a -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /End New Formation -->

		<!-- Our Partners -->
		<section id="our-partners" class="our-partners bg-dangerM">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="mt0">Nos partenaires</h3>
						</div>
					</div>
				</div>
				<div class="row owl-carousel owl-theme">
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/1.png" alt="1.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/2.png" alt="2.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/3.png" alt="3.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/4.png" alt="4.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/5.png" alt="5.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/6.png" alt="6.png">
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg item">
						<div class="our_partner">
							<img class="img-fluid" src="images/partners/7.JPG" style="height: auto; width: auto;" alt="7.JPG">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Partners -->


		<!-- Our Footer -->
		<section class="footer_one home3">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
						<div class="footer_contact_widget home3">
							<h4>CONTACT</h4>
							<p>infos@yeccolapp.education</p>
							<p>Mobile : (+243) 81 86 23 548</p>
							
							<p></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_company_widget home3">
							<h4>YECCOLAPP</h4>
							<ul class="list-unstyled">
								<li><a href="#">A propos</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="http://yeccolapp.education/beta/page-contact.html">Contact</a></li>
								<li><a href="#">Devenir enseignant</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_program_widget home3">
							<h4>PROGRAMMES</h4>
							<ul class="list-unstyled">
								<li><a href="#">Eleves</a></li>
								<li><a href="#">Etudiants</a></li>
								<li><a href="#">Professionels</a></li>
								<!-- <li><a href="#">Self-Driving Car</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_support_widget home3">
							<h4>SUPPORT</h4>
							<ul class="list-unstyled">
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Forums</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
						<div class="footer_apps_widget home3">
							<h4>MOBILE</h4>
							<div class="app_grid">
								<button class="apple_btn btn-dark">
									<span class="icon">
										<span class="flaticon-apple"></span>
									</span>
									<span class="title">App Store</span>
									<span class="subtitle">Télécharger maintenant</span>
								</button>
								<button class="play_store_btn btn-dark">
									<span class="icon">
										<span class="flaticon-google-play"></span>
									</span>
									<span class="title">Google Play</span>
									<span class="subtitle">Télécharger maintenant</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Footer -->

		

		<!-- Our Footer Middle Area -->
		<section class="footer_middle_area home3 p0">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
						<div class="logo-widget home3">
							<!-- img class="img-fluid" src="images/header-logo3.png" alt="header-logo3.png" -->
							<span>YECCOLAPP</span>
						</div>
					</div>
					<div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right home3">
						<div class="footer_menu_widget home3">
							<ul>
								<li class="list-inline-item"><a href="#">Accueil</a></li>
								<li class="list-inline-item"><a href="#">Conditions d'utilisations</a></li>
								<li class="list-inline-item"><a href="#">Confidentialité</a></li>
								<li class="list-inline-item"><a href="#">Sitemap</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
						<div class="footer_social_widget mt15">
							<ul>
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Footer Middle Area -->

		<!-- Our Footer Bottom Area -->
		<section class="footer_bottom_area home3 pt30 pb30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="copyright-widget text-center">
							<p>Copyright Yeccolapp © 2021. Tous les droits sont réservés</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Footer Bottom Area -->

		<a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>
	</div>
	<!-- les fichier js principale nous permet beaucoup de choce  -->
	<script type="text/javascript" src="{{asset('styleJs/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/jquery-migrate-3.0.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/bootstrap.min.js')}}"></script>
	<!-- End les fichier js principale nous permet beaucoup de choce  -->
	<script type="text/javascript" src="{{asset('styleJs/jquery.mmenu.all.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/ace-responsive-menu.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/bootstrap-select.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/isotop.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/snackbar.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/simplebar.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/parallax.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/scrollto.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/jquery-scrolltofixed-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/jquery.counterup.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/progressbar.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/slider.js')}}"></script>
	<script type="text/javascript" src="{{asset('styleJs/timepicker.js')}}"></script>
	<!-- Custom script for all pages --> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- le script ecrit a la mais  -->
	<script type="text/javascript" src="{{asset('styleJs/script.js')}}"></script>
	<script>
		$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay: true,
    autoplayTimeout: 2000,
    stagePadding: 150,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
	</script>	
</body>
</html>