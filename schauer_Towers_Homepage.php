<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This is my company's homepage">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="schauer_Org.css">
    <script src="homepage_dynamic.js" defer></script>
  </head>
  <body>
    <?php
      session_start();
      $_SESSION["currentUser"] = -1;
    ?>
    <header>
      <h1>The Schauer Organization</h1>
      <nav>
        <ul class="schauerOrglinks">
            <li class="navlink"><a href="schauer_Towers_Homepage.php" style="text-decoration: none">Home</a></li>
            <li class="navlink"><a href="schauer_Towers_About.php" style="text-decoration: none">About us</a></li>
            <li class="navlink"><a href="schauer_Towers_Real_Estate.php" style="text-decoration: none">Stay with us</a></li>
            <li class="navlink"><a href="schauer_Towers_Rail.php" style="text-decoration: none">Stock info</a></li>
            <li class="navlink"><a href="schauer_Towers_Ask_us.php" style="text-decoration: none">Asks us a question</a></li>
            <li class="navlink"><a href="schauer_Towers_Careers.php" style="text-decoration: none">Careers</a></li>
          </ul>
      </nav>
    </header>
    <main>
          <h2>Welcome to the Schauer Organization</h2>
            <div class="photo">
              <img src="https://images.freeimages.com/images/small-previews/8f5/paradise-1408385.jpg" id="currentImage" alt="Fiji" width="850" height="450" > 
            </div>
            <section class="textBoxLeft">
              <span id ="text">Fishing trip anybody?</span>
            </section>
          <p class="textBoxCenter">
            Welcome to the Schauer Organization's Website. <br> 
            We are pleased to know that you have great taste when it comes to you leasure time. <br>
            Here at the Schaur Organization we only provide 5 star service to our clientele. <br>
            From our world class hotels and restaurants to our modern transportation selection you don't have to deal with a third party with your stay. <br>
            When you stay with us your more than just a customer, you are part of the Schauer Organization's family. <br>
          </p>
    </main>
    <footer>
        <p>
            Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the
            Schauer Organization. Nothing on the site should be construed in any way as being
            officially connected with or representative of The Schauer Orgainization.
        </p>
        <p>
          <a href="http://validator.w3.org/check/referer">Validate Me</a>
        </p>
    </footer>
  </body>
</html>