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
    <meta name="description" content="This page will contain some info about me.">
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
          <h2>What is the Schauer Organization?</h2>
            <p class="textBoxLeft">
                The Schauer Organization is a conglomerate of real esate and other ventures.
                We strive to make our clientele our greatest priority while keeping costs for them at a minimum.
                The holding company known as the Schauer Organization was founded in 2015 and has grown into many different ventures.
                It has it roots in providing housing to middle income households and later expanded into hotels and commercial real estate.
                Today, there are over 200 subsidiaries and even one spinoff company created in 2018.
            </p>
        </section>
        <section>
          <h2>Who is Ryan Schauer?</h2>
          <section class="photo"> 
            <div><img src="https://media-exp1.licdn.com/dms/image/C4E03AQES0WySq4cuvg/profile-displayphoto-shrink_200_200/0?e=1609977600&v=beta&t=pa9qDkT8X-B54n1n_H51vmBgeZlE7yyW4uk7UQ1Ok0M" alt="me" width="650" height="350"></div> <!--Will look for better photo-->
          </section>
          <p class="textBoxLeft">
              Ryan Schauer was born on a mild summer evening on June 27th, 1997 in Marshfield, WI.  
              At the time, Ryan was the 4th child and the first to his father.
              It was said that he didn't even cry when he was born, but those were just rumors.
              The young Ryan said his first words at the age of 11 months old and he was walking before that.<!-- This line is 100% true. -->
              Ryan then went on to Pre-kindergarten at Spencer Elementary in Spencer, WI and liked Pre-kindergarten so much he did it twice.
              Ryan would see his family expand with the adoption of two siblings from Columbia. <br>
              <br>
              Ryan would eventually make it on to High School where he would found what we call the Schauer Organization.
              He filed to incorporate the business the day after his 18th birthday. 
              With only the shirt on his back and a loan from his grandmother he begun to refurbish dilapidated buildings.
              He repaid his grandmother with interest within a year of business.
              While building his empire Ryan attended Chippewa Valley Technical College for Automation Engineering Technology.
              Then would later finish his education at the University of Wisconsin Oshkosh.
              
              
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