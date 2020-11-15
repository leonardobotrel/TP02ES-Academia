@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Profile')


@section('content_header')

@endsection


@section('content')

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			            	<li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          HOME
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="index.html">Home Version 1</a>
	          						<a class="dropdown-item" href="index-2.html">Home Version 2</a>
							    </div>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="about.html">ABOUT US</a>
			                </li>
			                <li class="nav-item active">
			                    <a class="nav-link" href="classes.html">CLASSES</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="trainers.html">TRAINERS</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="gallery.html">GALLERY</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="page-news.html">BLOG</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.html">CONTACT</a>
			                </li>
			                
			            </ul>
			            <div class="sosmed-icon float-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
						</div>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">CLASSES</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Classes</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

    <!-- CLASS -->
	<div id="classes" class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">BODY BUILDING CLASSES</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> 15:00 PM</div>
									<div class="col"><i class="fa fa-calendar-o"></i>Mon, Sun, Wed, Fri</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">GYM CLASSES</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> 15:00 PM</div>
									<div class="col"><i class="fa fa-calendar-o"></i>Mon, Sun, Wed, Fri</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">SPINNING</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> 15:00 PM</div>
									<div class="col"><i class="fa fa-calendar-o"></i>TODOS OS DIAS</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Item 4 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">MUSCULACAO</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> HORARIO LIVRE</div>
									<div class="col"><i class="fa fa-calendar-o"></i>TODOS OS DIAS</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Item 5 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">AEROBICS CLASSES</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> 15:00 PM</div>
									<div class="col"><i class="fa fa-calendar-o"></i>Mon, Sun, Wed, Fri</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Item 6 -->
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="rs-class-box mb-5">
							<div class="media-box">
								<img src="images/dummy-img-600x500.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-box">
								<div class="title">BOXING CLASSES</div>
								<div class="detail">
									<div class="col"><i class="fa fa-clock-o"></i> 15:00 PM</div>
									<div class="col"><i class="fa fa-calendar-o"></i>Mon, Sun, Wed, Fri</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section bgi-cover-center" data-background="images/dummy-img-1920x900-3.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
						<div class="text-center">
							<h2 class="text-primary"><em>GET FIT IN LESS 2 WEEKS WITH FITX</em></h2>
							<p class="mb-5">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius impedit enim tempor sapien</p>
							<a href="#" class="btn btn-primary">CONTACT NOW</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer"  data-background="images/dummy-img-1920x900.jpg">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="text-center">
							<img src="images/logo.png" alt="" class="mb-5"><br>
							<div class="sosmed-icon d-inline-flex">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-pinterest"></i></a> 
								<a href="#"><i class="fa fa-linkedin"></i></a> 
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2020 &copy; <span class="color-primary">Propositus</span>. Designed by <span class="color-primary">Marcos & Leonardo.</span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush