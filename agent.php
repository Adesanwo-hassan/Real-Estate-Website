<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/house.png">
    <link rel="stylesheet" href="stylesheets/generalstyle.css">
    <link rel="stylesheet" href="stylesheets/agent.css">
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
            <li><a href="agent.php" class="active-page">Agents</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
     </nav>
     <div class="cta"><a href="contact.php">Contact Us</a></div>
    </header>


    <main>
        <h2>Meet Expert Team Members</h2>
        <p>Our team members are highly experienced and professional individual.We have over 10 nationalities, so that client can confidently interact with us.</p>
        <div class="all-agent">
            <div class="agent-single-card">
                <img src="images/agent1.jpg" alt="agent picture">
                <h4>Elena Cruise</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent2.jpg" alt="agent picture">
                <h4>Peter Ryan</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent3.jpg" alt="agent picture">
                <h4>Sandra Williams</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent4.jpg" alt="agent picture">
                <h4>Matt Holand</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent5.jpg" alt="agent picture">
                <h4>Bethel Brian</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent6.jpg" alt="agent picture">
                <h4>Helen Shaw</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent7.jpg" alt="agent picture">
                <h4>Janson Bush</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent8.jpg" alt="agent picture">
                <h4>Mohammed Akinyemi</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent9.jpg" alt="agent picture">
                <h4>Hans Pollante</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent10.jpg" alt="agent picture">
                <h4>Hoffman Chris</h4>
                <h5>Consultant Agent</h5>
            </div>
            <div class="agent-single-card">
                <img src="images/agent11.jpg" alt="agent picture">
                <h4>Bill Maxey</h4>
                <h5>Consultant Agent</h5>
            </div>
            
        </div>
    </main>
    
    <?php      include "footer.php"      ?>
</body>
</html>