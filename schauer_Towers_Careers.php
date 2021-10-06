<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This page contains all the job openings.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="schauer_Org.css">

    <?php
           session_start();
           $userRow = -1;
           require_once('RMS_db_credentials.php');
           $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER,
             DB_USER,
             DB_PWD,
             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    ?>

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
        <h2>Careers at the Schauer Organization</h2>
        <section class="textBoxLeft">
          <p>
            <a href="schauer_Towers_Careers_Create_Account.php" style="text-decoration: none">Click here to create an account.</a>
          </p>
        </section>
        <section class="textBoxLeft" >
          <h2>User Login</h2>
          <form method="POST">
            <p>
              <label for="userName"></label>
              <input type="text" id="userName" name="userName" placeholder="username" required style="font-size: 1.25em">
            </p>
            <p>
              <label for="password"></label>
              <input type="password" id="password" name="password" placeholder="password" style="font-size: 1.25em" required>
            </p>
            <p>
              <input type="submit" value="Submit">
            </p>
            <p>
              <input type="reset" value="Reset">
            </p>
          </form>
        </section>
        <?php
             if (isset($_REQUEST['userName'])) {
              if($_POST['userName'] != "" || $_POST['password'] != "") {
                $userName = $_POST['userName'];
			          $password = $_POST['password'];
                $sql = "SELECT * FROM `users` WHERE `userName`=? AND `userPassword`=? ";
                $statement = $db->prepare($sql);
                $statement->execute(array($userName,$password));
                $row = $statement->fetch();
                $_SESSION["currentUser"] = $row[0];
              }
             }

             if($_SESSION["currentUser"] == 1){
             ?>
             <section class="textBoxLeft">
               <p>
                 <a href="schauer_Towers_Careers_Create_Job_Posting.php" style="text-decoration: none">Click here to create a job posting.</a>
               </p>
             </section>
             <section class="textBoxLeft">
               <p>
                 <a href="schauer_Towers_Careers_Edit.php" style="text-decoration: none">Click here to edit a job posting.</a>
               </p>
             </section>
             <section class="textBoxLeft">
               <p>
                 <a href="schauer_Towers_Careers_delete.php" style="text-decoration: none">Click here to delete a job posting.</a>
               </p>
             </section>
             <?php 
             }
 
            if($_SESSION["currentUser"] > -1){
              $sql = "SELECT openJobID, jobTitle, jobDetails, jobLocation FROM jobOpenings WHERE openJobID >= 0";
              $statement = $db->query($sql);
              foreach ($statement as $row) {
                ?> 
                <section class="textBoxLeft">
                <h2> <?php
                echo "$row[openJobID] - $row[jobTitle]<br>\n";
                ?> </h2> <?php
                echo "$row[jobDetails]<br>\n";
                echo "<br>\n";
                echo "$row[jobLocation]<br>\n";
                ?></section><?php
              }
              ?>
              <section class="textBoxLeft">
               <p>
                 <a href="schauer_Towers_Homepage.php" style="text-decoration: none">Logout</a>
               </p>
              </section>
              <?php
            }

            if($_SESSION["currentUser"] > 1){
              ?>
                <section class="textBoxLeft">
                  <form action="file_upload.php" method="post" enctype="multipart/form-data">
                    Resume? <input type="file" name="fileToUpload" id="fileToUpload"> <br>
                    <input type="submit" value="Upload" name="submit">
                  </form>
                </section>
                <?php

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