<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Booked Books | Catalog</title>
			<meta name="description" content="">
			<meta name="keywords" content="">
			<meta name="author" content="">
			<!-- Website favicon -->
			<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
			<!-- Bootstrap CDN -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
			<!-- AOS CDN -->
			<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<!-- Icons -->
			<link rel="shortcut icon" type="image/png" href="./images/main-logo-favicon.png">
			<!-- Normalize.css for consistent styling across browsers -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
			<!-- Icomoon.css for icon fonts -->
			<link rel="stylesheet" href="icomoon/icomoon.css">
			<!-- Vendor.css for third-party libraries or frameworks -->
			<link rel="stylesheet" href="css/vendor.css">
			<!-- Style.css for custom styles -->
			<link rel="stylesheet" href="style.css">
		</head>
<body>
<!-- Header -->
<div id="header-wrap" class="sticky-top bg-light">
	<header id="header" class="pb-0">
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-md-2 h-60">
					<div class="main-logo">
						<a href="index.html"><img src="images/main-logo.png" alt="logo" class="img-fluid"></a>
					</div>
				</div>
				<!-- Navbar -->
				<div class="col-md-10 h-60">
					<nav id="navbar">
						<div class="main-menu stellarnav">
							<ul class="menu-list">
								<li class="menu-item active"><a href="./index.html" class="nav-link" data-effect="Home">Home</a></li>
								<li class="menu-item"><a href="./about.php" class="nav-link" data-effect="About">About</a></li>
								<li class="menu-item"><a href="./browse.php" class="nav-link" data-effect="Browse">Browse</a></li>
								<li class="menu-item"><a href="./contact.php" class="nav-link" data-effect="Contact">Contact</a></li>
							</ul>
							<div class="hamburger">
				                <span class="bar"></span>
				                <span class="bar"></span>
				                <span class="bar"></span>
				            </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- Search Bar-->
		<div class="top-content pb-0 h-40">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="container m-0 p-0">
							<div class="d-flex m-0 p-0">
								<div class="searchbar p-0" onmousedown="searchActive()">
									<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
									<input class="search_input m-0" type="text" name="" id="searchbar" placeholder="Search...">
								</div>
							</div>
						</div>
					</div>
					<!-- User Activity Section -->
					<div class="col-md-6">
						<div class="right-element d-flex btn-group float-end m-0 align-top">
							<div class="dropdown m-0 p-1" id="subnav">
								<a href="#" class="user-account for-buy bg-transparent btn dropdown-toggle m-0" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-offset="60,20"><i class="icon icon-user"></i><span> Log in</span></a>
								<form action="php/login.php" method="POST" class="dropdown-menu px-3 dropdown-menu-end" style="width: 200% !important;" id="login">
									<h3 class="text-center p-0 m-1">Log-In</h3>
									<div class="mb-1">
										<label for="exampleDropdownFormEmail2" class="form-label">Username</label>
										<input name="username" class="form-control" id="exampleDropdownFormEmail2" placeholder="Enter your username" required>
									</div>
									<div class="mb-1">
   	 									<label for="exampleDropdownFormPassword2" class="form-label">Password</label>
    									<input name="password" type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" required>
									</div>
									<div class="mb-1">
										<div class="form-check align-middle">
											<input type="checkbox" class="form-check-input my-1" id="dropdownCheck2">
											<label class="form-check-label align-top p-0" for="dropdownCheck2">
											Remember me
											</label>
										</div>
									</div>
									<div class="align-center d-flex flex-column">
										<button type="submit" class="btn btn-default bg-light py-1 my-0 mx-auto" style="font-size: small;" name="user" onclick="changeAction('php/login.php')">Log in as user</button>
										<button type="submit" class="btn btn-default bg-light py-1 my-0 mx-auto" style="font-size: small;" name="admin" onclick="changeAction('php/login.php')">Log in as admin</button>
										<a href="#" style="font-size: 14px;" onclick="window.location.href='php/signup.php'">Don't have an account? Sign up now.</a>
									</div>
								</form>
							</div>

							<div class="dropdown m-0 p-1" id="subnav">
								<a href="#" class="cart for-buy btn bg-transparent dropdown-toggle m-0" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-offset="10,20"><i class="icon icon-clipboard"></i><span> To Rent: 0</span></a>
								<form class="dropdown-menu px-3 dropdown-menu-end" style="width: 200%;">
									<h3 class="text-center">Books to be rented:</h3>
									<div class="align-center">
										<h1>None</h1>
									</div>
									<div class="align-center">
										<button type="submit" class="btn py-1 text-center">Check Out</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>

