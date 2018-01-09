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
          h1{
              font-size: 56px;
              font-weight: 900;
          }
          a{
              color: black;
          }
          h2
          {
              text-align: center;
              padding-top:25px;
              padding-bottom: 25px;
          }
          .important{
              padding: 1%;
              font-size: 24px;
              width: 70%;
              text-align: center;
              word-spacing: 0.2;
              margin: 0 auto;
          }
          .first{
              background: rgba(255, 255, 255, 0.6);
              width: 70%;
              margin: 0 auto;
          }
          .second{
              background: rgba(255, 255, 255, 0.6);
              width: 70%;
              margin: 0 auto;
          }
          .item1,.item2,.item3{
              background: rgba(255, 255, 255, 0.6);
              text-align: center;
              padding: 2%;
              margin-left: 1%;
              margin-top: 2%;
              width: 32%;
              font-size: 20pt;
              height: 90%;
              float: left;
          }
          .item1:hover,.item2:hover,.item3:hover{
              background: rgba(0, 0, 0, 0.6);
              color: white;
          }
          #icon{
              font-size: 55px;
          }
          content{
              width: 1400;
          }
          .choice{
              width: 100%;
              height: 50%;
          }
          #homename{
                padding: 15px 15px;
                padding: 15px;
                color: white;
                text-decoration: none;
            }
      </style>
      <script src="src/App.js"></script>
  </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php" style="background-color: white;color: coral">Home</a>
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
                <a id="homesearch" href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a>
           <a id="homelogin" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
                ';
          }
          ?>
           
       </div>

       </nav>
       <!--
       <div id="left">
           <h5 style="text-align: center;">Informasi</h5>
           <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'Dokter')">Dokter</button>
              <button class="tablinks" onclick="openCity(event, 'RumahSakit')">Rumah Sakit</button>
              <button class="tablinks" onclick="openCity(event, 'Obat')">Obat</button>
            </div>

            <div id="Dokter" class="tabcontent">
              <h3>Dokter</h3>
              <p>Dokter ini telah menyembuh kan A.</p>
            </div>

            <div id="RumahSakit" class="tabcontent">
              <h3>Rumah Sakit</h3>
              <p>Rumah Sakit sudah menjadi pusat perhatian</p> 
            </div>

            <div id="Obat" class="tabcontent">
              <h3>Obat</h3>
              <p>Pemnyembuhan terbaru ampuh untuk malaria</p>
            </div>
               </div>
-->
    <div id="content">
       <h1>SCMES Indonesia</h1>
       <div class="first">
       <p class="important">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sistem Darurat Indonesia</b> Untuk Setiap Orang yang membutuhkan <b>Pertolongan Darurat</b> secepatnya
           </p>
        </div>
        <h2><b>Bagaimana Cara Kerja Sistem ini ?</b></h2>
        <div class="second">
       <p class="important">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sistem</b> ini menghubungi rumah sakit terdekat untuk menyelamatkan korban, dengan tujuan meminimalisir korban jiwa , gunakan tombol <b>Emergency Button</b> untuk mencari pertolongan secepatnya.
       </p>
        </div>
        <div class="choice">
        <a href="news.php">
        <div class="item1">
           <p><span class="glyphicon glyphicon-envelope" id="icon"></span><br></p>
           <p><b>News</b><br></p>
            <p>Temui Berita terbaru dari SCMES di sini</p>
        </div>
        </a>
        <a href="booking.php">
        <div class="item2">
           <p><span class="glyphicon glyphicon-book" id="icon"></span><br></p>
           <p><b>Booking</b><br></p>
            <p>Pesan tempat terbaik dari kami</p>
        </div>
        </a>
        <a href="Contact.php">
        <div class="item3">
           <p><span class="glyphicon glyphicon-comment" id="icon"></span><br></p>
           <p><b>Contact us</b><br></p>
            <p>masukan anda sangat berarti bagi kami</p>
        </div>
        </a>
        </div>
    </div>
    
<!--
    <div id="right">
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
        </div>
-->
           <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>
           <footer>
               <div class="footer">Copyright 2017 SCMES</div>
           </footer>

</body>
</html>