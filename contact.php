<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Bar-Bill</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="css/bb_style.css">
	<link rel="stylesheet" href="css/bb_common.css">
</head>

<body>
<?php include 'header.php'; ?>
	<div class="container">
		</br>
		<div class="cuh">
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
    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
