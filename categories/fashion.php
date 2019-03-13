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
<link rel="stylesheet" type="text/css" href="fashion.css">

<title>Hello, world!</title>
</head>
<body>

<!--header-->

       <header id="home" class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark">
          <img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
              <a class="navbar-brand" href="#home">Wild Bazar</a>
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

<!--image-->


        <img src="images/mode homme.jpg" class="img-fluid" alt="Responsive image"><h1 class="styletitle">New<br>Collection<p class="styletext">Adopt a crazy look with the Wild Bazar!</p></h1>


<!-- Categories -->

<div id="fashion">
	<div class="row justify-content-center p-4 mr-4">
    <div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/chaussures_rsaara8a-600x600.jpg" class="card-img-top" alt="timberland">
	 			<div class="card-body">
				    <h5 class="card-title">Timberland</h5>
				    <p class="card-text">170 €</p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#timberland"><i class="fas fa-info"></i>
          </button>				    
  				</div>
			</div>
		</div>

<!-- Modal -->

    <div class="modal fade" id="timberland" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Timberland boots</h5>
                  <h3>170.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/chaussures_rsaara8a-600x600.jpg" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> 43</li>
                  <li><b>color:</b> black and brown</li>
                  <li><b>Category:</b> boots</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/chaussures_homme___po2936hbn_3-600x600.jpg" class="card-img-top" alt="shoes">
				 <div class="card-body">
			    	 <h5 class="card-title">Puma</h5>
			    	 <p class="card-text">120.00 €</p>
			    	 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#puma"><i class="fas fa-info"></i>
          </button>
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="puma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Puma running</h5>
                  <h3>120.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/chaussures_homme___po2936hbn_3-600x600.jpg" class="card-img-top" alt="puma">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> 43</li>
                  <li><b>color:</b> white</li>
                  <li><b>Category:</b> running</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/adidas-superstar-bleu-blanc-basket-adidas-277_3.jpg" class="card-img-top" alt="shoes">
	 			<div class="card-body">
				    <h5 class="card-title">Addidas super stars</h5>
				    <p class="card-text">100.00 €</p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>   Add to cart</a>
				    <button type="button" class="btn1" data-toggle="modal" data-target="#addidas"><i class="fas fa-info"></i>
            </button>				  
  				</div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="addidas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Addidas super stars</h5>
                  <h3>100.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/adidas-superstar-bleu-blanc-basket-adidas-277_3.jpg" class="card-img-top" alt="addidas">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> 43</li>
                  <li><b>color:</b> black and brown</li>
                  <li><b>Category:</b> boots</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Simple, beautiful, lightweight, high quality watch, which is great for daily uses. The style is suitable for any occasion.New shoes became more accessible to the middle classes in the eighteenth century, owing to relative increases in incomes and new manufacturing methods. The development of large workshops, which produced ready-made shoes by hand helped to make shoes more affordable.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/monderer_homme_milano_bottines_en_cuir_noir_boots_chaussures_homme___8sezdz8b6-600x600.jpg" class="card-img-top" alt=shoes>
				 <div class="card-body">
			    	 <h5 class="card-title">Milano</h5>
			    	 <p class="card-text">170.00 €</p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#milano"><i class="fas fa-info"></i>
          </button>				  
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="milano" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Milano shoes</h5>
                  <h3>170.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/monderer_homme_milano_bottines_en_cuir_noir_boots_chaussures_homme___8sezdz8b6-600x600.jpg" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> 43</li>
                  <li><b>color:</b> black</li>
                  <li><b>Category:</b> boots</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Featuring are Rich leather upper, Premium Leather and cap toe high-shine finish, Traditional lace up closure, SBreathable and soft linings and padded footbed, Superior comfort with cushioned footbed, Stacked heel.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

	</div>


    <hr>

<!--line-->
	 <div class="row justify-content-center p-4 mr-4">
    <div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/d-skins-jeans-homme-bleu-slim-carrot-dk-8581.jpg" class="card-img-top" alt="jean">
	 			<div class="card-body">
				    <h5 class="card-title">Jean straight</h5>
				    <p class="card-text">80.00 €</p>
				    <a href="#bluejean" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
				    <button type="button" class="btn1" data-toggle="modal" data-target="#jeanstraight"><i class="fas fa-info"></i>
            </button>				  
  				</div>
			</div>
		</div> 

