<html>
    <?php
    Session_start();  
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    if(!isset($_SESSION["username"])){
        $username="";
    }
    else{
    $username=$_SESSION["username"];
    }
    ?>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>
      <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
      <title>Selamat Datang di SCMES</title>
      <style>
      
          form{
              padding: 2%;
          }
          img{
              width: 300;
              height: 250;
          }
          #emergencyinfo{
          width: 68%;
          float: left;
      }
          #content{
              height: 100%;
          }
          #emergencytext{
              width: 100%;
              float: left;
          }
          #emergencyiteminfo{
              width: 100%;
          }
          button{
              width: 300px;
          }
    </style>
  </head>
   <body>
   <script>
       function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageemergency')
                    .attr('src', e.target.result).width(300)
                        .height(250);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
       </script>
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
       <div id="content">
       <form method="post" action="upload.php" enctype="multipart/form-data">
    <h2 id="emergencytitle" style="color:black;">Pertolongan Darurat</h2>
       <div id="emergencyitem">
           <img src="images/noimage.jpg" id="imageemergency">
           <div id="emergencyinfo">
              <p id="emergencytext">
               Berikan data Setepat Mungkin dan Selengkap mungkin , agar kami dapat segera mengkonfirmasi sebuat kejadian dan kebenaran akan adanya korban jiwa , sertakan nomor telefon dan nama anda demi kenyamanan bersama. Sihakan isi informasi penting berikut :
               <input type="text" name="hp" placeholder="No Hp" class="form-control" style="margin-bottom: 10px;">
               <input type="text" name="address" placeholder="Alamat" class="form-control">
               </p>
               
               <textarea class="form-control" placeholder="Informasi Penting keterangan dan Data yang Lengkap akan mempercepat verifikasi" name="keterangan" cols="40" rows="8" id="emergencyiteminfo"></textarea>
           </div>
       </div>
      
      
      <div id="Buttons">
          <button type="button" class="btn btn-info" id="addimageemergency"><input type='file' name="fileToUpload" id="fileToUpload"  onchange="readURL(this);" /></button>
          <button type="button" class="btn btn-info" id="addlocation" >Tambah Lokasi</button>
          <a href="pinpoint.php"><button type="button" class="btn btn-info" id="autolocation">Otomatis Deteksi Lokasi</button></a>
      </div>  
           <input type="hidden" name="caller" value="<?php echo $username;?>">
           <button name="submit "type="submit" class="btn btn-danger" id="btnreport">Laporkan</button>
       </form></div>
           
  <!--      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>-->
</body>
</html>