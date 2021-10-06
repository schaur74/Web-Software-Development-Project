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

                  if (isset($_REQUEST['location'])) {
                    $title = stripslashes($_REQUEST['title']);
                    $details = stripslashes($_REQUEST['details']);
                    $location = stripslashes($_REQUEST['location']);
                  
                    $sql = "INSERT INTO jobOpenings(jobTitle, jobDetails, jobLocation) VALUES (?,?,?)";
                    $statement = $db->prepare($sql);
                    $parameter = [$title, $details, $location];
                    $statement->execute($parameter);
                    $db = null;
    
                  } else {
                ?>
                  <section class="textBoxLeft">
                  <form method="POST" >                     
                    <h2>Create Job Posting</h2>
                    <p>
                      <label for="title">Job Title:</label>
                      <input type="text" id="title" name="title" placeholder="insert job title" required style="font-size: 1.25em">
                    </p>
                    <p>
                      <label for="details">Job Details:</label>
                      <textarea id="details" name="details" placeholder="insert job details" required rows="8" cols="60" style="font-size: 1.25em"></textarea>
                    </p>
                    <p>
                      <label for="location">Job Location:</label>
                      <input type="text" id="location" name="location" placeholder="insert job location" required style="font-size: 1.25em">
                    </p>
                    <p>
                      <input type="submit" value="Submit">
                    </p>
                    <p>
                      <input type="reset" value="Reset">
                    </p>
                    
                  </form>
                  <section>
                <?php
                }
              } else {
                  echo "You don't have permission to post a job.";
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