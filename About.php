<html>
 <?php
    Session_start();    
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $username=$_SESSION["username"];
    ?>
  <head>
   <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>
      <title>Selamat Datang di SCMES</title>
      </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php">Home</a>
       <a id="News" href="news.php">News</a>
       <a id="Booking" href="booking.php">Booking</a>
       <a id="Review" href="review.php">Review</a>
       <a id="Contact" href="contact.php">Contact us</a>
       <a id="Partners" href="partners.php">Partners</a>
          <a id="About" href="about.php" style="background-color: white;color: coral">About us</a>
             <?php
            if ($username==""){
                echo'
                <a id="homesearch" href="search.php" style="margin-left:15%;"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                ';
            }
          else{
               echo '
                <a id="homename"  style="margin-left:15%;">Hi, '.$username.'</a>
                <a id="homesearch" href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                ';
          }
          ?>
       </div>

       </nav>
      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>
<h1 style="color: white">SCMES Indonesia</h1>
    <p style="color: white;width: 70%;margin: 0 auto;">
        The GNU General Public License is intended to guarantee your freedom to share and change free software – to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation’s software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Library General Public License instead.) You can apply it to your programs, too.

If you buy a template released under this GNU General Public License v3.0, you can use it on any number of projects belonging to either you or your clients without any limitations.

This license allows you to modify the template and its sources to suit your needs. You can also redistribute the customized template under the terms of the GPL license, so it’s a great solution in case you’re a website developer working on a few websites at time.

In case the theme is released under the GNU GPLv3 license the stock images used in this theme and its .psd source files are not included to the delivered package, as they do not fall under the GPL license.

After the template installation you will see blurred images (or placeholders) included for demo preview purposes only. You will need to replace them with your own images on the live website.

All the third-party plugins in our themes (in case there are any) may not be licensed under the GPL and it’s your responsibility to check what license they are covered by.
    </p>
     <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>

</body>
</html>