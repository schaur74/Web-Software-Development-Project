<!DOCTYPE html>     
<html lang="en">
  <head>
    <title>Schauer Tower</title>
    <meta charset="utf-8">
    <meta name="author" content="Ryan Schauer">
    <meta name="description" content="This will allow a user to create an account.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="schauer_Org.css">

  </head>
  <body>
    <header>
      <h1>The Schauer Organization</h1>
      <nav>
        <ul class="schauerOrglinks">
            <li class="navlink"><a href="schauer_Towers_Homepage.php" style="text-decoration: none">Home</a></li>
            <li class="navlink"><a href="schauer_Towers_About.php"  style="text-decoration: none">About us</a></li>
            <li class="navlink"><a href="schauer_Towers_Real_Estate.php" style="text-decoration: none">Stay with us</a></li>
            <li class="navlink"><a href="schauer_Towers_Rail.php" style="text-decoration: none">Stock Info</a></li>
            <li class="navlink"><a href="schauer_Towers_Ask_us.php" style="text-decoration: none">Asks us a question</a></li>
            <li class="navlink"><a href="schauer_Towers_Careers.php"  style="text-decoration: none">Careers</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <section>
            <?php
              require_once('RMS_db_credentials.php');
              $db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER,
                DB_USER,
                DB_PWD,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
              if (isset($_REQUEST['userName'])) {
                $firstName = stripslashes($_REQUEST['firstName']);
                $lastName = stripslashes($_REQUEST['lastName']);
                $userName = stripslashes($_REQUEST['userName']);
                $userEmail = stripslashes($_REQUEST['email']);
                $password = stripslashes($_REQUEST['password']);
              
                $sql = "INSERT INTO users(firstName, lastName, userName, userEmail, userPassword) VALUES (?,?,?,?,?)";
                $statement = $db->prepare($sql);
                $parameter = [ $firstName, $lastName, $userName, $userEmail, $password];
                $statement->execute($parameter);
                $db = null;

              } else {
            ?>
            <section class="textBoxLeft">
              <form method="POST" >
                <h2>Create Login</h2>
                <input type="text" class="login" name="firstName" placeholder=" first name" required style="font-size: 1.25em" >
                <input type="text" class="login" name="lastName" placeholder="last name" required style="font-size: 1.25em" >
                <input type="text" class="login" name="userName" placeholder="Username" required style="font-size: 1.25em">
                <input type="text" class="login" name="email" placeholder="Email Adress" required style="font-size: 1.25em">
                <input type="password" class="login" name="password" placeholder="Password" required style="font-size: 1.25em">
                <input type="submit" value="Submit">
              </form>
            </section>
            <?php
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