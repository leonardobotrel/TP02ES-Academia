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



	<!-- BANNER -->
	<div class="section banner-page" data-background="images/dummy-img-1920x300.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Modalidades</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Modalidades</li>
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
								<div class="title">Ritmos</div>
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
								<div class="title">Natacao</div>
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
								<div class="title">CROSS FIT</div>
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