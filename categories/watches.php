<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!--  Call fonts -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya|Ubuntu" rel="stylesheet"> 

		<!-- Call style.css -->
		<link rel="stylesheet" type="text/css" href="watches.css">

		<title>Watches</title>
	</head>

	<body>
	<!-- Header -->
	<header id="home" class="container-fluid">

			<nav class="navbar navbar-expand-lg navbar-dark">
				<img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
				  	<a class="navbar-brand" href="index.html">Wild Bazar</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
					<div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      	<li class="nav-item">
					        	<a class="nav-link" href="fashion.html">Fashion</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="partisolocategorie/Aquarium.html">Pet shop</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="categories-tech.html">High-Tech</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="watches-items.html">Watches</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="electromenager.html">Home appliance</a>
					      	</li>
					    </ul>
					</div>
			  		<button type="button" class="btn btn-warning pull-right">Cart <i class="fas fa-cart-arrow-down"></i></button>
				    
				</nav>

				<div class="bd-example">
			      	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			        	<ol class="carousel-indicators">
					        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
			        	</ol>
		        		<div class="carousel-inner">
				      	<div class="carousel-item active">
				        	<a href="#home">
				        		<img class="carousel_image homeImg" src="images/slide-watch.png" class="d-block w-100" alt="soldes">
				        	</a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h1 class="carousel_title3">Watches for Men</h1>
				          		<p class="carousel_text3">Life is time</p>
				        	</div>
				      	</div>

				   	 	</div>
				        	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				          		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				          		<span class="sr-only">Previous</span>
				        	</a>
				        	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				          		<span class="carousel-control-next-icon" aria-hidden="true"></span>
				          		<span class="sr-only">Next</span>
				       		</a>
			      	</div>
				</div>
	</header>

	<main class="container">

		<section id="watches" class="container">
			<div class="watches row mb-5">
				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6 n-bd">
					<img src="images/montre-001.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-001" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a> 
					</div>										    
				</div>
				<!-- Modal item 001-->
				<div class="modal fade" id="montre-001" tabindex="-1" role="dialog" aria-labelledby="m-001" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">

				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-001">Zeiger Men Watch</h5>
				        		<h3>30.00 €</h3>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>

						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-001.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Technical Description</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>

								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>
				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6 n-bd">
					<img src="images/montre-002.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-002" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 002-->
				<div class="modal fade" id="montre-002" tabindex="-1" role="dialog" aria-labelledby="m-002" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-002">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-002.png" class="card-img-top" alt="watches">
									 <div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6 n-bd">
					<img src="images/montre-003.png" class="card-img-top img-fix" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-003" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 003-->
				<div class="modal fade" id="montre-003" tabindex="-1" role="dialog" aria-labelledby="m-003" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">

				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-003">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>

						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-003.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Technical Description</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>

								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>

						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6 n-bd">
					<img src="images/montre-004.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-004" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 004-->
				<div class="modal fade" id="montre-004" tabindex="-1" role="dialog" aria-labelledby="m-004" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-004">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-004.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-005.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €.</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-005" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 005-->
				<div class="modal fade" id="montre-005" tabindex="-1" role="dialog" aria-labelledby="m-005" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-005">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-005.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-006.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-006" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 006-->
				<div class="modal fade" id="montre-006" tabindex="-1" role="dialog" aria-labelledby="m-006" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-006">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-006.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-007.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-007" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a> 
					 </div>
				</div>
				<!-- Modal item 007-->
				<div class="modal fade" id="montre-007" tabindex="-1" role="dialog" aria-labelledby="m-007" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-007">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-007.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-008.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-008" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 008-->
				<div class="modal fade" id="montre-008" tabindex="-1" role="dialog" aria-labelledby="m-008" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-008">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-008.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-009.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-009" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					 </div>
				</div>
				<!-- Modal item 009-->
				<div class="modal fade" id="montre-009" tabindex="-1" role="dialog" aria-labelledby="m-009" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-009">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-009.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-010.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					   	<button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-010" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
					</div>
				</div>
				<!-- Modal item 010-->
				<div class="modal fade" id="montre-010" tabindex="-1" role="dialog" aria-labelledby="m-010" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-010">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-010.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-011.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					    <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-011" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a> 
					 </div>
				</div>
				<!-- Modal item 011-->
				<div class="modal fade" id="montre-011" tabindex="-1" role="dialog" aria-labelledby="m-011" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-011">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
						     <div class="modal-body row">

						        <div class="card col-sm-6">
									<img src="images/montre-011.png" class="card-img-top" alt="watches">
									<div class="card-body">
									   	<h5 class="descriptif">Descriptif technique</h5>
									    <ul class="card-text">
									    	<li><b>Branch:</b> Zeiger</li>
									    	<li><b>Batteries:</b> 1 Lithium ion</li>
									    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
									    </ul>
									</div>
								</div>
								<div class="features col-sm-6">
									<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
									<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
								</div>
						    </div>

						    <div class="modal-footer">
						        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button> 
						    </div>

				    	</div>
				  	</div>
				</div>

				<div class="card cont-watches col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<img src="images/montre-012.png" class="card-img-top" alt="watches">
					<div class="card-body">
						<h5 class="card-title">Zeiger Men Watch</h5>
					    <p class="card-text">30.00 €</p>
					   <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button> 
					    <a href="#montre-012" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a> 
					 </div>
				</div>
				<!-- Modal item 012-->
				<div class="modal fade" id="montre-012" tabindex="-1" role="dialog" aria-labelledby="m-012" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				      			<h3>30.00 €</h3>
				        		<h5 class="modal-title" id="m-012">Zeiger Men Watch</h5>
				        		<button type="button" class="close" data-dismiss="modal">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
				     <div class="modal-body row">

				        <div class="card col-sm-6">
							<img src="images/montre-012.png" class="card-img-top" alt="watches">
							<div class="card-body">
							   	<h5 class="descriptif">Descriptif technique</h5>
							    <ul class="card-text">
							    	<li><b>Branch:</b> Zeiger</li>
							    	<li><b>Batteries:</b> 1 Lithium ion</li>
							    	<li><b>Shipping Weight:</b> 9.6 ounces</li>
							    </ul>
							</div>
						</div>
						<div class="features col-sm-6">
							<p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.</p>
							<p>Soft, durable, black genuine leather band give it a very elegant and sophisticated appearance, making it perfects for both business and casual activities.</p>
						</div>
				    </div>

				    <div class="modal-footer">
				        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
				    </div>

				    	</div>
				  	</div>
				</div>

			</div>
			
		</section>
	</main>

	<!--Footer-->
	<footer class="container-fluid footer">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6">
				<div class="row tableFooter">
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#"> Home </a> </div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="fashion.html">Fashion</a></div>
				</div>
				<div class="row tableFooter">
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#about">About us </a></div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="partisolocategorie/Aquarium.html">Pet shop</a></div>
				</div>
				<div class="row tableFooter">
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#topSelling">Top selling </a></div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="categories-tech.html">High-tech</a></div>
				</div>        
				<div class="row tableFooter">
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#email">Contact </a></div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="watches-items.html">Watches</a></div>
				</div>        
				<div class="row tableFooter">
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#">Legal mentions </a></div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="electromenager.html">Home appliance</a></div>
				</div>
			<br>  
			</div>  
			<div class="form col-12 col-sm-12 col-md-6"> 
				<h3>Contact us</h3>
				<form method="post" action="traitement.php">
					<p>
						<label for="email"><i class="far fa-envelope"></i></label> <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
					</p>
					<p>
						<label for="message"> <i class="far fa-comment"></i> </label>  <input type="text" name="message" class="inputText" id="message">
					</p>
					<button type="button" class="btn btn-lg" id="btnFooter">Submit</button>
				</form>
			</div>          
		</div>
		<div class="info">
			<p> 
				<img src="images/wild.png" class="footerImg" alt="logo">
				<span class="titleFooter"> WILD BAZAR</span> 1, rue de la Paix - 75000 Paris - <i class="fas fa-phone"></i> 01-23-45-67-89
			</p>
		</div>
	</footer>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Font Awesome  -->
		<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

	</body>
</html>