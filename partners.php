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
       <a id="Partners" href="partners.php" style="background-color: white;color: coral">Partners</a>
          <a id="About" href="about.php">About us</a>
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
     
     <div class="tab1">
          <button class="tablinks" onclick="openCity(event, 'Dokter')">Dokter</button>
          <button class="tablinks" onclick="openCity(event, 'Rumah Sakit')">Rumah Sakit</button>
          <button class="tablinks" onclick="openCity(event, 'Obat')">Obat</button>
        </div>
      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>

       <div id="reviewdata">
           <div id="reviewdataitem">
               <img src="images/noimage.jpg" id="reviewimage">
               <div id="reviewtext"><h5>Partner 1</h5>
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Aliquam nec facilisis ligula. Aenean libero leo, aliquam quis auctor ac, tristique 
       sed lectus. Nunc sit amet purus congue,
               </p>
               </div>
               
           </div>
           <div id="reviewdata">
           <div id="reviewdataitem">
               <img src="images/noimage.jpg" id="reviewimage">
               <div id="reviewtext"><h5>Partner 2</h5>
               <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
       Aliquam nec facilisis ligula. Aenean libero leo, aliquam quis auctor ac, tristique 
       sed lectus. Nunc sit amet purus congue,
               </p>
               </div>
               
           </div>
       </div>
           
       </div>
       <footer>
               <div class="footer">Copyright 2017 SCMES</div>
           </footer>
</body>
</html>