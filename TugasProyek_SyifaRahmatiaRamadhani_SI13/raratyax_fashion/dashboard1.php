
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    	<title>Raratyax Fashion</title>
    	<link rel="icon" href="images/logora.png">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
	  	<div id="Welcome">
	  		<!---Start navigation Bar -->
	    	<nav class="navbar navbar-expand-lg navbar fixed-top  navbar-light bg-light">
		 		<a class="navbar-brand" href="#Welcome">
    				<img src="images/logora.png" width="50" height="50" class="d-inline-block" alt=""> Raratyax Fashion
		 		</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		 		</button>
			  	<div class="collapse navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav ml-auto">
					    <li class="nav-item">
					    	<a class="nav-link" href="dashboard1.php">Dashboard</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="list_kategori.php">Data Kategori</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="list_produk.php">Data Produk</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="list_pesanan.php">Data Pesanan</a>
					    </li>
                        <li class="nav-item">
							<a class="nav-link" href="index.php">Logout</a>
						</li>
					    <li class="nav-item">
					    	<a href="" class="language" rel="it-IT"><img src="images/indo.png" class="flag" alt="Indonesia" /></a>
					    	<a href="" class="language" rel="en-En"><img src="images/cc.png" class="flag" alt="Chanel" /></a>
					    </li>
				    </ul>
				</div>
			</nav>
			<!--- End Navigation Bar -->
    <!--header-->
    <header>
        <div class="container">
        <h1><a href="dashboard1.php">Raratyax Fashion</a></h1>
        <ul>
            <li><a href="dashboard1.php">Dashboard</a></li>
            <li><a href="list_kategori.php">Data Kategori</a></li>
            <li><a href="list_produk.php">Data Produk</a></li>
            <li><a href="list_pesanan.php">Data Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
    </header>
	<!--- Start Carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">			
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img class="d-block w-100 img-fluid img-slider" src="images/bg.png" alt="First slide">
				    	<div class="carousel-caption">
						    <h2>Welcome Rara to the Backend!</h2>
							<p>...</p>
						</div>
				    </div>
				    
			<!--- End of Carousel -->
    <!--footer-->
    <footer>
            <div class="container">
                <big>Copyright &copy; 2023 - Rara Fashion</big>
            </div>
    </footer>
</body>
</html>