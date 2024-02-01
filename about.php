<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/about.css">
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
            <li><a href="about.php" class="active-page">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php">Contact Us</a></div>
    </header>

    <main>
    <h3><span>About Us</span></h3>
      <div class="about-content">
        <p>
        Welcome to Kohinoor Real Estate, where dreams find a home. Founded with a vision to redefine real estate excellence, Kohinoor is committed to crafting living spaces that blend opulence with functionality.
        </p>
        <p>
        At Kohinoor, our journey is built on a foundation of integrity, innovation, and customer-centricity. With years of experience in the real estate industry, we have successfully transformed aspirations into reality for countless individuals and families. Our unwavering commitment to quality ensures that every Kohinoor property stands as a testament to architectural finesse and attention to detail.
        </p>
        <p>
        We take pride in our diverse portfolio, featuring residential, commercial, and mixed-use developments that cater to a spectrum of preferences and lifestyles. From luxurious apartments with panoramic views to vibrant commercial spaces designed for business success, Kohinoor properties are thoughtfully curated to meet the evolving needs of our discerning clientele.
        </p>
        <p>
        What sets Kohinoor apart is not just the bricks and mortar but the relationships we build. Our team of seasoned professionals is dedicated to providing personalized service, guiding you through every step of the real estate journey. Whether you are a first-time homebuyer or a seasoned investor, Kohinoor's expertise ensures a seamless experience, from property selection to possession.
        </p>
        <p>
        Sustainability is at the heart of our ethos. We are committed to eco-friendly practices, ensuring that our developments contribute positively to the environment and the communities in which they are situated. Kohinoor stands as a beacon of responsible development, blending modern luxury with a commitment to a greener, more sustainable future.
        </p>
        <p>
        As we continue to evolve and innovate, Kohinoor remains steadfast in its pursuit of excellence. Join us on this journey, where every property is more than a structure—it's a promise of a better, brighter future. Kohinoor Real Estate, where your dreams come home.
        </p>
      </div>

     <!-- Testimony section start here -->
     <div class="third-section">
        <h2>Our Clients Say</h2>
        <div class="client-slide">
          <div class="client-card">
            <img src="images/client1.jpg" alt="client picture">
            <h4>Alicia johnson</h4>
            <h5>Manager:Dangote group of company</h5>
            <p>I am very impressed with the level of services provided by Kohinoor company.Their staff were very helpful and knowledgeable throughout the process of selling one of my property.</p>
          </div>

          <div class="client-card">
            <img src="images/client2.jpg" alt="client picture">
            <h4>Kate Shaw</h4>
            <h5>Manager:Dangote group of company</h5>
            <p>I am so grateful to Kohinoor company for helping us find our new home.They made the process of buying a house so easy and stress free.</p>
          </div>

          <div class="client-card">
            <img src="images/client3.jpg" alt="client picture">
            <h4>Robert Anderson</h4>
            <h5>Manager:Dangote group of company</h5>
            <p>I am impressed by Kohinoor company professionalism and their dedication to customer services. We couldn't be happier with our new home.</p>
          </div>

          <div class="client-card">
            <img src="images/client4.jpg" alt="client picture">
            <h4>Kyla Galdot</h4>
            <h5>Manager:Dangote group of company</h5>
            <p>I was so lucky to find Kohinoor company. They were knowledgeable,patient, and understanding throughout the entire process. I would recommend them to anyone looking to buy or sell a home.</p>
          </div>

          </div>
        </div>
     </div>
     <!-- Testimony section stop here -->
    </main>
    
    <?php   include "footer.php"            ?>
</body>
</html>