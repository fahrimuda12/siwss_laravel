<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Wishlist</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
        @extends('layout.header')
	<main>
		
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Favorit</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
		
			<div class="isotope-wrapper">
				<div class="row row-cols-3 justify-content-center">
				<div class="item col ">
					<div class="box_grid">
						<figure>
							{{-- <a href="#0" class="wish_bt"></a> --}}
							<a href="{{ route('package-detail') }}">
								<img src="{{ asset("img/Foto Menyusuri Sungai.jpg") }}" class="img-fluid" alt="" width="800" height="533">
								<div class="read_more"><span>Lihat Detail</span>
								</div></a>
						</figure>
						<div class="wrapper">
							<h3><a href="{{ route('package-detail') }}">Paket 1</a></h3>
							<p>Paket 5 orang dengan Jasa Fotografi.</p>
							<span class="price">Mulai <strong>Rp 100.000</strong> /per paket</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1j</li>
							<li>
								<div class="score"><span>Menyenangkan<em>350 Reviews</em></span><strong>4.9</strong>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="item col ">
					<div class="box_grid">
						<figure>
							{{-- <a href="#0" class="wish_bt"></a> --}}
							<a href="{{ route('package-detail') }}">
								<img src="{{ asset("img/Foto Menyusuri Sungai.jpg") }}" class="img-fluid" alt="" width="800" height="533">
								<div class="read_more"><span>Lihat Detail</span>
								</div></a>
						</figure>
						<div class="wrapper">
							<h3><a href="{{ route('package-detail') }}">Paket 2</a></h3>
							<p>Paket 5 orang dengan Jasa Fotografi dan makan.</p>
							<span class="price">Mulai <strong>Rp 175.000</strong> /per paket</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1j 30 m</li>
							<li>
								<div class="score"><span>Seru<em>150 Reviews</em></span><strong>4.5</strong>
								</div>
							</li>
						</ul>
					</div>
				</div>

		<div class="wrapper-grid">
			<div class="row">  
				{{-- @foreach ($wishlists as $wishlist)	
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="box_grid">
							<figure>
								<a href="#0" onclick="unwishlist('{{$wishlist['id']}}')" class="wish_bt liked"></a>
								<a href="{{url('package/'.$wishlist['package_id'])}}"><img src="{{$wishlist['thumbnail']}}" class="img-fluid" alt="" width="800" height="533"></a>
								<div class="read_more"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<h3><a href="{{url('package/'.$wishlist['package_id'])}}">{{$wishlist['package_name']}}</a></h3>
								<p>{{$wishlist['description']}}</p>
								<span class="price">From <strong>{{$wishlist['price']}}</strong> /per person</span>
							</div>
							<ul>
								<li></li>
								<li><div class="score"><span>Superb<em>{{$wishlist['count']}} Reviews</em></span><strong>{{$wishlist['rating']}}</strong></div></li>
							</ul>
						</div>
					</div>
				@endforeach --}}
			</div>
			<!-- /row -->
			</div>
			<!-- /isotope-wrapper -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
	@extends('layout.footer')
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<script>
		function unwishlist(wishlistId) {
			let form = document.createElement("form");

			let csrf = document.createElement("input");
			csrf.setAttribute("type", "hidden");
			csrf.setAttribute("name", "_token");
			csrf.setAttribute("value", "{{ csrf_token() }}");
			form.append(csrf)

			let wishlistIdInput = document.createElement("input");
			wishlistIdInput.setAttribute("type", "hidden");
			wishlistIdInput.setAttribute("name", "wishlist_id");
			wishlistIdInput.setAttribute("value", wishlistId);
			form.append(wishlistIdInput);

			form.style.display = 'none';
			document.body.appendChild(form);

			form.action = "{{url('/wishlist/delete')}}";
			form.method = "POST";
			form.submit();
		}
	</script>
	
	
</body>
</html>