<!-- Modal -->

    <div class="modal fade" id="jeanstraight" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Jean straight</h5>
                  <h3>80.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/d-skins-jeans-homme-bleu-slim-carrot-dk-8581.jpg" class="card-img-top" alt="jeanstraight">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Waist:</b> 30</li>
                  <li><strong>Lenght: </strong> 32</li>
                  <li><b>color:</b> blue used</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Washed skinny fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context. Jeans are named after the city of Genoa in Italy, a place where cotton corduroy, called either jean or jeane, was manufactured. Levi Strauss came from Germany to New York in 1851 to join his older brother who had a dry goods store.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>



<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/jeans-homme-bleu-slim-carrot-dk-8463.jpg" class="card-img-top" alt="jeanslim">
				 <div class="card-body">
			    	 <h5 class="card-title">Jean slim</h5>
			    	 <p class="card-text">80.00 €</p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#jeanslim"><i class="fas fa-info"></i>
          </button>				  
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="jeanslim" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Jean slim</h5>
                  <h3>80.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/jeans-homme-bleu-slim-carrot-dk-8463.jpg" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Waist:</b> 30</li>
                  <li><b>Lenght:</b> 32</li>
                  <li><b>Color:</b> blue</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Washed skinny fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context. Jeans are named after the city of Genoa in Italy, a place where cotton corduroy, called either jean or jeane, was manufactured. Levi Strauss came from Germany to New York in 1851 to join his older brother who had a dry goods store.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/Jean Slim Gris Clair Homme Outlet Paris 1666.jpg" class="card-img-top" alt="grayjean">
	 			<div class="card-body">
				    <h5 class="card-title">Jean skinny</h5>
				    <p class="card-text">80 €</p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
				    <button type="button" class="btn1" data-toggle="modal" data-target="#grayjean"><i class="fas fa-info"></i>
            </button>				  
  				</div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="grayjean" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Jean slim</h5>
                  <h3>80.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/Jean Slim Gris Clair Homme Outlet Paris 1666.jpg" class="card-img-top" alt="grayjean">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Waist:</b> 30</li>
                  <li><b>Lenght:</b> 32</li>
                  <li><b>Color:</b> gray</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Washed skinny fit jeans with frayed rips at legs. Five pockets. Front zip and metal button closure.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context. Jeans are named after the city of Genoa in Italy, a place where cotton corduroy, called either jean or jeane, was manufactured. Levi Strauss came from Germany to New York in 1851 to join his older brother who had a dry goods store.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/levis-jean-501-homme.jpg" class="card-img-top" alt="jeanlevis">
				 <div class="card-body">
			    	 <h5 class="card-title">Jean Levi's</h5>
			    	 <p class="card-text">70.00 €</p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#jeanlevis"><i class="fas fa-info"></i>
          </button>				  
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="jeanlevis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Jean Levi's</h5>
                  <h3>70.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/levis-jean-501-homme.jpg" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Waist:</b> 30</li>
                  <li><b>Length:</b> 32</li>
                  <li><b>Color:</b> black</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>The original blue jean since 1873.Jeans are pants made from denim or dungaree cloth. They were invented by Jacob Davis and Levi Strauss in 1873 and a worn still but in a different context. Jeans are named after the city of Genoa in Italy, a place where cotton corduroy, called either jean or jeane, was manufactured. Levi Strauss came from Germany to New York in 1851 to join his older brother who had a dry goods store.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

	</div>


    <hr>
