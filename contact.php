<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contact us</title>

	<!-- Custom CSS -->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/ariel.css">
	<link rel="stylesheet" type="text/css" href="css/styleliam.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="Traveler\images.jpg">



	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<!-- Header -->
	<?php include 'templates/header.php' ?>
		<?php include 'templates/subheader.php' ?>
	
	
	
	<div>
			<?php
 	 			include_once("models/connect.php");
 	 		$query = "SELECT * FROM agencies";
 	 $results = mysqli_query($connect, $query) or die("database error:". mysqli_error($connect));
  	?> 
	</div>
	
	
	
	
		<main role="main">
		  <div class="container marketing">
			<div class="row">
				<?php
				while( $record = mysqli_fetch_assoc($results) ) {
				?> 
			
		
					<div class="col-lg-4">
						<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="images/north.jpg">
					
							<h2><?php echo $record['AgncyCity']; ?> <?php echo $record['AgncyProv']; ?>, <?php echo $record['AgncyCountry']; ?></h2>
								Phone: <?php echo $record['AgncyPhone']; ?><br>
								Address: <?php echo $record['AgncyAddress']; ?><br>
								Fax: <?php echo $record['AgncyFax']; ?> <br>
			
							</div>

							
						


			
						<?php 
					} 
				?>

			</div>
		</div> 
<div class="row">
	<div class="card" style="width: 18rem;">
  		<img class="card-img-top" src="..." alt="Card image cap">
  			<div class="card-body">
    			<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    					<a href="#" class="btn btn-primary">Go somewhere</a>
  							</div>
  								<div class="card" style="width: 18rem;">
  									<img class="card-img-top" src="..." alt="Card image cap">
  								<div class="card-body">
						    <h5 class="card-title">Card title</h5>
    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   					 <a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>
		</div>
	</div>
</div>
		<!-- <div class="row">
					<div class="container">
					<div class="card" style="width: 18rem;">
  <img src="bestvacations.png" class="card-img-top" alt="downtown">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  </div>				
			     	</div>

	</div> <!-- Container end -->

		<!-- FOOTER -->
				<?php include 'templates/footer.php' ?>
  					</main>
  

	<!-- Bootstrap JS -->
	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
