<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This page will contain my resume.">
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
            <li class="navlink"><a href="schauer_Towers_Rail.php" style="text-decoration: none">Stock Info</a></li>
            <li class="navlink"><a href="schauer_Towers_Ask_us.php" style="text-decoration: none">Asks us a question</a></li>
            <li class="navlink"><a href="schauer_Towers_Careers.php" style="text-decoration: none">Careers</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <section>
            <?php
              session_start();
              if ($_SESSION["currentUser"] == 1) {
                require_once('RMS_db_credentials.php');
                $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER,
                  DB_USER,
                  DB_PWD,
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                  if (isset($_REQUEST['jobID'])) {
                    $ID = $_POST['jobID']; 
                    $sql = "DELETE FROM jobOpenings WHERE openJobID =?"; 
                    $statement = $db->prepare($sql);
                    $statement->execute([$ID]);
                
                } else {
                  ?>
                  <section class="textBoxLeft">
                  <form method="POST" >
                    <p>
                      <label for="jobID">Job ID:</label>
                      <input type="text" id="jobID" name="jobID" placeholder="jobID please" required style="font-size: 1.25em">
                    </p>
                    <p>
                      <input type="submit" value="Submit">
                    </p>
                  </form>
                  </section>
                  <?php
                  }
                }
                ?>
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