<!--line-->

	<div class="row justify-content-center p-4 mr-4">
		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/Chemise-Homme-carreaux-manches-courtes-Fashion-slim-fit-Tendance-2015-mens-shirts-09-600x600.jpg" class="card-img-top" alt="skirt">
	 			<div class="card-body">
				    <h5 class="card-title">Short-sleeve shirt</h5>
				    <p class="card-text"> 60.00 €</p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
				    <button type="button" class="btn1" data-toggle="modal" data-target="#shirtred"><i class="fas fa-info"></i>
            </button>				  
  				</div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="shirtred" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Short-sleeve shirt</h5>
                  <h3>60.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/Chemise-Homme-carreaux-manches-courtes-Fashion-slim-fit-Tendance-2015-mens-shirts-09-600x600.jpg" class="card-img-top" alt="shirtred">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> 40</li>
                  <li><b>color:</b> red</li>
                  <li><b>Category:</b> short sleeves</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/chemise-homme-coupe-ajustee-manches-3-quarts-elegance-blanc-600x600.jpg" class="card-img-top" alt="...">
				 <div class="card-body">
			    	 <h5 class="card-title">White shirt</h5>
			    	 <p class="card-text">70.00 €</p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#whiteshirt"><i class="fas fa-info"></i>
          </button>				  
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="whiteshirt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">White shirt</h5>
                  <h3>70.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/chemise-homme-coupe-ajustee-manches-3-quarts-elegance-blanc-600x600.jpg" class="card-img-top" alt="whiteshirt">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> L</li>
                  <li><b>color:</b> white</li>
                  <li><b>Category:</b> long sleeves </li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure.There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
	  			<img src="images/Chemise-Homme-en-Jean-manches-courtes-chemisette-pas-cher-2015-mens-jeans-shirts-04-600x600.jpg" class="card-img-top" alt="jeanshirt">
	 			<div class="card-body">
				    <h5 class="card-title">Short-sleeve shirt</h5>
				    <p class="card-text">80.00 €</p>
				    <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
				    <button type="button" class="btn1" data-toggle="modal" data-target="#jeanshirt"><i class="fas fa-info"></i>
            </button>				  
  				</div>
			</div>
		</div>

<!-- Modal -->

    <div class="modal fade" id="jeanshirt" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Short-sleeve shirt</h5>
                  <h3>80.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/Chemise-Homme-en-Jean-manches-courtes-chemisette-pas-cher-2015-mens-jeans-shirts-04-600x600.jpg" class="card-img-top" alt="timberland">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> L</li>
                  <li><b>Color:</b> blue </li>
                  <li><b>Category:</b> short sleeves</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure.There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

<!--article-->

		<div class="col-12  col-md-6 col-lg-2 mr-4">
			<div class="card" style=";">
			 <img src="images/chemise-fashion-homme-manche-courte.jpg" class="card-img-top" alt="shirt">
				 <div class="card-body">
			    	 <h5 class="card-title">Cored shirt</h5>
			    	 <p class="card-text">70.00 €</p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn1" data-toggle="modal" data-target="#shirtbalckwhite"><i class="fas fa-info"></i>
          </button>				  
	  			 </div>
			</div>
		</div>

<!-- Modal -->

     <div class="modal fade" id="shirtbalckwhite" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Cored shirt</h5>
                  <h3>70.00 €</h3>
                  <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>

           <div class="modal-body row">

          <div class="card col-sm-6">
            <img src="images/chemise-fashion-homme-manche-courte.jpg" class="card-img-top" alt="cored">
            <div class="card-body">
                <h5 class="descriptif">Description</h5>
                <ul class="card-text">
                  <li><b>Size:</b> L</li>
                  <li><b>Color:</b> Black and white</li>
                  <li><b>Category:</b> Cored</li>
                </ul>
            </div>
          </div>

          <div class="features col-sm-6">
            <p>Relaxed fit shirt with collar, long sleeves, and buttoned cuffs. Soft washed effect. Front button closure. There is perhaps no other item of apparel that defines a man’s style quite like the shirt – they’ve been a staple of men’s wardrobes for as long as anyone can remember and although athleisure types would probably beg to differ, it’s difficult to imagine a world without them.</p>
          </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
          </div>

            </div>
          </div>
    </div>

	</div>

  

</div>

<!-- Footer -->
    <footer class="container-fluid footer">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6">
          <div class="row tableFooter">
            <div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#"> Home </a> </div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="fashion.html">Fashion</a></div>
          </div>
          <div class="row tableFooter">
            <div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href="#about">About us </a></div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-4"> <a href=patirsolocategorie/Aquarium.html">Pet shop</a></div>
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
               <label for="email"><i class="far fa-envelope"></i></label>
               <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
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