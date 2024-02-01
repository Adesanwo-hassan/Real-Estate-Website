<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/contact.css">
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
     <div class="cta"><a href="contact.php" class="active">Contact Us</a></div>
    </header>
  <!-- main content start here -->
    <main>

    <div class="map-and-contactinfo">
             <div class="googlemap">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.332879239417!2d-73.36478672492466!3d40.710687971393824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82cae8b04c939%3A0xc69d5fc78d3cf488!2s365%20NY-109%2C%20West%20Babylon%2C%20NY%2011704%2C%20USA!5e0!3m2!1sen!2sng!4v1703682299754!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="contact-info">
               <h2>Contact</h2>
                <p>Thank you for your interest in reaching out to us! We value your feedback, questions, and inquiries. Feel free to contact us using the information provided below.</p>
                <div><span><img src="images/location.png" alt=""> <span>Address</span></span>  <p>365 NY-109, West Babylon, NY 11704, USA</p></div>
                <div><span><img src="images/telephone.png" alt=""> <span>Phone</span></span>  <p>(631) 226-5349</p></div>
                <div><span><img src="images/mail.png" alt=""> <span>Email</span></span> <p>adesanwohassan@gmail</p></div>
            </div>
         </div>   


       <div class="fancy-line"><div></div><div class="line"></div></div>


            <form action="#">
        <h2>We Love To Hear From You</h2>
        <p>For general inquiries or support, you can also fill out the contact form below, and we will get back to you soon. Your satisfaction is our priority, and we look forward to hearing from you.</p>
     <div class="inputfield">
        <div>
            <div><label for="name">Name*</label></div> 
            <input type="text" name="firstname" placeholder="Fill in your name" id="name" required>
        </div>
        <div>
            <div><label for="mail">Email*</label></div> 
            <input type="email" name="mail" placeholder="please type in your email" id="mail" required>
        </div>
         <div>
            <div><label for="subject">Subject</label></div>
            <input type="text" name="subject" placeholder="Subject of message" id="subject" required>
         </div>
         <div>
            <div><label for="message">Message*</label></div>
            <textarea name="" id="message" cols="30" rows="5" placeholder="Type in your message" required></textarea>
         </div>
         <div><input type="submit" class="submit-btn"></div>
      </div>
            </form>

    </main>
    <!-- main content stop here -->
      
    <?php   include "footer.php"             ?>
</body>
</html>