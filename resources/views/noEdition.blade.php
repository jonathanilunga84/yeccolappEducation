<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<head>
		@include('MyInclude.filesCss');
	</head>
</head>
<body>
	<div id="myWrapper" class="wrapper">
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
			@include("MyInclude.headerMenuMobile")
		<!-- /End Il ya un menu pour le pobile ici -->

		<!-- Section nos Edition -->
		<section class="home-three home3-overlay noEdition-bg home3_bgi6M">
			<div class="container"> 
				<div class="row posrM noEdition-row bg-dangerM">
					<div class="col-lg-12">
						<div class="home-textM text-center">
							<h2 class="fz50M color-white">Nos Edition</h2>
						</div>
					</div> 
				</div>
				<!-- div class="row_style">
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
				</div -->
			</div>
		</section>
		<!-- End Section nos Edition -->

		<!-- section images Edition  -->
		<section class="imagesEdition mt-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 bg-successM text-center img-One">
						<img src="{{asset('images/concours-img1.jpeg')}}" class="img-fluid" alt="" />
					</div>
					<div class="col-sm-6 bg-primaryM img-Twee">
						<img src="{{asset('images/concours-img2.jpeg')}}" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</section>
		<!-- End section images Edition  -->

		<!-- section video Edition  -->
		<section class="videoEdition">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 bg-successM text-center">
						<video width="100%" height="100%" preload="metadata" autoplay controls loop><source src="{{asset('images/video/VID-20220226-WA0001.mp4')}}" type="video/mp4"></video>
					</div>
					<div class="col-sm-6 bg-primaryM">
						<video width="100%" height="100%" controls loop><source src="{{asset('images/video/VID-20220226-WA0002.mp4')}}" type="video/mp4"></video>

					</div>
				</div>
			</div>
		</section>
		<!-- End section video Edition  -->



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