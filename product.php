<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/favicon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://app.snipcart.com" />
	<link rel="preconnect" href="https://cdn.snipcart.com" />

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/reset1.css">
	<link href="assets/css/style1.css" rel="stylesheet">
	<!-- Resource style -->
	<script src="assets/js/modernizr.js"></script>
	<title>Products</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Lato&family=Nunito&family=Playfair+Display:ital@1&family=Prata&family=Raleway:ital,wght@1,100&family=Roboto&family=Roboto+Condensed&family=Teko&display=swap');

	.snipcart-checkout {
		font-family: Roboto, sans-serif;
		font-weight: 0;
		font-size: 14px;
		color: #fff;
		background-color: #0066CC;
		padding: 5px 20px;
		border: 2px solid #0066cc;
		box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
		border-radius: 20px;
		transition: 1000ms;
		transform: translateY(0);
		display: flex;
		flex-direction: row;
		align-items: center;
		cursor: pointer;
		float: right;
		margin: 5px;
	}

	.snipcart-checkout:hover {
		border: solid 2px #0066cc;
		background-color: #5482d0;
	}

	.snipcart-add-item {
		background: linear-gradient(to right, #196BCA, #6433E0);
		background-color: #196BCA;
		color: #fff;
		font-family: Tahoma;
		font-size: 13px;
		font-weight: 800;
		font-style: normal;
		text-decoration: none;
		padding: 5px 12px;
		border: 0px solid #000;
		border-radius: 21px;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 5px;
	}

	.snipcart-add-item span {
		margin-right: 12px;
		display: block;
		width: 27px;
		height: 27px;
		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAMAAADDpiTIAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAABgIAAAYCAGI6z6gAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAwBQTFRF////AAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACAAACfCZLHQAAAP90Uk5TAAECAwQF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);
		background-repeat: no-repeat;
		background-size: contain;
		transform: rotate(0deg);
	}

	.snipcart-add-item:hover {
		background: linear-gradient(to right, #5482d0, #7d5ee3);
		background-color: #5482d0;
	}

	.snipcart-add-item:active {
		transform: scale(0.95);
	}
	.mix{
	margin: 2%;
	}
</style>

<body>
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="logo"></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto" href="index.html">Home</a></li>
					<li><a class="nav-link scrollto active" href="product.php">Products</a></li>
					<li><a class="nav-link scrollto" href="pre_built.html">Pre built PC</a></li>
					<li><a class="nav-link scrollto" href="pc_create.html">PC builder</a></li>
					<li><a class="nav-link scrollto" href="blog.html">Guide</a></li>
					<li><a class="nav-link scrollto" href="about_us.html">About us</a></li>
					<li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
					<button class="snipcart-customer-signin getstarted scrollto" style="background-color: rgba(240, 255, 255, 0); max-height: 40px;"><i class="ri-login-box-line" style="font-size: 10px;"></i>My account</button>
					<button class="snipcart-checkout">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1
                                    .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5
                                    0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61
                                    2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313
                                    7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0
                                    0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1
                                    0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="white"></path>
						</svg>
						<span class="snipcart-total-price" class="snipcart-checkout">$0.00</span>
					</button>

			</nav>
			<!-- .navbar -->
			<i class="bi bi-list mobile-nav-toggle"></i>
		</div>
	</header>
	<!-- End Header -->
	<section id="hero" class="d-flex align-items-center" style="height:80px">

		<div class="container">


	</section>
	<div class="background"></div>
	<main class="cd-main-content " style="overflow-y:scroll">
		<div class="cd-tab-filter-wrapper" style="height: 50px;">

			<ul class="cd-filters">

				<div class="cd-filter-content" style="display: inline-flexbox;text-align: center;margin-left:60px;">

					<i class="bi-search"></i> <input type="search" placeholder="Try intel... " style="border: gray 2px;height: 40px;background-color: azure;margin: 5px;min-width: 200px;border-radius: 10px;">
				</div>
			</ul>
			<!-- cd-filters -->

			<!-- cd-tab-filter -->

		</div>
		<!-- cd-tab-filter-wrapper -->
		<section class="cd-gallery products">
			<ul>

				<?php
				// Connect to the database
				$conn = mysqli_connect('localhost', 'root', '', 'product');

				// Check if the database connection was successful
				if (!$conn) {
					die("Database connection failed: " . mysqli_connect_error());
				}

				// Retrieve product information from the database
				$sql = "SELECT * FROM product";
				$result = mysqli_query($conn, $sql);

				// Display product images with links to the product detail page
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {

						echo "<li class='mix " . $row['product_cat'] . " " . $row['product_name'] . "' id='cart_item'>";
						echo "<a href='product_detail.php?id=" . $row['product_id'] . "'><img src='" . $row['product_image'] . "' alt='" . $row['product_name'] . "'></a>";
						echo "<div>" . $row['product_name'] . "</div>";
						echo "<div class='price'>$";
						echo "<div class='xd'>" . $row['product_price'] . "</div></div>";
						echo "<br><button class='snipcart-add-item' data-item-id='" . $row['product_id'] . "' data-item-price='" . $row['product_price'] . "' data-item-description='" . $row['product_description'] . "' data-item-image='" . $row['product_image'] . "' data-item-name='" . $row['product_name'] . "'><span></span>Add to cart</button>";
						echo "</li>";
					}
				} else {
					echo "No products found.";
				}

				mysqli_close($conn);
				?>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section>

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">

					<div class="cd-filter-content">
						<h4>Catagory</h4>
						<div class="cd-select cd-filters">

							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an option</option>
								<option value=".CPU">CPU</option>
								<option value=".GPU">GPU</option>
								<option value=".MotherBoard">Motherboard</option>
								<option value=".RAM">RAM</option>
								<option value=".Storage">Storage</option>
								<option value=".ps">Power Supply</option>
								<option value=".fan">Fan</option>
								<option value=".cooler">Cooler</option>
								<option value=".case">Cases</option>
								<option value=".acc">accessories</option>

							</select>
						</div>
					</div>
				</div>
				<div class="cd-filter-block">
					<h4>product brand</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".INTEL" type="checkbox" id="checkbox1">
							<label class="checkbox-label" for="checkbox1">Intel</label>
						</li>

						<li>
							<input class="filter" data-filter=".AMD" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">AMD</label>
						</li>

						<li>
							<input class="filter" data-filter=".GIGABYTE" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Gigabyte</label>
						</li>
						<li>
							<input class="filter" data-filter=".ASUS" type="checkbox" id="checkbox4">
							<label class="checkbox-label" for="checkbox4">Asus</label>
						</li>
						<li>
							<input class="filter" data-filter=".MSI" type="checkbox" id="checkbox5">
							<label class="checkbox-label" for="checkbox5">MSI</label>
						</li>
						<li>
							<input class="filter" data-filter=".ASRock" type="checkbox" id="checkbox6">
							<label class="checkbox-label" for="checkbox6">ASRock</label>
						</li>



					</ul>
					<!-- cd-filter-content -->
				</div>
				<!-- cd-filter-block -->


			</form>

			<a href="#0" class="cd-close ">Close</a>
		</div>
		<!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger ">Filters</a>
	</main>
	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>CStation</h3>
						<h5>Contact us</h5>
						<p>
							<strong>Phone:</strong> +852 3762 6262<br>
							<strong>Email:</strong> ccdfs@hkuspace.hku.hk<br>
							<strong><a href="https://docs.google.com/forms/d/e/1FAIpQLScUtwUw1Wk0iIMSkA1GfuUbYXO1dZWQcWLemcd-z3ya3x5U6g/viewform?embedded=true">Feedback</a></strong>
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Company</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="about_us.html">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="index.html#client">Partnered Company</a></li>


						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Customer Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="FAQ.html#deliver">Delivery service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="TAC.html#term">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="TAC.html#privacypolicy2">Privacy policy</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="pc_create.html">PC customization</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="FAQ.html">FAQ</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Repair service</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>My Account</h4>
						<p>manage your CStation account</p>
						<ul>
							<li><i class="bx bx-chevron-right"></i><a href="login.html">Login</a></li>
							<li><i class="bx bx-chevron-right"></i>
								<a href="sign_up.html">Register</a>
							</li>
							<li><i class="bx bx-chevron-right"></i> <a href="checkout.html">Checkout</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>CStation</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer>

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js "></script>
	<script src="assets/js/jquery-2.1.1.js"></script>
	<script src="assets/js/jquery.mixitup.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- Template Main JS File -->
	<script src="assets/js/main1.js"></script>
	
	<script>
		const buttons = document.querySelectorAll('.dropdown-item');
		const boxes = document.querySelectorAll('.box');
		const searchBox = document.querySelector("#search ");

		/* Search Product by Textbox */
		searchBox.addEventListener('keyup', (e) => {
			searchText = e.target.value.toLowerCase().trim();

			boxes.forEach((box) => {
				const data = box.dataset.item;
				if (data.includes(searchText)) {
					box.style.display = 'block';
				} else {
					box.style.display = 'none';
				}
			});

			buttons.forEach((button) => {
				button.classList.remove('btn-clicked');
			});
			buttons[0].classList.add('btn-clicked');
		});

		buttons.forEach((button) => {
			button.addEventListener('click', (e) => {

				e.preventDefault();
				setActiveBtn(e);
				const btnfilter = e.target.dataset.filter;

				boxes.forEach((box => {
					if (btnfilter == 'all') {
						box.style.display = "block ";
					} else {

						const boxfilter = box.dataset.item;
						if (btnfilter == boxfilter) {
							box.style.display = "block ";
						} else {
							box.style.display = "none ";
						}

					}
				}));


			});
		});



		function setActiveBtn(e) {
			buttons.forEach((button) => {
				button.classList.remove('btn-clicked');
			});
			e.target.classList.add('btn-clicked');
		}



		function openNav() {
			if (window.innerWidth < 800) {
				document.getElementById("myNav").style.width = "100%";
			} else if (window.innerWidth < 1210) {
				document.getElementById("myNav").style.width = "45%";
			} else {
				document.getElementById("myNav").style.width = "30%";
			}

		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}
	</script>
	<script>
		! function(e, t, a) {
			var c = e.head || e.getElementsByTagName("head")[0],
				n = e.createElement("script");
			n.async = !0, n.defer = !0, n.type = "text/javascript", n.src = t + "/static/js/widget.js?config=" + JSON.stringify(a), c.appendChild(n)
		}(document, "https://app.engati.com", {
			bot_key: "5bfba005c8f2476b",
			welcome_msg: true,
			branding_key: "default",
			server: "https://app.engati.com",
			e: "p"
		});
	</script>
</body>
<script async src="https://cdn.snipcart.com/themes/v3.3.0/default/snipcart.js"></script>
<script>
	window.SnipcartSettings = {
		publicApiKey: 'NTM3NDYyOTAtYjMxOC00YTU4LThmYTQtZjMwZDhlNGU4OTU1NjM4MTM1Mjk2OTg0MjU2NjY5',
		loadStrategy: 'on-user-interaction',
		addProductBehavior: "none",
		modalStyle: "side",
	};

	(() => {
		var c, d;
		(d = (c = window.SnipcartSettings).version) != null || (c.version = "3.0");
		var s, S;
		(S = (s = window.SnipcartSettings).timeoutDuration) != null || (s.timeoutDuration = 2750);
		var l, p;
		(p = (l = window.SnipcartSettings).domain) != null || (l.domain = "cdn.snipcart.com");
		var w, u;
		(u = (w = window.SnipcartSettings).protocol) != null || (w.protocol = "https");
		var f = window.SnipcartSettings.version.includes("v3.0.0-ci") || window.SnipcartSettings.version != "3.0" && window.SnipcartSettings.version.localeCompare("3.4.0", void 0, {
				numeric: !0,
				sensitivity: "base"
			}) === -1,
			m = ["focus", "mouseover", "touchmove", "scroll", "keydown"];
		window.LoadSnipcart = o;
		document.readyState === "loading" ? document.addEventListener("DOMContentLoaded", r) : r();

		function r() {
			window.SnipcartSettings.loadStrategy ? window.SnipcartSettings.loadStrategy === "on-user-interaction" && (m.forEach(t => document.addEventListener(t, o)), setTimeout(o, window.SnipcartSettings.timeoutDuration)) : o()
		}
		var a = !1;

		function o() {
			if (a) return;
			a = !0;
			let t = document.getElementsByTagName("head")[0],
				e = document.querySelector("#snipcart"),
				i = document.querySelector(`src[src^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][src$="snipcart.js"]`),
				n = document.querySelector(`link[href^="${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}"][href$="snipcart.css"]`);
			e || (e = document.createElement("div"), e.id = "snipcart", e.setAttribute("hidden", "true"), document.body.appendChild(e)), v(e), i || (i = document.createElement("script"), i.src = `${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.js`, i.async = !0, t.appendChild(i)), n || (n = document.createElement("link"), n.rel = "stylesheet", n.type = "text/css", n.href = `${window.SnipcartSettings.protocol}://${window.SnipcartSettings.domain}/themes/v${window.SnipcartSettings.version}/default/snipcart.css`, t.prepend(n)), m.forEach(g => document.removeEventListener(g, o))
		}

		function v(t) {
			!f || (t.dataset.apiKey = window.SnipcartSettings.publicApiKey, window.SnipcartSettings.addProductBehavior && (t.dataset.configAddProductBehavior = window.SnipcartSettings.addProductBehavior), window.SnipcartSettings.modalStyle && (t.dataset.configModalStyle = window.SnipcartSettings.modalStyle), window.SnipcartSettings.currency && (t.dataset.currency = window.SnipcartSettings.currency), window.SnipcartSettings.templatesUrl && (t.dataset.templatesUrl = window.SnipcartSettings.templatesUrl))
		}
	})();
</script>

</html>