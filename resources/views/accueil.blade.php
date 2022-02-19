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

		<link rel="stylesheet" type="text/css" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}" />

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
			         		<!-- li class="list-inline-item"><a href="#" class="btn btn-md"><i class="flaticon-megaphone"></i><span class="dn-md">Become an Instructor</span></a></li --> 
			                <!-- li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter"><i class="flaticon-user"></i> <span class="dn-md">Connexion</span></a></li -->
			            </ul>
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
													<li>
														<a href="http://yeccolapp.education/app/Ecole/">Gestion scolaire</a>
													</li>
													<li>
														<a href="#">Prix excellent Élève 2022</a>
													</li>
													<li>
														<a href="http://yeccolapp.education/app/">Prévisions des matières uniformisées</a>
													</li>
													<li>
														<a href="#formulaireFormation">Formation et sensibilisation Continue (2030)</a>
													</li>
													<!-- 
													<li><a href="#">Yeccolapp Award</a></li>
													<li><a href="#">Cartographie des écoles</a></li>
													<li><a href="#">Changement de mentalité (CCM)</a></li>
													
													<li><a href="#">STEM</a></li>
													<li><a href="#">Cursus scolaire</a></li>
													
													<li><a href="#">Coaching scolaire</a></li>
													<li><a href="#">YeccoTech</a></li>
													<li><a href="#">YeccoBox</a></li>
												-->
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
						<li>
							<a href="http://yeccolapp.education/app/Ecole/">Gestion scolaire</a>
						</li>
						<li>
							<a href="#">Prix excellent Élève 2022</a>
						</li>
						<li>
							<a href="http://yeccolapp.education/app/">Prévisions des matières uniformisées</a>
						</li>
						<li>
							<a href="#formulaireFormation">Formation et sensibilisation Continue (2030)</a>
						</li>
						<!-- li><span>Home</span>
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
						</li -->
						<!-- li><span>Courses</span>
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
						</li -->
						<!-- li><span>Events</span>
							<ul>
								<li><a href="page-event.html">Event List</a></li>
								<li><a href="page-event-single.html">Event Single</a></li>
							</ul>
						</li -->
						<!-- li><span>Pages</span>
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
						</li -->
						<!-- li><span>Blog</span>
							<ul>
								<li><a href="page-blog-v1.html">Blog List 1</a></li>
								<li><a href="page-blog-grid.html">Blog List 2</a></li>
								<li><a href="page-blog-list.html">Blog List 3</a></li>
								<li><a href="page-blog-list2.html">New Blog List 4</a></li>
								<li><a href="page-blog-list3.html">New Blog List 5</a></li>
								<li><a href="page-blog-list4.html">New Blog List 6</a></li>
								<li><a href="page-blog-single.html">Single Post</a></li>
							</ul>
						</li -->
						<!-- li><a href="page-contact.html">Contact</a></li>
						<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
						<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li -->
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
							<h2 class="fz50">Contenus éducatifs de qualité et uniformisés pour tout enfant, étudiant, enseignants et parents d'élèves Congolais et Africain.(ODD-4)</h2>
							<p class="color-white">Yeccolapp "Enseignant du futur"</p>
							<a class="btn home_btn" href="https://yeccolapp.education/app/">Commencer</a>
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
		{{-- <section class="school-category-courses pt30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-2">
						<div class="main-title text-center">
							<h3 class="mt0">Cartographie des écoles repertoriées par provinces.</h3>
							<p>Plus de 5.000.000 d'utilisateurs (Élèves, enseignants et parents) bénéficient des services yeccolapp</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/2.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kinshasa</h5>
									<p>+ 20 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/1.png')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kongo Central</h5>
									<p>+ 30 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/3.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Bandundu</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/4.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kwango</h5>
									<p>+ 30 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/5.jpeg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Equateur</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/6.jpg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Mai-Ndombe</h5>
									<p>+ 20 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/courses/7.jpg')}}');">
							<div class="overlay">
								<div class="details">
									<h5>Kasai-central</h5>
									<p>+ 10 écoles</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="img_hvr_box home3" style="background-image: url('{{asset('images/partners/1_ITM.png')}}');">
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
		</section> --}}
		<!-- End School category courses -->

		<!-- Nos Objectif -->
		<section>
			<div class="row bg-successM">

				<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
					<div class="blog_slider_home1 owl-carousel owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage" style="transform: translate3d(-2820px, 0px, 0px); transition: all 2s ease 0s; width: 4935px;">

								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<!-- div class="post_title">
													Events
												</div -->
												<img class="img-fluid w100" src="{{asset('images/blog/1.png')}}" alt="1a.jpg">
												<!-- a class="post_date" href="#">
													<span>28 <br> March</span>
												</a -->
												<a class="post_date" href="#">
													<span>Elève</span>
												</a>
											</div>
											<div class="details">
												<!-- div class="post_meta">
													<ul>
														<li class="list-inline-item">
															<a href="#">
																<i class="flaticon-calendar"></i> 8:00 am - 5:00 pm
															</a>
														</li>
														<li class="list-inline-item">
															<a href="#">
																<i class="flaticon-placeholder"></i> Vancouver, Canada
															</a>
														</li>
													</ul>
												</div -->
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->
												<!-- h4>Dev Chez Yeccolapp kinshasa</h4 -->										
											</div>
										</div>
									</div>
								</div>	
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/2.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Manager</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->	
												<h5>Chez Yeccolapp</h5>			
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/3.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Elève</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/4.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Okapi</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/5.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Okapi</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/6.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Mwami Africa</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/7.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>Mwami Africa</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/8.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span></span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/9.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span></span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/10.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span></span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/11.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span></span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/12.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span>ODD</span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>
								<div class="owl-item clonedM" style="width: 690px; margin-right: 15px;">
									<div class="item">
										<div class="blog_post one">
											<div class="thumb">
												<img class="img-fluid w100" src="{{asset('images/blog/13.png')}}" alt="1a.jpg">
												<a class="post_date" href="#">
													<span></span>
												</a>
											</div>
											<div class="details">
												<!-- h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4 -->				
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
						<!-- div class="owl-controls">
							<div class="owl-nav">
								<div class="owl-prev" style="">
									<i class="flaticon-left-arrow"></i>
								</div>
								<div class="owl-next" style="">
									<i class="flaticon-right-arrow-1"></i>
								</div>
							</div>
							<div class="owl-dots" style="display: none;">								
							</div>
						</div -->
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 bg-successM  ">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
							<img src="{{asset('images/background/ODD4_logo_SC_CD_300.png')}}" class="img-fluid center-block" />
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<h3 class="text-center" style="font-size:20px;">
								A travers nos services, nous réalisons les Objectifs de développement durables des Nations Unies pour une éducation de qualité durable en RD congo et en Afrique.
								<a href="#panelBodyCourseStart" class="accordion-toggle linkM collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" style="color:blue; font-size: 16px;">Lire plus</a>
							</h3>							
						</div>
					</div>
	    		</div>
	    	</div>
		    
		    <!-- accordion suites Nos Objectifs -->
			<section class="row btn-primaryM" style="padding-top:1px; padding-bottom: 0px;">
				<div class="col-sm-12 col-md-12 col-lg-12 details text-center">
					<div id="accordion" class="panel-group cc_tab">
						<div class="panel bg-dangerM">
							<!-- div class="panel-heading">
								<h4 class="panel-title">
									<a href="#panelBodyCourseStart" class="accordion-toggle link collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Lire plus</a>
								</h4>
							</div -->
							<div id="panelBodyCourseStart" class="panel-collapse collapse" style="">
								<div class="panel-body">
									<p>1. L'accèes de tout enfant Congolais et Africains à une éducation de qualité et sans discrimination (ODD);</p>
									<p>2. Abonnement aux sessions de formation continue certifiée en alphabétisation numérique: "Aucun parent, enseignant analphabéte numérique numérique d'ici 2030";</p>
									<p>3. Mixité garçons-filles aux métiers du futur, Sensibilisation continue des élèves, étudiants... à l'usage durable des réseaux sociaux, et à la sécurité de l'information et des infrastructures.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /accordion suites Nos Objectifs -->
		</section>
		<!-- /End Objectif -->

		<!-- New formation -->
		<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3" style="background-position: 50% -23.3734px;">
			<div class="container bg-dangerM">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-6 col-lg-6 bg-primaryM offset-lg-2M text-center">
						<div class="divider-one">
							<!-- h4 class="color-white" style="font-weight: bold;">FORMATIONS ET SENSIBILISATION CONTINUE MARS 2022</h4 -->
							<!-- h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1 -->
							<!-- p>
								<a href="{{asset('documents/Conditions_generales_de_participation.pdf')}}" style="color: blue;">
									<span class="color-white">Conditions generales des participation à telecharger
									</span>Ici...
								</a>
							</p -->
							<!-- p>
								<a href="{{asset('documents/Bulletin_inscription.pdf')}}" style="color: blue;">
									<span class="color-white">Bullettin d’inscription pour la formation à telecharger </span>Ici...
								</a>
							</p -->
							<!-- a class="btn btn-transparent divider-btn" href="#">Get Started Now</a -->

						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-6 bg-dangerM offset-lg-2M text-center">
						<div class="divider-one">
							<!-- p class="color-white">STARTING ONLINE LEARNING</p -->
							<!-- h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1 -->
							<!-- iframe src="https://docs.google.com/forms/d/e/1FAIpQLScETF-vHZGF0mYv9tqGvsGJhfRUyGRBmS2lTrlMjFC1adW9Lg/viewform?embedded=true" width="640" height="405" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe -->
							<!-- a class="btn btn-transparent divider-btn" href="#">Get Started Now</a -->
							<!-- div class="row bg-dangerM" -->
								<form id="formulaireFormation" class="row" action="{{route('SendFormationMail')}}" method="POST">
									@csrf
									<div class="col-lg-12">
										<h4 style="color: #fff; font-weight: bold;">Inscription en ligne au programme de formation</h4>
									</div>
									<div class="col-sm-12 bg-primaryM">					
										@if(Session::has('SendMail'))
											<span class="bg-primaryM" style="color: #fff">{{Session::get('SendMail')}}</span>
										@endif										
									</div>
									<!-- Step 1 -->
									<div class="col-lg-6 my_profile_setting_inputM form-group">
										<label for="nom" class="labelColor">Nom</label>
										<input type="text" name="nom" class="form-control colorFont" id="nom" autocomplete="false" />
										<!-- ces petit span permet d'afficher le erreur venant du backend -->
										<span class="text-danger error-text nom_error"></span>
									</div>
									<div class="col-lg-6 form-group">
										<label for="postnom" class="labelColor">Postnom</label>
										<input type="text" name="postnom" class="form-control colorFont" id="postnom" />
										<span class="text-danger error-text postnom_error"></span>
									</div>
									<div class="col-lg-6 form-group">
										<label for="prenom" class="labelColor">Prenom</label>
										<input type="text" name="prenom" class="form-control colorFont" id="prenom" />
										<span class="text-danger error-text prenom_error"></span>
									</div>
									<!-- Step 2 -->
									<div class="col-lg-6 form-group">
										<label for="nomEcole" class="labelColor">Ecole de l'enfant ou Institution</label>
										<input type="text" name="nomEcole" class="form-control colorFont" id="nomEcole" />
										<span class="text-danger error-text nomEcole_error"></span>
									</div>
									<div class="col-lg-6 form-group">
										<label for="telephone" class="labelColor">Telephone1 et Telephone2</label>
										<input type="text" name="telephone" class="form-control colorFont" id="telephone" placeholder="telephone1/Telephone2" />
										<span class="text-danger error-text telephone_error"></span>
									</div>
									<!-- Step 3 -->
									<div class="col-lg-6 form-group">
										<label for="email" class="labelColor">Email</label>
										<input type="text" name="email" class="form-control colorFont" id="email" placeholder="facultatif" />
										<span class="text-danger error-text email_error"></span>
									</div>
									<div class="col-lg-6 form-group">
										<label for="commune" class="labelColor">Commune residentielle</label>
										<input type="text" name="commune" class="form-control colorFont" id="commune" placeholder="commune" />
										<span class="text-danger error-text commune_error"></span>
									</div>
									<!-- Step 4 -->
									<div class="col-lg-6 form-group">
										<label for="district" class="labelColor">District</label>
										<input type="text" name="district" class="form-control colorFont" id="district" placeholder="district" />
										<span class="text-danger error-text district_error"></span>
									</div>
									<div class="col-lg-3 form-group">
										<label for="ville" class="labelColor">Ville</label>
										<input type="text" name="ville" class="form-control colorFont" id="ville" placeholder="ville" />
										<span class="text-danger error-text ville_error"></span>
									</div>
									<div class="col-lg-3 form-group">
										<label for="province" class="labelColor">Province</label>
										<input type="text" name="province" class="form-control colorFont" id="province" placeholder="province" />
										<span class="text-danger error-text province_error"></span>
									</div>
									<div class="col-sm-12 bg-primary">					
											@if(Session::has('SendMail'))
											<span class="bg-primaryM" style="color: #fff">{{Session::get('SendMail')}}</span>
											@endif										
									</div>
									<div class="col-lg-12">
										<!-- button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span>
										</button -->
										<!-- button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span>
										</button -->
										<button type="submit" id="BtnSubmitFormation" class="my_setting_savechange_btn btn btn-thm">Enregistrer<span class="flaticon-right-arrow-1 ml15"></span>
										</button>
									</div>
								</form>
							<!-- /div -->
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM text-center" style="margin-top: 20px;">
						<!-- h4 class="color-white" style="font-weight: bold; margin-bottom: 15px;">Savoir plus sur les conditions de participation</h4 -->
						<div class="divider-one">
							<a class="btn btn-transparent divider-btn" href="{{asset('documents/Bulletin_inscription.pdf')}}" style="margin-right: 10px;">Je télécharge le bulletin d'inscription 2022-2030</a>
							<a class="btn btn-transparent divider-btn" href="{{asset('documents/Conditions_generales_de_participation.pdf')}}">Savoir plus sur les conditions de participation</a>
						</div>						
					</div>
				</div>
			</div>
		</section>
		<!-- /End New Formation -->

		<!-- Our PartnersOne -->
		<section class="bg-successM d-flex justify-content-center">
			<div class="container bg-primaryM" style="margin-left: 0; margin-right: 0;">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<!-- h3 class="mt0">Nos partenaires </h3 -->
							<h3 style="font-style: italic;">Ils nous font confiance</h3>
						</div>
					</div>
				</div>
				<div class="row blog_slider_home150 owl-carousel owl-theme owl-loaded">
					<!-- div class="col-lg-3 myCard bg-dangerM">
						<h1>My Card</h1>
					</div -->
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/1_ITM.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-successM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/2_Untitled-1.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-primaryM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/3_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/4_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/5_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/6_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/7.png" alt="1.png">
						</div>						
					</div>
				</div>
			</div>
		</section>
		<!-- End Our PartnersOne -->

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
					<!-- div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_program_widget home3">
							<h4>PROGRAMMES</h4>
							<ul class="list-unstyled">
								<li><a href="#">Eleves</a></li>
								<li><a href="#">Etudiants</a></li>
								<li><a href="#">Professionels</a></li>
							</ul>
						</div>
					</div -->
					<!-- div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_support_widget home3">
							<h4>SUPPORT</h4>
							<ul class="list-unstyled">
								<li><a href="#">Documentation</a></li>
								<li><a href="#">Forums</a></li>
								
							</ul>
						</div>
					</div -->
					<div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
						<div class="footer_apps_widget home3">
							<h4>MOBILE disponible en Mai 2022</h4>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

	<script src="{{asset('styleJs/mainAjax.js')}}" type="text/javascript"></script>
	<script src="{{asset('OwlCarousel2-2.3.4/dist/owl.carousel.js')}}" type="text/javascript"></script>

	<!-- le script ecrit a la mais  -->
	<script type="text/javascript" src="{{asset('styleJs/script.js')}}"></script>
	
	<script>
		
	</script>	
</body>
</html>