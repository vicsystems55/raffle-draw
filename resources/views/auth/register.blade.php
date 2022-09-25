<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Purchase Ticket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/animate.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/icofont.min.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/swiper.min.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/lightcase.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{config('app.url')}}raffle/assets/css/style.min.css">

</head>

<body>
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

	<!-- ==========shape image Starts Here========== -->
	<div class="body-shape">
		<img src="assets/images/shape/body-shape.png" alt="shape">
	</div>
	<!-- ==========shape image end Here========== -->




	<!-- ==========Header Section Starts Here========== -->
	<header class="header-section">
		<div class="container">
			<div class="header-holder d-flex flex-wrap justify-content-between align-items-center">
				<div class="brand-logo d-none d-lg-inline-block">
					<div class="logo">
						<a href="index.html">
							<img src="{{config('app.url')}}raffle/assets/images/logo/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="header-menu-part">
					<div class="header-top d-none">
						<div class="header-top-area">
							<ul class="left">
								<li>
									<i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
								</li>
								<li>
									<i class="icofont-location-pin"></i> Beverley, New York 224 USA
								</li>
							</ul>
							<ul class="social-icons d-flex align-items-center">
								<li>
									<a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
								</li>
								<li>
									<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
								</li>
								<li>
									<a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
								</li>
								<li>
									<a href="#" class="skype"><i class="icofont-skype"></i></a>
								</li>
								<li>
									<a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="header-bottom">
						<div class="header-wrapper justify-content-lg-end">
							<div class="mobile-logo d-lg-none">
								<a href="index.html"><img src="{{config('app.url')}}raffle/assets/images/logo/logo.png" alt="logo"></a>
							</div>
							<div class="menu-area">
								<ul class="menu">
									
									<li><a href="contact.html">Home</a></li>
                                    <li><a href="contact.html">Raffle Tickets</a></li>

								</ul>
								<a href="" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
								<a href="" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span></a>

								<!-- toggle icons -->
								<div class="header-bar d-lg-none">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="ellepsis-bar d-lg-none">
									<i class="icofont-info-square"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<!-- ==========Header Section Ends Here========== -->



	<!-- ===========Banner Section start Here========== -->
	<section class="pageheader-section " style="background-image: url(assets/images/pageheader/bg.jpg);">
		<div class="container">
            <div class="section-wrapper text-center text-uppercase">
                <h2 class="pageheader-title">Registration Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Registration</li>
                    </ol>
                </nav>
            </div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->



	<!-- Login Section Section Starts Here -->
    <div class="login-section  padding-bottom">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">PURCHASE RAFFLE TICKETS</h3>
                <p>Note raffle tickets will be sent to your email. Make sure to supply a valid email. Good Luck!!</p>
                <form method="post" action="{{route('register_lottery')}}" class="account-form text-start">
					@csrf
                    <div class="form-group">
						<label>Fullname:</label>
                        <input type="text" placeholder="Fullname" name="name">
                    </div>
                    			
				
					<div class="form-group">
						<label>Address:</label>
                        <input type="text" placeholder="Enter address" name="address">
                    </div>
					
				
                    <div class="form-group">
						<label>Email:</label>
                        <input type="text" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
						<label>Number of tickets: </label>
                        <input type="number" placeholder="" value="1" name="no_tickets">
                    </div>
                    
                    <div class="number-group">
						<label>Phone Number:</label>
						<select class="form-select"  aria-label="Default select example">
							<option selected>+234</option>
							{{-- <option value="1">+88</option>
							<option value="2">+99</option>
							<option value="3">+77</option> --}}
						</select>
                        <input type="text" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="d-block default-button"><span>PROCEED TO PAYMENT</span></button>
                    </div>
                </form>
                <div class="account-bottom d-none">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
                    <ul class="match-social-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                        <li><a href="#"><img src="assets/images/match/social-1.png" alt="vimeo"></a></li>
                        <li><a href="#"><img src="assets/images/match/social-2.png" alt="youtube"></a></li>
                        <li><a href="#"><img src="assets/images/match/social-3.png" alt="twitch"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->




	<!-- ================ footer Section start Here =============== -->
    <footer class="footer-section" style="background-image: url(assets/images/footer/bg.jpg);">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/01.png" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Phone Number : +88012 345 678 912</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/02.png" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Email : youremail@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/03.png" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Address : 30 North West New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-top padding-bottom">
            <div class="container">
                <div class="row padding-lg-top">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title mb-4">
                                    <img src="{{config('app.url')}}raffle/assets/images/logo/logo.png" alt="logo">
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4">Upropriate brand economca sound technolog after covalent technology enable prospective wastng markets whereas propriate and brand economca sound technolog</p>
									<ul class="match-social-list d-flex flex-wrap align-items-center">
										<li><a href="#"><img src="assets/images/match/social-1.png" alt="vimeo"></a></li>
										<li><a href="#"><img src="assets/images/match/social-2.png" alt="youtube"></a></li>
										<li><a href="#"><img src="assets/images/match/social-3.png" alt="twitch"></a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0 d-none">
                                <div class="fm-item-title">
                                    <h4>Top jackpot games</h4>
                                </div>
                                <div class="fm-item-content">
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"> <img src="assets/images/footer/01.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                            </div>
                                            <div class="lab-content">
                                                <a href="blog-single.html"><h6>free Poker Game</h6></a>
                                                <p>Poker: <b>$230</b></p>
												<div class="rating">
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src="assets/images/footer/02.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                            </div>
                                            <div class="lab-content">
                                                <a href="blog-single.html"><h6>CLUB Poker Game</h6></a>
                                                <p>Poker: <b>$290</b></p>
												<div class="rating">
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src="assets/images/footer/03.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                            </div>
                                            <div class="lab-content">
                                                <a href="blog-single.html"><h6>ROYAL Poker Game</h6></a>
                                                <p>Poker: <b>$330</b></p>
												<div class="rating">
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
													<i class="icofont-ui-rating"></i>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>Our Newsletter</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p>Casina esports organization supported by community leaders</p>
                                    <form>
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
										<button type="submit" class="default-button"><span>Send Massage <i class="icofont-circled-right"></i></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2022 <a href="index.html">Reliance Coop.</a> - All Rights Reserved. Developed by <a href="">vicSystems </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ footer Section end Here =============== -->







	<!-- All Needed JS -->
	<script src="{{config('app.url')}}raffle/assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/circularProgressBar.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/isotope.pkgd.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/swiper.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/lightcase.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/waypoints.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/wow.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/plugins.js"></script>
	<script src="{{config('app.url')}}raffle/assets/js/main.js"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>



</body>

</html>