<!DOCTYPE html>
<head>
    <title>Contact Bar-Bill</title>
    <link rel="stylesheet" href="barbill.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
<header>
        <img src="images/bbwhite_logo.png" id="logo" alt="bar bill logo" width="10%">
        <h1>bar-bill tavern: East Aurora and Clarence, NY</h1><br />
        <nav>
            <a href="home.html" class="navlink">Home</a>
            <a href="menu.html" class="navlink">Menu</a>
            <a href="socialmedia.html" class="navlink">Social Mediat</a>
            <a href="aboutus.html" class="navlink">About Us</a>
            <a href="FAQ.html" class="navlink">FAQ</a>
            <a href="contact.php" class="navlink">Contact Us</a>
        </nav>
    </header>
</br>
<img src="http://www.buffaloeats.org/wp-content/uploads/2014/09/barbill4-1024x682.jpg" width="100%">
<h2>Contact Us </br> We will get back to you as soon as possible.</h2>
<div class="contactform">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="cf-group">
       <label>Name:</label><input type="text" name="name"></br>
    </div>
    <div class="cf-group">
       <label>E-mail:</label><input type="text" name="email"></br>
    </div>
    <div class="cf-group">
        <label>Phone:</label><input type="text" name="phone"></br>
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
                <input type="submit" class="button" value="Submit">
    </form> 
    </div>
<   </div id=php>
    <?php
    if(isset($_POST['submit'])){
        $name = "";
        $email = "";
        $phone = "";
        $comment= "";
        $location= "";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["name"])){
            $name = $_POST['name'];
        }else {
            echo "<h2> Name is Required</h2>";
        }   
        if(!empty($_POST["email"])){
            $email = $_POST['email'];
        }else {
            echo "<h2> Email is Required</h2>";
        }   
        if(!empty($_POST["phone"])){
            $phone = $_POST['phone'];
        }else {
            echo "<h2> Phone Number is Required</h2>";
        }   
        if(!empty($_POST["comment"])){
            $comment = $_POST['comment'];
        }else {
            echo "<h2> Please provide a comment</h2>";
        }   
        if(!empty($_POST["location"])){
            $location = $_POST['location'];
        }else {
            echo "<h2> Location is Required</h2>";
        }   
    }
    ?>
</body>
</html>