<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/index.css">
    <title>KOHINOOR | Your place of dream</title>
</head>
<body>
    <header>
    <div class="menu-btn" onclick="openMenu()">&equiv;</div>
    <img src="images/logo.png" alt="">
     <nav id="menu">
        <ul>
            <li><a href="#" class="close-btn" onclick="closeMenu()">X</a></li>
            <li><a href="index.php" class="active-page">Home</a></li>
            <li><a href="property.php">Property</a></li>
            <li><a href="agent.php">Agents</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php">Contact Us</a></div>
    </header>

    <main>

        <div class="hero-section">
     <h1>Best Way To Find <br>Your Place Of Dream</h1>
     <p>Welcome to Kohinoor! We are a real estate company that give you the best.Our team of experienced<br> real estate professionals is dedicated to helping you find the perfect home that meets your budget and needs.</p>
     <div class="cta-col"><span class="hero-cta"><a href="login.php">Buy</a></span><span class="hero-cta"><a href="login.php">Sell</a></span></div>
     <div class="selection"><form action="">
        <div>
            <p>Property Type</p><select name="property-type"><option value="Land">Land</option><option value="House">House</option></select>
        </div>
        <div>
            <p>Location</p><select name="location"><option value="new-york">New York</option><option value="california">California</option> </option><option value="texas">Texas</option> <option value="florid">Florida</option> <option value="alaska">Alaska</option></select>
        </div>
        <div>
            <p>Price Range</p><select name="property-type"><option value="Land">$10,000--$50,000</option><option value="House">$51,000--$100,000</option><option value="House">$100,000-$300,000</option> <option value="House">$300,000-$600,000</option> <option value="House">$600,000-$1,500,000</option></select>
        </div>
     </form></div>
        </div>

        <div class="second-section">
            <h2>Properties For Sale</h2>
            <p>Explore our selection of properties for sale, ranging from cozy townhouses to luxurious mansions.</p>
            <div class="properties-slide">
            <div class="image-card">
                <img src="images/house1.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">409 Fair St Carmel, New York(NY), 10512</p>
                <h3 class="tagline">Cape Cod House</h3>
                <p class="desc">A majestic and well maintained Cape Cod House building stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$700,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

             <div class="image-card">
                <img src="images/house2.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">104 Town View Dr Wappingers Falls, New York(NY), 12590</p>
                <h3 class="tagline">Duplex</h3>
                <p class="desc">A majestic and well maintained duplex building stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$850,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

             <div class="image-card">
                <img src="images/house3.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">579 State 55 Rte Napanoch, New York(NY), 12458</p>
                <h3 class="tagline">Bungalow</h3>
                <p class="desc">A majestic and well maintained Bungalow building stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$750,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

             <div class="image-card">
                <img src="images/house4.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">7 Kossar Pl Ellenville, New York(NY), 12428</p>
                <h3 class="tagline">Colonial Style House</h3>
                <p class="desc">A majestic and well maintained Colonial Style House stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$1,000,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

             <div class="image-card">
                <img src="images/house5.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">58 Warren St Ellenville, New York(NY), 12428</p>
                <h3 class="tagline">Craftsman House</h3>
                <p class="desc">A majestic and well maintained duplex Craftsman House stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$800,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

             <div class="image-card">
                <img src="images/house6.jpg" alt="">
                <p class="location"><img src="images/location.png" alt="">222 Hillside Ln Ellenville, New York(NY), 12428</p>
                <h3 class="tagline">Mediterranean House</h3>
                <p class="desc">A majestic and well maintained Mediterranean House stood proudly in the middle of a quiet and friendly neighborhood. </p>
                <p class="price"><span>$2,500,000</span></p>
                <p class="buy-now"><span><a href="login.php">Buy Now</a></span></p>
             </div>

            </div>
        </div>

        <div class="intro-section">
           <div><img src="images/house9.jpg" alt=""></div>
           <div>
            <h3>Who We Are</h3>
            <p> 
               Welcome to Kohinoor Real Estate, where dreams find a home. Founded with a vision to redefine real estate excellence, Kohinoor is committed to crafting living spaces that blend opulence with functionality.
               At Kohinoor, our journey is built on a foundation of integrity, innovation, and customer-centricity. With years of experience in the real estate industry, we have successfully transformed aspirations into reality for countless individuals and families. Our unwavering commitment to quality ensures that every Kohinoor property stands as a testament to architectural finesse and attention to detail.
            </p>
            <div  class="read-more"><span><a href="about.php">Read More</a></span></div>
           </div>
        </div>

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
    </main>

    <?php include "footer.php"   ?>
</body>
</html>