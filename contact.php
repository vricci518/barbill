<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Bar-Bill</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="css/barbill.css">
	<link rel="stylesheet" href="css/contact.css">
</head>

<body>
<header class="sticky-top">
		<img src="images/bbwhite_logo.png" id="logo" alt="bar bill logo">
		<h1>bar-bill tavern: East Aurora and Clarence, NY</h1><br />
		<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="btn btn-primary btn-lg" class="nav-link active" aria-current="page" href="home.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="btn btn-primary btn-lg" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Menus
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="eamenu.php">East Aurora Menu</a></li>
								<li><a class="dropdown-item" href="eatakeout.php">East Aurora Take Out</a></li>
								<li><a class="dropdown-item" href="clmenu.php">Clarence Menu</a></li>
								<li><a class="dropdown-item" href="cltakeout.php">Clarence Take Out</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="btn btn-primary btn-lg" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Follow Us
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="press.php">Press</a></li>
								<li><a class="dropdown-item" href="socialmedia.php">Social Media</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="btn btn-primary btn-lg" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Info
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
								<li><a class="dropdown-item" href="faq.php">FAQ</a></li>
								<li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
								<li><a class="dropdown-item" href="merch.php">Merchandise</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container">
		</br>
		<div id="CUH">
			<h2>Contact Us- we will get back to you as soon as possible.</h2>
		</div>
		<div class="error">
			<?php
			if (isset($_POST["submit"])) {
				$name = '';
				$email = '';
				$phone = '';
				$comment = '';
				$location = '';

				$errors =  array('name' => '', 'email' => '', 'phone' => '', 'comment' => '', 'location' => '');

                if (!empty(trim($_POST["name"]))) {
                    $name = trim($_POST['name']);
                } else {
                    echo $errors['name'] = "<h2> Name is Required</h2>";
                }
                if (!empty(trim($_POST["email"]))) {
                    $email = trim($_POST['email']);
                } else {
                    echo $errors['email'] = "<h2> Email is Required</h2>";
                }
                if (!empty(trim($_POST["phone"]))) {
                    $phone = trim($_POST['phone']);
                } else {
                    echo $errors['phone'] = "<h2> Phone Number is Required</h2>";
                }
                if (!empty(trim($_POST["comment"]))) {
                    $comment = trim($_POST['comment']);
                } else {
                    echo $errors['comment'] = "<h2> Please provide a comment</h2>";
                }
                if (!empty($_POST["location"])) {
                    $location = $_POST['location'][0];
                } else {
                    echo $errors['location'] = "<h2> Location is Required</h2>";
                }
                if (!array_filter($errors)) {
                    echo "<h2>Thank you!</h2>";
                }
            }
            ?>
        </div>
        <div class="contactform">
            <form action="contact.php" method="post">
                <div class="cf-group">
                    <label>Name:</label><input type="text" name="name" value="<?= ($name ?? ''); ?>"></br>
                </div>
                <div class="cf-group">
                    <label>E-mail:</label><input type="text" name="email" value="<?= ($email ?? ''); ?>"></br>
                </div>
                <div class="cf-group">
                    <label>Phone:</label><input type="text" name="phone" value="<?= ($phone ?? ''); ?>"></br>
                </div>
                <div class="cf-group">
                    <label>Comment:</label><textarea type="text" name="comment" rows="5" cols="50"><?= ($comment ?? ''); ?></textarea></br>
                </div>
                <div class="cf-group">
                    <label>Location:</label><input type="radio" value="EA" name="location[]" <?= (!empty($location) && $location == "EA" ? 'checked' : ''); ?>>East Aurora
                    <input type="radio" value="CL" name="location[]" <?= (!empty($location) && $location == "CL" ? 'checked' : ''); ?>>Clarence </br>
                </div>
                <div class="cf-group">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile"></br>
                </div>
                <input type="submit" class="button" name="submit" value="Submit">
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <h2>Our Locations</h2>
            <p><em>East Aurora Takeout</em><br />
                191 Main Street, Rear<br />
                East Aurora, NY 14052<br />
                (716) 652-7959
            </p>
            <p><em>East Aurora</em><br />
                185 Main Street<br />
                East Aurora, NY 14052<br />
                (716) 652-7959
            </p>
            <p><em>Clarence</em><br />
                8326 Main Street<br />
                Clarence, NY 14221<br />
                (716) 710-9464
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>