<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This page will allow the admin to update job.">
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
                 if($_POST['jobID'] != "") {
                   $ID = $_POST['jobID'];
                   $sql = "SELECT * FROM `jobOpenings` WHERE `openJobID`=?";
                   $statement = $db->prepare($sql);
                   $statement->execute(array($ID));
                   $row = $statement->fetch();
                   $currID = $row[0];
                   $title = $row[1];
                   $details = $row[2];
                   $location = $row[3];
                 
                   ?>
                   <section class="textBoxLeft">
                   <form method="POST" >                     
                    <h2>Edit Job Posting</h2>
                    <p>
                      <label for="IDUpdate">Job ID:</label>
                      <input type="text" id="IDUpdate" name="IDUpdate" placeholder="edit job ID" required value='<?php echo  $currID?>' style="font-size: 1.25em">
                    </p>
                    <p>
                      <label for="titleUpdate">Job Title:</label>
                      <input type="text" id="titleUpdate" name="titleUpdate" placeholder="edit job title" required value='<?php echo $title?>' style="font-size: 1.25em">
                    </p>
                    <p>
                      <label for="detailsUpdate">Job Details:</label>
                      <input type="text" id="detailsUpdate" name="detailsUpdate" placeholder="edit job details" required value='<?php echo $details?>' style="font-size: 1.25em">
                    </p>
                    <p>
                      <label for="locationUpdate">Job Location:</label>
                      <input type="text" id="locationUpdate" name="locationUpdate" placeholder="edit job location" required value='<?php echo $location?>' style="font-size: 1.25em">
                    </p>
                    <p>
                      <input type="submit" value="Submit">
                    </p>
                  </form>
                  </section>
                   <?php
      

                }
                   } else {
                    ?>
                    <section class="textBoxLeft">
                    <form method="POST" >
                    <p>
                      <label for="jobID">Job ID:</label>
                      <input type="text" id="jobID" name="jobID" placeholder="jobID please" required style="font-size: 1.25em" >
                    </p>
                    <p>
                      <input type="submit" value="Submit">
                    </p>
                    </form>
                   </section>
                    <?php
                   }

                ?>
            <?php
                 if (isset($_REQUEST['locationUpdate'])) {
                    $IDEdit = stripslashes($_REQUEST['IDUpdate']);
                    $titleEdit = stripslashes($_REQUEST['titleUpdate']);
                    $detailsEdit = stripslashes($_REQUEST['detailsUpdate']);
                    $locationEdit = stripslashes($_REQUEST['locationUpdate']);
                    $sql = "UPDATE jobOpenings SET jobTitle=?, jobDetails=?, jobLocation=? WHERE openJobID=?";
                    $stmt= $db->prepare($sql);
                    $stmt->execute([$titleEdit, $detailsEdit, $locationEdit, $IDEdit]);

                 }  
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
