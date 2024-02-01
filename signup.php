<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/signup.css">
    <title>KOHINOOR | Your place of dream</title>
</head>
<body>
<header>
    <div class="menu-btn" onclick="openMenu()">&equiv;</div>
     <img src="images/logo.png" alt="">
     <nav id="menu">
        <ul>
            <li><a href="#" class="close-btn" onclick="closeMenu()">X</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="property.php" class="active-page">Property</a></li>
            <li><a href="agent.php">Agents</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php">Contact Us</a></div>
    </header>

    <main>
    <form action="#" class="signup-form">
        <p class="signup-heading">Sign Up</p>
        <p class="top-text">Welcome To Kohinoor</p>
        <label><div><div class="label-text">Name</div> <input type="text" name="name" required></div></label>
        <label><div><div class="label-text">Email</div> <input type="email" name="email" required></div></label>
        <label><div><div class="label-text">Password</div> <input type="password" name="password" required></div></label>
        <label><div><div class="label-text">Repeat Password</div> <input type="password" name="repeat-password" required></div></label>
        <label><div><div class="label-text">Phone No.</div> <input type="number" name="phone-number" required></div></label>
        <label><div><div class="label-text">Password</div> <textarea name="address"  rows="10"></textarea></div></label>
        <div><input type="submit" value="Sign Up"></div>
        <div class="login-link">Already have an account? <a href="login.php">Login</a></div>
    </main>
    
    <?php      include "footer.php"         ?>
</body>
</html>