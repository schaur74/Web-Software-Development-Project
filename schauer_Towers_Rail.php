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
    <meta name="description" content="This page will contain stock info.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="schauer_Org.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="Stock.js" defer></script>
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
        <section class="textBoxLeft">
            <h2>Ticker: RMS</h2> 
            <p>
              Price:
              <label id="price"></label>
            </p>
            <p>
              Dividend Yield:
              <label id="dividendYield"></label>
            </p>
            <p>
              P/E Ratio:
              <label id="P/E_Ratio"></label>
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