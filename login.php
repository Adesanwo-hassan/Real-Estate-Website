<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/login.css">
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
            <li><a href="property.php">Property</a></li>
            <li><a href="agent.php">Agents</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php">Contact Us</a></div>
    </header>

    <main>
    <form action="#" class="login-form">
        <h2 class="login-heading">LOGIN</h2>
        <p class="top-text">Welcome back</p>
        <label><div><div class="label-text">Email</div> <input type="email" name="Email" required></div></label>
        <label><div><div class="label-text">Password</div> <input type="password" name="password" id="" required></div></label>
        <div class="forgetpassword-link"><a href="#">Forgot password?</a></div>
        <label><div class="remember-me-option"><input type="checkbox" name="remember-me">Remember me</div></label>
        <div><input type="submit" value="Login"></div>
        <div class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></div>
     </form>
    </main>
    
    <?php   include "footer.php"             ?>
</body>
</html>