<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<head>
		@include('MyInclude.filesCss');
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
		@include("MyInclude.headerMenu")
		{{-- <header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
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
														<a href="http://yeccolapp.education/apps/Ecole/" target="_blank">Gestion scolaire</a>
													</li>
													<li>
														<a href="#">Yeccolapp Award: Concours F??minin d'eloquence</a>
													</li>
													<li>
														<a href="http://yeccolapp.education/apps/" target="_blank">Pr??visions des mati??res uniformis??es</a>
													</li>
													<li>
														<a href="#formulaireFormation">Formation et sensibilisation Continue (2030)</a>
													</li>
													<!-- 
													<li><a href="#">Yeccolapp Award</a></li>
													<li><a href="#">Cartographie des ??coles</a></li>
													<li><a href="#">Changement de mentalit?? (CCM)</a></li>
													
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
		</header> --}}

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
							    	<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Num??ro de t??l??phone">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
									<a class="tdu text-thm float-right" href="#">Mot de passe oubli?? ?</a>
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
							    	<input type="number" class="form-control" id="exampleInputEmail2" placeholder="Num??ro de t??l??phone">
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
			@include("MyInclude.headerMenuMobile")
			{{-- <div id="page" class="stylehome1 h0">
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
							<a href="http://yeccolapp.education/apps/Ecole/" target="_blank">Gestion scolaire</a>
						</li>
						<li>
							<a href="#">Yeccolapp Award: Concours F??minin d'eloquence</a>
						</li>
						<li>
							<a href="http://yeccolapp.education/apps/" target="_blank">Pr??visions des mati??res uniformis??es</a>
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
			</div> --}}
		<!-- /End Il ya un menu pour le pobile ici -->

		<!-- Home Design -->
		<section class="home-three home3-overlay home3_bgi6">
			<div class="container">
				<div class="row posr">
					<div class="col-lg-12">
						<div class="home-text text-center">
							<h2 class="fz50">Contenus ??ducatifs de qualit?? et uniformis??s pour tout enfant, ??tudiant, enseignants et parents d'??l??ves Congolais et Africain.(ODD-4)</h2>
							<p class="color-white">Yeccolapp "Enseignant du futur"</p>
							<a class="btn home_btn" href="https://yeccolapp.education/app/" target="_blank">Commencer</a>
						</div>
					</div> 
				</div>
				<div class="row_style">
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
				</div>
			</div>
		</section>
		<!-- End Home Design -->

		<!-- Nos Objectif mySlider_responsive -->
		<section>

			<div id="myRow" class="row bg-successM">

				<div class="col-sm-12 order-sm-2M col-md-6 col-lg-5 col-xl-5">
					<div class="row mycarousel bg-successM objectif_slider_home150 owl-carousel owl-themeM owl-loadedM">
						<!-- div class="col-sm-12 col-lg-12 bg-dangerM">					
							<img src="{{asset('images/blog/1.png')}}" class="img-fluid" />
						</div -->

						<div class="col-sm-12 col-lg-12 bg-dangerM">					
							<img src="{{asset('images/blog/yeccolapp pub3.jpg')}}" class="img-fluid" />
						</div>
						<div class="col-sm-12 col-lg-12 bg-dangerM">					
							<img src="{{asset('images/blog/yeccolapp pub 2.jpg')}}" class="img-fluid" />
						</div>						
						<div class="col-sm-12 col-lg-12 bg-dangerM">					
							<img src="{{asset('images/blog/yeccolapp pub4.jpg')}}" class="img-fluid" />
						</div>


						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/2.png')}}" class="img-fluid" />
						</div -->
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/3.png')}}" class="img-fluid" />
						</div -->
						<div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/4.png')}}" class="img-fluid" />
						</div>
						<div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/5.png')}}" class="img-fluid" />
						</div>
						<div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/6.png')}}" class="img-fluid" />
						</div>
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/7.png')}}" class="img-fluid" />
						</div -->
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/8.png')}}" class="img-fluid" />
						</div -->
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/9.png')}}" class="img-fluid" />
						</div -->
						<div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/10.png')}}" class="img-fluid" />
						</div>
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/11.png')}}" class="img-fluid" />
						</div -->
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/12.png')}}" class="img-fluid" />
						</div -->
						<!-- div class="col-sm-12 col-lg-12">					
							<img src="{{asset('images/blog/13.png')}}" class="img-fluid" />
						</div -->
					</div>
				</div>

				<div class="col-sm-12 order-sm-1M col-md-6 col-lg-6 col-xl-6 bg-successM  ">
					<div class="row">
						<div id="blog_objectif" class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
							<img src="{{asset('images/background/ODD4_logo_SC_CD_300.png')}}" class="img-fluidM center-block"/>
						</div>
						<div id="contentObjectif" class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<p class="text-centerM" style="font-weight: bold;">
								A travers nos services, nous r??alisons les Objectifs de d??veloppement durables des Nations Unies pour une ??ducation de qualit?? durable en RD congo et en Afrique.
								<!-- a href="#panelBodyCourseStart" class="accordion-toggle linkM collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" style="color:blue; font-size: 16px;">Lire plus</a -->
							</p>	
							<p>1. L'acc??s de tout enfant Congolais et Africain ?? une ??ducation de qualit?? et sans discrimination (ODD4);
							</p>
							<p>2. Abonnement aux sessions de formation continue certifi??es en alphab??tisation num??rique: "Aucun parent, enseignant analphab??te num??rique d'ici 2030";
							</p>
							<p>3. Mixit?? gar??ons-filles aux m??tiers du futur, Sensibilisation continue des ??l??ves, ??tudiants... ?? l'usage durable des r??seaux sociaux, et ?? la s??curit?? de l'information et des infrastructures.
							</p>						
						</div>
					</div>
	    		</div>
	    	</div>
		</section>
		<!-- /End Objectif -->

		<!-- New formation -->
		<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3" style="background-position: 50% -23.3734px;">
			<div class="container bg-dangerM">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-6 col-lg-6 bg-primaryM offset-lg-2M text-center">
						<div class="divider-one">
							<!-- div class="blog_post_home6 style2 video mb30">
								<div class="bg_img_video_widget h650 thumb">
									<div class="bg-video" style="background-image: url('{{asset('images/gallery/9.jpg')}}');">
										<div class="bt-play text-center"><span class="flaticon-play-button"></span>Preview Video</div>
									</div>
									<div class="video-container">
										<iframe class="w100" height="650px" src="../../embed/oqNZOOWF8qM.html?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
									</div>
								</div>
							</div -->
							<!-- iframe src="{{asset('documents/Flyers A5.pdf')}}" width="100%" height="500px"></iframe --> 

							<div class="row mycarousel bg-successM objectif_slider_home150 owl-carousel owl-themeM owl-loadedM">
								<div class="col-sm-12 col-lg-12 bg-dangerM">					
									<img src="{{asset('images/blog/1blog.png')}}" class="img-fluid" />
								</div>
								<div class="col-sm-12 col-lg-12 bg-dangerM">					
									<img src="{{asset('images/blog/2blog2.png')}}" class="img-fluid" />
								</div>						
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-6 bg-dangerM offset-lg-2M text-center">
						<div class="divider-one">
							<!-- p class="color-white">STARTING ONLINE LEARNING</p -->
							<!-- h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1 -->
							<!-- iframe src="https://docs.google.com/forms/d/e/1FAIpQLScETF-vHZGF0mYv9tqGvsGJhfRUyGRBmS2lTrlMjFC1adW9Lg/viewform?embedded=true" width="640" height="405" frameborder="0" marginheight="0" marginwidth="0">Chargement???</iframe -->
							<!-- a class="btn btn-transparent divider-btn" href="#">Get Started Now</a -->
							<!-- div class="row bg-dangerM" -->
								<form id="formulaireFormation" class="row" action="{{route('SendFormationMail')}}" method="POST">
									@csrf
									<div class="col-lg-12">
										<h4 style="color: #fff; font-weight: bold;">S'inscrire au programme de formation et sensibilisation continue</h4>
									</div>
									<div class="col-sm-12 bg-primaryM">					
										@if(Session::has('SendMail'))
											<span class="bg-primaryM" style="color: #fff">{{Session::get('SendMail')}}</span>
										@endif										
									</div>
									<!-- Step 1 -->
									<div class="col-sm-6 col-md-6 col-lg-6 my_profile_setting_inputM form-group">
										<label for="identite" class="labelColor">Identit??</label>
										<input type="text" name="identite" class="form-control colorFont" id="identite" autocomplete="false" placeholder="Prenom, Postnom, Nom " />
										<!-- ces petit span permet d'afficher le erreur venant du backend -->
										<span class="text-danger error-text nom_error"></span>
									</div>
									<!-- div class="col-lg-6 form-group">
										<label for="postnom" class="labelColor">Postnom</label>
										<input type="text" name="postnom" class="form-control colorFont" id="postnom" />
										<span class="text-danger error-text postnom_error"></span>
									</div -->
									<!-- div class="col-lg-6 form-group">
										<label for="prenom" class="labelColor">Prenom</label>
										<input type="text" name="prenom" class="form-control colorFont" id="prenom" />
										<span class="text-danger error-text prenom_error"></span>
									</div -->
									<!-- Step 2 -->
									<!-- div class="col-lg-6 form-group">
										<label for="nomEcole" class="labelColor">Ecole de l'enfant ou Institution</label>
										<input type="text" name="nomEcole" class="form-control colorFont" id="nomEcole" />
										<span class="text-danger error-text nomEcole_error"></span>
									</div -->
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="telephone" class="labelColor">T??l??phone</label>
										<input type="text" name="telephone" class="form-control colorFont" id="telephone" placeholder="obligatoire" />
										<span class="text-danger error-text telephone_error"></span>
									</div>
									<!-- Step 3 -->
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="email" class="labelColor">Email</label>
										<input type="email" name="email" class="form-control colorFont" id="email" placeholder="facultatif" />
										<span class="text-danger error-text email_error"></span>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="categorie" class="labelColor">Categorie</label>
										<select class="form-control" name="categorie" id="categorie">
											<option value="">S??lectionner</option>
											<option value="Etudiant">Etudiant</option>
											<option value="Parenst d'??l??ve">Parent d'??l??ves</option>
											<option value="Enseignant">Enseignant</option>
											<option value="Autres">Autres</option>
										</select>
										<span class="text-danger error-text categorie_error"></span>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="commune" class="labelColor">Commune</label>
										<input type="text" name="commune" class="form-control colorFont" id="commune" placeholder="commune" />
										<!-- select class="form-control">
											<option value="">S??lectionner</option>
											<option></option>
										</select -->
										<span class="text-danger error-text commune_error"></span>
									</div>
									<!-- Step 4 -->
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="district" class="labelColor">District</label>
										<input type="text" name="district" class="form-control colorFont" id="district" placeholder="district" />
										<!-- select class="form-control">
											<option value="">S??lectionner</option>
											<option></option>
										</select -->
										<span class="text-danger error-text district_error"></span>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="ville" class="labelColor">Ville</label>
										<!-- input type="text" name="ville" class="form-control colorFont" id="ville" placeholder="ville" / -->
										<select class="form-control" name="ville" id="ville">
											<option value="">S??lectionner</option>
											<option value="Kinshasa">Kinshasa</option>
											<option value="Lubumbashi">Lubumbashi</option>
											<option value="Mbujimayi">Mbujimayi</option>
											<option value="Kananga">Kananga</option>
											<option value="Kisangani">Kisangani</option>
											<option value="Bukavu">Bukavu</option>
											<option value="Tshikapa">Tshikapa</option>
											<option value="Kolwezi">Kolwezi</option>
											<option value="Likasi">Likasi</option>
											<option value="Goma">Goma</option>
											<option value="Kikwit">Kikwit</option>
											<option value="Uvira">Uvira</option>
											<option value="Bunia">Bunia</option>
											<option value="Kalemie">Kalemie</option>
											<option value="Mbandaka">Mbandaka</option>
											<option value="Matadi">Matadi</option>
											<option value="Kabinda">Kabinda</option>
											<option value="Butembo">Butembo</option>
											<option value="Baraka">Baraka</option>
											<option value="Mwene-Ditu">Mwene-Ditu</option>
											<option value="Isiro">Isiro</option>
											<option value="Kindu">Kindu</option>
											<option value="Boma">Boma</option>
											<option value="Kamina">Kamina</option>
											<option value="Gandajika">Gandajika</option>
											<option value="Bandundu">Bandundu</option>
											<option value="Gemena">Gemena</option>
											<option value="Kipushi">Kipushi</option>
											<option value="Bumba">Bumba</option>
											<option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
										</select>
										<span class="text-danger error-text ville_error"></span>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 form-group">
										<label for="province" class="labelColor">Province</label>
										<!-- input type="text" name="province" class="form-control colorFont" id="province" placeholder="province" / -->
										<select class="form-control" name="province" id="province">
											<option value="">S??lectionner</option>
											<option value="Kinshsa">Kinshsa</option>
											<option value="Haut-Katanga">Haut-Katanga</option>
											<option value="Kasa?? oriental">Kasa?? oriental</option>
											<option value="Kasa?? central">Kasa?? central</option>
											<option value="Tshopo">Tshopo</option>
											<option value="Sud-Kivu">Sud-Kivu</option>
											<option value="Kasa??">Kasa??</option>
											<option value="Lualaba">Lualaba</option>
											<option value="Haut-Katanga">Haut-Katanga</option>
											<option value="Nord-Kivu">Nord-Kivu</option>
											<option value="Kwilu">Kwilu</option>
											<option value="Ituri">Ituri</option>
											<option value="Tanganyika">Tanganyika</option>
											<option value="Equateur">Equateur</option>
											<option value="Kongo central">Kongo central</option>
											<option value="Lomami">Lomami</option>
											<option value="Haut-Uele">Haut-Uele</option>
											<option value="Maniema">Maniema</option>
											<option value="Kongo central">Kongo central</option>
											<option value="Haut-Lomami">Haut-Lomami</option>
											<option value="Sud-Ubangi">Sud-Ubangi</option>
											<option value="Mongala">Mongala</option>
											<option value="Kongo central">Kongo central</option>
										</select>
										<span class="text-danger error-text province_error"></span>
									</div>
									<div class="col-sm-6 col-md-6 col-sm-12 bg-primary">					
											@if(Session::has('SendMail'))
											<span class="bg-primaryM" style="color: #fff">{{Session::get('SendMail')}}</span>
											@endif										
									</div>
									<div class="col-lg-12">
										<!-- button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span>
										</button -->
										<!-- button type="submit" class="my_setting_savechange_btn btn btn-thm">Save <span class="flaticon-right-arrow-1 ml15"></span>
										</button -->
										<button type="submit" id="BtnSubmitFormation" class="my_setting_savechange_btn btn btn-thm">S'inscrire<span class="flaticon-right-arrow-1 ml15"></span>
										</button>
									</div>
								</form>
							<!-- /div -->
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 bg-dangerM text-center" style="margin-top: 20px;">
						<!-- h4 class="color-white" style="font-weight: bold; margin-bottom: 15px;">Savoir plus sur les conditions de participation</h4 -->
						<div class="divider-one">
							<a class="btn btn-transparent divider-btn" href="{{asset('documents/Bulletin_inscription.pdf')}}" target="_blank" style="margin-right: 10px;">Bulletin d'inscription 2022-2030</a>
							<a class="btn btn-transparent divider-btn" href="{{asset('documents/Conditions_generales_de_participation.pdf')}}" target="_blank">conditions de participation</a>
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
				<div class="row partainer_slider_home150 owl-carousel owl-theme owl-loaded">
					<!-- div class="col-lg-3 myCard bg-dangerM">
						<h1>My Card</h1>
					</div -->
					<div class="col-sm-6 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/1_ITM.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-6 col-md-12 col-lg-12 bg-successM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/2_Untitled-1.png" alt="1.png">
						</div>						
					</div>
					<!-- div class="col-sm-6 col-md-12 col-lg-12 bg-primaryM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/3_Untitled-3.png" alt="1.png">
						</div>						
					</div -->
					<div class="col-sm-6 col-md-12 col-lg-12 bg-primaryM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/logoOkapi.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-6 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/4_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-6 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/5_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-6 col-md-12 col-lg-12 bg-dangerM myCard item">
						<div class="text-center">
							<img class="img-fluid" src="images/partners/6_Untitled-3.png" alt="1.png">
						</div>						
					</div>
					<div class="col-sm-6 col-md-12 col-lg-12 bg-dangerM myCard item">
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
					<!-- div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
						<div class="footer_company_widget home3">
							<h4>YECCOLAPP</h4>
							<ul class="list-unstyled">
								<li><a href="#">A propos</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Devenir enseignant</a></li>
							</ul>
						</div>
					</div -->
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
									<span class="subtitle">T??l??charger maintenant</span>
								</button>
								<button class="play_store_btn btn-dark">
									<span class="icon">
										<span class="flaticon-google-play"></span>
									</span>
									<span class="title">Google Play</span>
									<span class="subtitle">T??l??charger maintenant</span>
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
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
						<div class="footer_social_widget mt15">
							<ul>
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="https://twitter.com/yeccolapp" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="https://www.linkedin.com/in/yeccolapp-mail-b98659232" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
							<p>Copyright Yeccolapp ?? 2021. Tous les droits sont r??serv??s</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Footer Bottom Area -->

		<a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>
	</div>
	<!-- les fichier js principale nous permet beaucoup de choce  -->
	@include('MyInclude.filesJs')
	
	<script>
		$('.mySlider_responsive').slick({
  /*dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 4,*/
   slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 5
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	</script>	
</body>
</html>