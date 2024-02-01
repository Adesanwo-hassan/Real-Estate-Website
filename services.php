<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/service.css">
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
            <li><a href="services.php" class="active-page">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php" class="active">Contact Us</a></div>
    </header>
   <!-- Main page start here -->
   <main>
    <h2>Our Services</h2>
    <div class="service-container">
        <div class="single-box">
            <img src="images/buying-house.png" alt="icon">
            <h3>Buying of House</h3>
            <p>"When you're ready to buy a house, you want a real estate company that can provide you with expert guidance and support throughout the process. Our team of experienced real estate agents can help you find the perfect home that fits your needs and budget. We'll work with you to understand your goals and priorities, and we'll use our knowledge of the local market to find homes that meet your criteria.
             "Once we've found some homes that you're interested in, we'll help you schedule tours and provide you with all the information you need to make an informed decision.
            </p>
        </div>

        <div class="single-box">
            <img src="images/selling-house.png" alt="icon">
            <h3>Selling of House of House</h3>
            <p>"Selling your house is a big decision, and you want a real estate company that will help you get the best possible price for your home. Our team of expert agents will work with you to prepare your home for the market, stage it for showings, and market it to a wide range of potential buyers. We'll make sure your listing reaches the largest possible audience through our extensive marketing network.
             "When offers start coming in, we'll help you evaluate them and choose the best one for you. We'll also guide you through the closing process, making sure that all the paperwork is in order and that everything goes smoothly.
            </p>
        </div>

        <div class="single-box">
            <img src="images/property-management.png" alt="icon">
            <h3>Property management</h3>
            <p>"Property management is an important part of maintaining a successful rental property, and our team of experienced property managers is here to help. We'll take care of everything from marketing your property to screening tenants to collecting rent to handling maintenance issues. We'll also keep you informed of any changes to state and local laws that may affect your property.
               "We understand that every property is unique, so we'll work with you to create a customized management plan that meets your needs. Whether you have a single-family home or a large apartment complex, we're here to help you get the most out of your investment.
            </p>
        </div>

        <div class="single-box">
            <img src="images/land-development.png" alt="icon">
            <h3>Land Development</h3>
            <p>"Land development is a complex process, and we have the expertise to help you navigate it successfully. We'll work with you to create a land development plan that meets your goals and complies with all applicable laws and regulations. We'll also help you find the right professionals to assist with things like engineering, zoning, and construction.
             "We're experts at finding the best land for development, and we'll help you evaluate the potential of a property before you purchase it. We'll also help you assess the market demand for your development and determine the optimal size, layout, and amenities.
            </p>
        </div>

        <div class="single-box">
            <img src="images/relocation.png" alt="icon">
            <h3>Relocation Assistance</h3>
            <p>"Moving to a new city can be exciting, but it can also be stressful. That's why we offer relocation assistance to help make the process as smooth as possible. We'll work with you to understand your needs and goals, and we'll create a personalized relocation plan that includes everything from finding a new home to helping you get settled in your new community.
               "We'll provide you with information about the area, including schools, restaurants, and cultural activities. We can also connect you with other professionals, such as accountants, lawyers, and insurance agents, to help you get settled in your new home.
            </p>
        </div>

        <div class="single-box">
            <img src="images/consultation.png" alt="icon">
            <h3>Consultation Services</h3>
            <p>"Are you wondering if it's the right time to buy or sell a property? Or maybe you're not sure how to go about getting the best possible price. Our consultation service can help you with all of this and more. We'll sit down with you and discuss your real estate goals. We'll take the time to learn about your specific needs and offer our expert advice on the best way to achieve them.
                "We'll provide you with a detailed report outlining our recommendations and the steps you'll need to take to achieve your goals.
            </p>
        </div>
    </div>
   </main>


   <?php     include "footer.php"        ?>