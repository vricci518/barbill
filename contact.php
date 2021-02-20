<!DOCTYPE html>

<head>
    <title>Contact Bar-Bill</title>
    <link rel="stylesheet" href="css\barbill.css">
    <link rel="stylesheet" href="css\contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>

<body>
    <header>
        <img src="images/bbwhite_logo.png" id="logo" alt="bar bill logo" width="10%">
        <h1>bar-bill tavern: East Aurora and Clarence, NY</h1><br />
        <nav>
            <a href="home.php" class="navlink">Home</a>
            <a href="menu.php" class="navlink">Menu</a>
            <a href="socialmedia.php" class="navlink">Social Media</a>
            <a href="aboutus.php" class="navlink">About Us</a>
            <a href="faq.php" class="navlink">FAQ</a>
            <a href="contact.php" class="navlink">Contact Us</a>
        </nav>
    </header>
    <div class="maincontact">
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

        if (!empty($_POST["name"])) {
            $name = trim($_POST['name']);
        } else {
            echo $errors['name'] = "<h2> Name is Required</h2>";
        }
        if (!empty($_POST["email"])) {
            $name = trim($_POST['email']);
        } else {
            echo $errors['email'] = "<h2> Email is Required</h2>";
        }
        if (!empty($_POST["phone"])) {
            $phone = trim($_POST['phone']);
        } else {
            echo $errors['phone'] = "<h2> Phone Number is Required</h2>";
        }
        if (!empty($_POST["comment"])) {
            $comment = trim($_POST['comment']);
        } else {
            echo $errors['comment'] = "<h2> Please provide a comment</h2>";
        }
        if (!empty($_POST["location"])) {
            $location = trim($_POST['location']);
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
                <label>Name:</label><input type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>"></br>
            </div>
            <div class="cf-group">
                <label>E-mail:</label><input type="text" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"></br>
            </div>
            <div class="cf-group">
                <label>Phone:</label><input type="text" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>"></br>
            </div>
            <div class="cf-group">
                <label>Comment:</label><textarea name="comment" rows="5" cols="50"></textarea></br>
            </div>
            <div class="cf-group">
                <label>Location:</label><input type="radio" name="location" value="EA">East Aurora
                <input type="radio" name="location" value="CL">Clarence </br>
            </div>
            <div class="cf-group">
                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="myfile"></br>
            </div>
            <input type="submit" class="button" name="submit" value="Submit">
        </form>
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
    </div>
</body>

</html>