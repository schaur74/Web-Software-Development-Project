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
    <meta name="description" content="This page will allow a user to send us an email.">
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
        <h2>Please asks us a question</h2>
          <section class="textBoxLeft"> 
              <h2>Ask us</h2>
                  <form method="POST" >
                    <p>
                      <label for="title"></label>
                      <input type="text" id="email" name="email" placeholder="email" required style="font-size: 1.25em">
                    </p>
                    <p>
                      <label for="question"></label>
                      <textarea id="question" name="question" placeholder="question" required rows="8" cols="60" style="font-size: 1.25em"></textarea>
                    </p>
                    <p>
                      <input type="submit" value="Submit">
                    </p>
                    <p>
                      <input type="reset" value="Reset">
                    </p>
                  </form>
                  <?php
                    if (isset($_REQUEST['question'])) {
                      $email = stripslashes($_REQUEST['email']);
                      $question = stripslashes($_REQUEST['question']);
                      echo $question;
                      require_once('RMS_db_credentials.php');
                      $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER,
                        DB_USER,
                        DB_PWD,
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


                      $sql = "INSERT INTO questions(email, question) VALUES (?,?)";
                      $statement = $db->prepare($sql);
                      $parameter = [$email, $question];
                      $statement->execute($parameter);
                      $db = null;
                    }
                  ?>
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