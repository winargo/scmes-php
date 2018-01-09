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
      .important{
              padding: 1%;
              font-size: 24px;
              width: 70%;
              text-align: center;
              word-spacing: 0.2;
              margin: 0 auto;
          }
          .content{
              padding-bottom: 60px;
          }
          .news{
              width: 100%;
              height: 100%;
              margin-bottom: 60px;
          }
          img{
              height: 70%;
              width: 100%;
              padding: 2%;
          }
          .item{
              background: rgba(255, 255, 255, 0.7);
              text-align: center;
              padding: 2%;
              margin-left: 1%;
              margin-top: 2%;
              width: 32%;
              
              height: 50%;
              float: left;
          }
          .head{
              font-size: 15pt
          }
          .stuff{
              font-size: 12pt;
          }
      </style>
  </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php">Home</a>
       <a id="News" href="news.php" style="background-color: white;color: coral">News</a>
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
                <a id="homesearch" href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                ';
          }
          ?>
       </div>

       </nav>
   <div id="content">
<h1>
    Latest News
</h1>
      <p class="important">
          Berita terbaru dan terhangat dari kami SCMES
      </p>
       
       <div class="news">
           <div class="itemrow">
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
           </div>
           <div class="itemrow1">
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
               <div class="item">
                   <img src="images/noimage.jpg">
                   <a href="news.php"><p class="head">SetNov Menabrak tiang listrik</p></a>
                   <p class="stuff">setnov masuk rumah sakit blalalablabablbaal</p>
               </div>
           </div>
       </div>
       </div>
<!--       <div id="right">
        <h4>Pencarian</h4>
      <span class="glyphicon glyphicon-search"></span>
       <input class="Bootstrap"type="text" name="search" id="searchbar" placeholder="Rumah sakit , berita , obat .....">
        <h7>Kategori</h7>
        <select id="option">
              <option value="volvo">Rumah Sakit</option>
              <option value="saab">Dokter</option>
              <option value="mercedes">Obat</option>
        </select>
        <button type="button" class="btn btn-success" id="btnsearch" >Search</button>
        <div id="result">
            <p>Hasil Pencarian</p>
        </div>
        </div>-->
           <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>
           <footer>
               <div class="footer">Copyright 2017 SCMES</div>
           </footer>
</body>

</html>