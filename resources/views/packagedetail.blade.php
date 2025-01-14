<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Detail Paket</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendors.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

	{{-- <style>
		.hero_in.tours_detail:before {
			background: url( {{$package['heroImage']}} ) center center no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style> --}}

</head>

<body class="datepicker_mobile_full"><!-- Remove this class to disable datepicker full on mobile -->
	
	<div id="page" class="theia-exception">
		
		@extends('layout.header')
	
	<main>
		<section class="hero_in tours_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Detail Paket</h1>
				</div>
				<span class="magnific-gallery">
					{{-- @foreach ($package['packageImages'] as $image)
						@if ($loop->first)
							<a href="{{$image}}" class="btn_photos" title="image {{$loop->index + 1}}" data-effect="mfp-zoom-in">View photos</a>
						@else
							<a href="{{$image}}" title="image {{$loop->index + 1}}" data-effect="mfp-zoom-in"></a>
						@endif
					@endforeach --}}
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Deskripsi</a></li>
						<li><a href="#reviews">Ulasan</a></li>
						<li><a href="#sidebar">Pemesanan</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2>Deskripsi</h2>
							{{-- <p>{{ $package['description'] }}</p> --}}
							<p>Paket 1 merupakan paket yang siap menemani waktu libur anda. paket ini didalamnya terdapat 3 macam fasilitas yaitu perahu, makan, dan fotografer.</p>
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Ulasan</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											{{-- <strong>{{$package['averageRating']}}</strong> --}}
											<strong>4.8</strong>
											<em>Sangat Memuaskan</em>
											{{-- <small>Based on {{$package['ratingCount']}} reviews</small> --}}
											<small>Berdasarkan Ulasan</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													{{-- <div class="progress-bar" role="progressbar" style="width: {{$package["ratingPercentage"]["5"]}}%" aria-valuenow="{{$package["ratingPercentage"]["5"]}}" aria-valuemin="0" aria-valuemax="100"></div> --}}
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 Bintang</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													{{-- <div class="progress-bar" role="progressbar" style="width: {{$package["ratingPercentage"]["4"]}}%" aria-valuenow="{{$package["ratingPercentage"]["4"]}}" aria-valuemin="0" aria-valuemax="100"></div> --}}
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 Bintang</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													{{-- <div class="progress-bar" role="progressbar" style="width: {{$package['ratingPercentage']['3']}}%" aria-valuenow="{{$package['ratingPercentage']['3']}}" aria-valuemin="0" aria-valuemax="100"></div> --}}
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 Bintang</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													{{-- <div class="progress-bar" role="progressbar" style="width: {{$package['ratingPercentage']['2']}}%" aria-valuenow="{{$package['ratingPercentage']['2']}}" aria-valuemin="0" aria-valuemax="100"></div> --}}
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 Bintang</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													{{-- <div class="progress-bar" role="progressbar" style="width: {{$package['ratingPercentage']['1']}}%" aria-valuenow="{{$package['ratingPercentage']['1']}}" aria-valuemin="0" aria-valuemax="100"></div> --}}
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 Bintang</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<hr>

							<div class="reviews-container">
								{{-- @foreach ($package['commentWithInfo'] as $comment)
									<div class="review-box clearfix">
									<figure class="rev-thumb">
										<img src="" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											@for ($i = 0; $i < $comment['star']; $i++)
												<i class="icon_star voted"></i>
											@endfor
											@for ($i = 0; $i < (5 - $comment['star']); $i++)
												<i class="icon_star"></i>
											@endfor
										</div>
										<div class="rev-info">
											{{$comment['author']}} – {{$comment['time']}}:
										</div>
										<div class="rev-text">
											<p>
												{{$comment['text']}}
											</p>
										</div>
									</div>
								</div>
								@endforeach --}}
								<!-- /review-box -->
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>

							<div class="add-review">
								<h5>Tinggalkan Ulasan</h5>
								{{-- <form method="POST" action="{{ url("/package/".$package['id']."/comment") }}">
									@csrf
									@auth
										<input type="hidden" name="userId" value="{{auth()->user()->id}}">
									@endauth
									<input type="hidden" name="packageId" value="{{$package['id']}}"> --}}
									<div class="row">
										<div class="form-group col-md-6">
											<label>Rating</label>
											<div class="custom-select-form">
												<select name="rating_review" id="rating_review" class="wide">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5" selected>5</option>
												</select>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label>Your Review</label>
											<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
										</div>
										<div class="form-group col-md-12 add_top_20">
											@auth
												<button type="submit" class="btn_1" id="submit-review">
													Submit
												</button>
											@endauth

											@guest
												<button class="btn-disabled" id="submit-review" disabled>
													Login First
												</button>
											@endguest
										</div>
									</div>
								{{-- </form> --}}
							</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<form action="{{url('/cart/add')}}" method="POST">
								@csrf
								{{-- <input type="hidden" name="id" value="{{ $package['id'] }}"> --}}
								{{-- <div class="price">
									<span>Rp.{{$package['price']}}<small>/hari</small></span>
									<div class="score"><span>Good<em>{{$package['ratingCount']}} Reviews</em></span><strong>{{$package['averageRating']}}</strong></div>
								</div> --}}
								<div class="form-group input-dates">
									<input class="form-control" type="text" name="dates" placeholder="When..">
									<i class="icon_calendar"></i>
								</div>
								<div class="row">
									<div class="form-group col-6">
										<input type="text" class="form-control" name="from" id="from" placeholder="From">
										<i class="icon_clock time-input-group"></i>
									</div>
									<div class="form-group col-6">
										<input type="text" class="form-control" name="to" id="to" placeholder="To">
										<i class="icon_clock time-input-group"></i>
									</div>
								</div>
								{{-- <div class="form-group">
									<input type="number" name="guest" min="1" placeholder="Guest (max {{$package['maxpeople']}})" max="{{$package['maxpeople']}}" class="form-control">
								</div> --}}
								<button class="btn_1 full-width purchase">PESAN</button>
								{{-- <a href="#0" class="btn_1 full-width outline wishlist" onclick="wishlist('{{$package['id']}}')"><i class="icon_heart"></i> Add to wishlist</a> --}}
								<div class="text-center"><small>Tidak ada uang yang dibebankan pada langkah ini</small></div>
								
							</form>
						</div>
						{{-- <ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul> --}}
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	

	@extends('layout.footer')
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	@extends('layout.signinpop')
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>
	<script>
		function wishlist(packageId) {
			let form = document.createElement("form");

			let csrf = document.createElement("input");
			csrf.setAttribute("type", "hidden");
			csrf.setAttribute("name", "_token");
			csrf.setAttribute("value", "{{csrf_token()}}")
			form.append(csrf);

			let packageIdInput = document.createElement("input");
			packageIdInput.setAttribute("type", "hidden");
			packageIdInput.setAttribute("name", "package_id");
			packageIdInput.setAttribute("value", packageId)
			form.append(packageIdInput);

			form.style.display = 'none';
			document.body.appendChild(form);

			form.action = "{{ url('/wishlist/add') }}";
			form.method = "POST";
			form.submit();
		}
	</script>

	<!-- Map -->
	{{-- <script src="http://maps.googleapis.com/maps/api/js"></script> --}}
	{{-- <script src="{{asset('js/map_single_tour.js')}}"></script> --}}
	{{-- <script src="{{asset('js/infobox.js')}}"></script> --}}
	
	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  parentEl:'.scroll-fix',
		  minDate:new Date(),
		  opens: 'left',
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('YYYY-MM-DD') + ' > ' + picker.endDate.format('YYYY-MM-DD'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
	
	<!-- Timepicker -->
	<script>
		$('#from').datetimepicker({
			datepicker: false,
			format: 'H:i'
		})
		$('#to').datetimepicker({
			datepicker: false,
			format: 'H:i'
		})
	</script>

	<!-- INPUT QUANTITY  -->
	{{-- <script src="{{asset('js/input_qty.js')}}"></script> --}}
	
	<!-- INSTAGRAM FEED  -->
	{{-- <script>
		$(window).on('load', function() {
			"use strict";
			$.instagramFeed({
				'username': 'thelouvremuseum',
				'container': "#instagram-feed",
				'display_profile': false,
				'display_biography': false,
				'display_gallery': true,
				'get_raw_json': false,
				'callback': null,
				'styling': true,
				'items': 12,
				'items_per_row': 6,
				'margin': 1
			});
		});
	</script> --}}
  
</body>
</html>