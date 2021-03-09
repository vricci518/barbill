<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BAR-BILL TAVERN - Bar-Bill Tavern - Restaurant in NY</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="css/bb_common.css">
	<link rel="stylesheet" href="css/bb_style.css">
</head>

<body>
<?php include 'header.php'; ?>
	<div class="container-fluid">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/caro_bbt.jpeg" class="d-block w-100" alt="barbill tavern" />
				</div>
				<div class="carousel-item">
					<img src="images/caro_wings.jpeg" class="d-block w-100" alt="chicken wings" />
				</div>
				<div class="carousel-item">
					<img src="images/caro_rbeef.jpeg" class="d-block w-100" alt="roastbeef sandwich" />
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="reservation container">
			<h2>Dining Reservations</h2>
			<h3>We are open for dining at both Bar-Bill locations! Reservations are strongly encouraged as we are operating
				at 50% capacity. Book your table through our website now!</h3>
			<div class="row">
				<div class="col-sm-12 col-lg-6 col">
					<img src="images/Loc_EastAurora.jpg" class="mx-auto home_img" alt="east aurora">
					<p class="text-center home_p"><b>EAST AURORA RESERVATIONS</b><br />
						Open Monday - Sunday 11:30 am til 10:00 pm (Last Seating at 8:45 pm)<br />
						-ONLINE RESERVATIONS ONLY-
					</p>
				</div>
				<div class="col-sm-12 col-lg-6 col">
					<img src="images/Loc_Clarence.jpg" class="mx-auto home_img" alt="clarence">
					<p class="text-center home_p"><b>CLARENCE RESERVATIONS</b><br />
						Open Monday - Saturday 11:30 am til 10:00 pm (Last Seating at 8:30 pm)<br />
						Sunday 11:30 am - 8:00 pm<br />
						-ONLINE RESERVATIONS ONLY-
					</p>
				</div>
			</div>
		</div>
		<div class="reservation container">
			<h2>Curbside Takeout</h2>
			<div class="row">
				<div class="col-sm-12 col-lg-6 col">
					<img src="images/to_eastaurora.jpg" class="mx-auto home_img" alt="east aurora take out">
					<p class="text-center home_p"><b>EAST AURORA TAKEOUT</b><br />
						Available Daily 11:30 am til 9:00 pm<br />
						Offering online or phone orders. Curbside pickup only.<br />
						-WE DO NOT ACCEPT PRE-ORDERS, ONLY ORDERS IN REAL TIME-
					</p>
				</div>
				<div class="col-sm-12 col-lg-6 col">
					<img src="images/to_clarence.jpg" class="mx-auto home_img" alt="clarence take out">
					<p class="text-center home_p"><b>CLARENCE TAKEOUT</b><br />
						Available Sunday - Thursday 11:30 am til 7:30 pm<br />
						Offering online orders only. Curbside pickup only.<br />
						-WE DO NOT ACCEPT PRE-ORDERS, ONLY ORDERS IN REAL TIME-
					</p>
				</div>
			</div>
		</div>
		<div class="reservation container">
			<h2>Gift Cards and Merch</h2>
			<div class="location">
				<div class="row">
					<div class="col-sm-12 col-lg-6 col">
						<img src="images/bb_giftcard.jpg" class="mx-auto home_img" alt="gift card">
						<p class="text-center home_p"><b>GIFT CARDS</b><br />
							E-Cards always available or pull up curbside<br />
							to purchase a swipeable giftcard<br />
							-CARDS ARE REDEEMABLE AT BOTH LOCATIONS AND 189 BURGER-
						</p>
					</div>
					<div class="col-sm-12 col-lg-6 col">
						<img src="images/bb_merch.jpg" class="mx-auto home_img" alt="merch">
						<p class="text-center home_p"><b>PICK UP OR SHIP OUR MERCH</b><br />
							Purchase Bar-Bill Merch to pick up curbside
							through our online ordering<br />
							-OR- Ship our march antionwide
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
