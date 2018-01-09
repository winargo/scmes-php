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
      <style>
          .title{
              padding: 1%;
              font-size: 24px;
              width: 70%;
              text-align: center;
              word-spacing: 0.2;
              margin: 0 auto;
          }
          #sendbutton{
              margin-top: 3%;
              width: 30%;
              padding: 2%;
          }
          img{
              width: 80%;
              height: 50%;
          }
          footer{
              position: fixed;
              bottom: 0;
              width: 100%;
              z-index: -1;
          }
          input,textarea{
              margin-top: 20px;
          }
      </style>
  </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php">Home</a>
       <a id="News" href="news.php">News</a>
       <a id="Booking" href="booking.php">Booking</a>
       <a id="Review" href="review.php">Review</a>
       <a id="Contact" href="contact.php" style="background-color: white;color: coral">Contact us</a>
       <a id="Partners" href="partners.php">Partners</a>
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
    <section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>CONTACT US</h2>
						<p>Gunakan halaman ini untuk memberikan keluhan ataupun umpan balik terkait SCMES</p>
					</div>
					<div class="col-md-6 col">
						<!-- map -->
						<div class="map">
	                      <div id="googleMap">
	                          <img src="images/contact.png">
	                      </div>
	                   </div><!--/map-->

					</div>
					<div class="col-md-6">
						<form method="post" action="sendreport.php">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                            <input name=email type="email" class="form-control" placeholder="Email" required>
                            <textarea name="keterangan" class="form-control" rows="3" placeholder="Message" required></textarea>
                            <button class="btn btn-success" type="submit" id="sendbutton">SEND</button>
                        </form>
					</div>
				</div>
			</div>
		</section>
     <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>
<footer>
               <div class="footer">Copyright 2017 SCMES</div>
           </footer>
</body>
</html>