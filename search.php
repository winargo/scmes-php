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
          .ikategori{
              padding-top: 20px;
              float: left;
              margin: 0 auto;
              margin-right: 2%;
              width: 10.5%;
              text-align: center;
          }
          #content{
              margin: 0 auto;
              text-align: center;
              background: rgba(255, 255, 255, 0.7);
          }
          .kategori{
              margin: 0 auto;
          }
          h3{
              padding-left: 0;
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
       <a id="Contact" href="contact.php">Contact us</a>
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
                <a id="homesearch" href="search.php" style="background-color: white;color: coral"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                ';
          }
          ?>
       </div>

       </nav>
       
       <div id="content">
        <h2>Halaman Pencarian</h2>
          
      <h3>Kata Kunci</h3>
       <input class="Bootstrap"type="text" name="search" id="searchbar" placeholder="Rumah sakit , berita , obat .....">
       <br>
        <h5><b>Kategori</b></h5>
        <div class="kategori">
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Rumah sakit</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Berita</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Dokter</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Obat</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Review</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>partner</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Contact</p>
        </div>
        <div class="ikategori">
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
            <p>Select All</p>
        </div>
        </div>
        <button type="button" class="btn btn-success" id="btnsearch" ><span class="glyphicon glyphicon-search"></span> Search</button>
        <div id="result" class="form-control">
            <p>Hasil Pencarian</p>
        </div>
        </div>
      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>

</body>
</html>