<!-- Catalog -->
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<div class="colored">
					<h1 class="page-title mt-2">Browse Books</h1>
					<div class="breadcum-items">
						<span class="item"><a href="index.html">Home /</a></span>
						<span class="item colored">Browse Books</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section id="popular-books" class="bookshelf">
	
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs tabs" role="tablist">
			  <li data-bs-toggle="tab" data-bs-target="#all-genre" class="active tab" type="button" role="tab" aria-controls="all-pane" aria-selected="true">All Genre</li>
			  <li data-bs-toggle="tab" data-bs-target="#business" class="tab" type="button" role="tab" aria-controls="business-pane" aria-selected="false">Business</li>
			  <li data-bs-toggle="tab" data-bs-target="#technology" class="tab" type="button" role="tab" aria-controls="technology-pane" aria-selected="false">Technology</li>
			  <li data-bs-toggle="tab" data-bs-target="#romantic" class="tab" type="button" role="tab" aria-controls="romantic-pane" aria-selected="false">Romantic</li>
			  <li data-bs-toggle="tab" data-bs-target="#adventure" class="tab" type="button" role="tab" aria-controls="adventure-pane" aria-selected="false">Adventure</li>
			  <li data-bs-toggle="tab" data-bs-target="#fictional" class="tab" type="button" role="tab" aria-controls="fictional-pane" aria-selected="false">Fictional</li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane fade show active" id="all-genre" role="tabpanel" aria-labelledby="all-genre" tabindex="0">
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<a href="single-product.html"><button type="button" class="add-to-rent my-auto" data-product-tile="add-to-rent">Add To Rent</button></a>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability available">Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				</div>
				<div class="row">

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

		    	</div>

			  </div>
			  <div id="business" class="tab-pane fade" role="tabpanel" aria-labelledby="business" tabindex="0">
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item2.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item4.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item6.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item8.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

		    	 </div>
			  </div>

			  <div id="technology" class="tab-pane fade" role="tabpanel" aria-labelledby="technology" tabindex="0">
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="romantic" class="tab-pane fade" role="tabpanel" aria-labelledby="romantic" tabindex="0">
			  	<div class="row">
		    	  <div class="col-md-3">
			    	  <figure class="product-style">
							<img src="images/tab-item1.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item3.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="adventure" class="tab-pane fade" role="tabpanel" aria-labelledby="adventure" tabindex="0">
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>

			  <div id="fictional" class="tab-pane fade" role="tabpanel" aria-labelledby="fictional" tabindex="0">
			  	<div class="row">
				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item5.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>

				  	<div class="col-md-3">
					  	<figure class="product-style">
							<img src="images/tab-item7.jpg" alt="Books" class="product-item">
							<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
							<figcaption>
								<h3>Book</h3>
								<p>Author</p>
								<div class="availability not-available">Not Available</div>
							</figcaption>
						</figure>
					</div>
		    	 </div>
			  </div>
			</div>
		</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-item">
					<div class="company-brand">
						<img src="images/main-logo.png" alt="logo" class="footer-logo">
						<p>Escape into a world of endless possibilities with our online book library. </p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>About Us</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="/about.html#our-team">Team Members</a>
						</li>
						<li class="menu-item">
							<a href="/about.html#our-mission">Our Mission </a>
						</li>
						<li class="menu-item">
							<a href="/about.html#our-vision">Our Vision</a>
						</li>
						<li class="menu-item">
							<a href="/about.html#FAQs">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>Browse</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Books</a>
						</li>
						<li class="menu-item">
							<a href="#">Authors</a>
						</li>
						<li class="menu-item">
							<a href="#">Genres</a>
						</li>
						<li class="menu-item">
							<a href="#">Search</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>My Account</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Sign In</a>
						</li>
						<li class="menu-item">
							<a href="#">View Rents</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>Contact</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Information</a>
						</li>
						<li class="menu-item">
							<a href="#">Send an Email</a>
						</li>
						<li class="menu-item">
							<a href="#">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6">
							<p><strong>Booked Books</strong> © 2023 All Rights Reserved.</p>
						</div>
						<div class="col-md-6">
							<div class="social-links align-right">
								<ul>
									<li>
										<a href="#"><i class="icon icon-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon icon-twitter"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/script.js"></script>
<script>
	// Retrieve book data from the server or database
	var books = [
		{
			title: "Book 1",
			author: "Author 1",
			image: "images/tab-item1.jpg",
			availability: true
		},
		{
			title: "Book 2",
			author: "Author 2",
			image: "images/tab-item2.jpg",
			availability: false
		},
		{
			title: "Book 3",
			author: "Author 3",
			image: "images/tab-item3.jpg",
			availability: false
		}
	];

	// Function to generate HTML for each book
	function generateBookHTML(book) {
		var availabilityClass = book.availability ? "availability available" : "availability not-available";

		var bookHTML = `
			<div class="col-md-3">
				<figure class="product-style">
					<img src="${book.image}" alt="Books" class="product-item">
					<button type="button" class="add-to-rent" data-product-tile="add-to-rent">Add To Rent</button>
					<figcaption>
						<h3>${book.title}</h3>
						<p>${book.author}</p>
						<div class="${availabilityClass}">${book.availability ? 'Available' : 'Not Available'}</div>
					</figcaption>
				</figure>
			</div>
		`;

		return bookHTML;
	}

	// Generate book elements and append them to the bookshelf content
	var bookshelfContent = document.getElementById("bookshelf-content");

	books.forEach(function (book) {
		var bookElement = document.createElement("div");
		bookElement.classList.add("col-md-3");
		bookElement.innerHTML = generateBookHTML(book);
		bookshelfContent.appendChild(bookElement);
	});
</script>
</body>
</html>	