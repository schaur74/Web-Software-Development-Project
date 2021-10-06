<?php
  session_start();
  $_SESSION["currentUser"] = -1;
?>
<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This page will contain my real estate profolio.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="schauer_Org.css">

  </head>
  <body>
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
      <section>
        <h2>Come stay with us in Fiji</h2> 
        <div class="photo">
          <img src="https://media.istockphoto.com/photos/couple-relaxing-in-an-over-water-bungalow-picture-id173951979?b=1&k=6&m=173951979&s=170x170&h=kVf0KOWBR1TnloDb3rLCE7VmfdtPnbreuWiTUSeY0zc=" alt="Fiji" width="850" height="450" >
        </div>
        <p class="textBoxCenter">
            Come stay with us at our five star resort in Suva, Fiji.
            This luxury resort represents the only the finest our organization has to offer.
            This resort was acquired in early 2019 and has beach front property.
        </p>
      </section>

      <section>
        <h2>Or come to New York to stay at the famous Commodore Hotel.</h2> 
        <div  class="photo">
          <img src="https://cloud.ctbuh.org/global-news/2019-08/trump.jpg" alt="Commodore" width="850" height="450" >
        </div>
        <p class="textBoxCenter">
            The Big Apple is where dreams come true.
            Staying with us you are able to visit the heart of the United States and the global financial system.
            New York as plenty to offer in terms of dining and entertainment.
            There are over 25,000 resturants in the city alone!
        </p>
      </section>

      <section>
        <h2>How about Moscow?</h2> 
        <div  class="photo">
          <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/986/98681415.jpg" alt="Cosmos" width="850" height="450" >
        </div>
        <p class="textBoxCenter" >
            The historic city of Moscow is a must see.
            This is our first attempt at international real estate.
            The opportunities of things to do in the heart of Russia is endless!
        </p>
      </section>
    
    </main>
    <footer>
        <p>
            Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the
            Schauer Organization. Nothing on the site should be construed in any way as being
            officially connected with or representative of The Schauer Organization.
        </p>
        <p>
          <a href="http://validator.w3.org/check/referer">Validate Me</a>
        </p>
    </footer>
  </body>
</html>