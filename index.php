<?php include "setup.php"?>
<?php include "tgl.php"?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
    <script src="https://kit.fontawesome.com/8b25f8494c.js" crossorigin="koncobedah"></script>

    <title>Hello, world!</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Corvid</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="flex-shrink-0">
	<!-- PROVINSI -->
	<div class="container-fluid">
		<h1 class="text-center mt-15">REAL TIME COVID-19</h1>
		<p class="text-center" style="font-style: italic;" >Update Terakhir <?php echo tgl_indo(date('Y-m-d')); echo ' / ',date('H:i:s')?></p>
		<hr>
		<h5 class="text-left mt-2">Provinsi Kalimantan Tengah</h5>
		<div class="row">
			<div class="col-sm-4">
				<div class="card text-white bg-primary mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Positif</h5>
								<h2><?= number_format($ktpositif,) ?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-sad-tear"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-success mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Sembuh</h5>
								<h2><?= number_format($ktsembuh,) ?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-smile-beam"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-danger mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Meninggal</h5>
								<h2><?= number_format($ktmeninggal,) ?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-tired"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- INDONESIA -->
	<div class="container-fluid">
		<h5 class="text-left mt-2">Indonesia</h5>
		<div class="row">
			<div class="col-sm-4">
				<div class="card text-white bg-primary mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Positif</h5>
								<h2><?= $positif?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-sad-tear"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-success mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Sembuh</h5>
								<h2><?= $sembuh?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-smile-beam"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-danger mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Meninggal</h5>
								<h2><?= $meninggal?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-tired"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
		</div>		
	</div>
	<br>
	<!-- GLOBAL -->
	<div class="container-fluid">
		<h5 class="text-left mt-2">Global</h5>
		<div class="row">
			<div class="col-sm-4">
				<div class="card text-white bg-primary mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Positif</h5>
								<h2><?= $jumlah_positif?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-sad-tear"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-success mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Sembuh</h5>
								<h2><?= $jumlah_sembuh?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-smile-beam"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-white bg-danger mb-3">
				<div class="card-body">
					<div class="row">
						<div class="col-md-8">
							<h5 class="card-title">
								<h5>Meninggal</h5>
								<h2><?= $jumlah_meninggal?></h2>
							</h5>
						</div>
						<div class="col-md-4">
							<i class="far fa-5x fa-tired"></i>
						</div>
					</div>				    
				</div>
				</div>
			</div>
		</div>				
	</div>
</main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>