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
          #content{
              text-align: center;
              padding-bottom: 60px;
          }
          p{
              padding 3%;
              margin-top: 2%;
          }
          .left{
              width: 48%;
              float: left;
          }
          .right{
              margin-top: 2%;
              width : 50%;
              float: left;
          }
          .hari{
              width 30%;
          }
          .checkbox{
              text-align: justify;
              padding-left: 30%;
          }
      </style>
  </head>
   <body>
   <nav>
      <div id="nav">
      <a id="logo" href="Home.php">SCMES</a>
       <a id="Home" href="home.php">Home</a>
       <a id="News" href="news.php">News</a>
       <a id="Booking" href="booking.php" style="background-color: white;color: coral">Booking</a>
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
       <!--<div id="one">
           <select>
               <option>--Pilih Rumah Sakit</option>    
           </select>
           <div class="filtercontainer">
           <input type="text" class="form-control" id="usr" placeholder="Filter kata" style="width: 70%;float: left;">
        <button type="button" class="btn btn-info" id="filter" style="width: 28%;margin-top: 7.5%; margin-left: 2%;">Filter</button>
       </div>
           <div id="resultone">
            
        </div>
        
       </div>
       
       <div id="two">
           <select>
               <option>--Pilih Dokter</option>    
           </select>
           <div class="filtercontainer">
           <input type="text" class="form-control" id="usr" placeholder="Filter kata" style="width: 70%;float: left;">
        <button type="button" class="btn btn-info" id="filter" style="width: 28%;margin-top: 7.5%; margin-left: 2%;">Filter</button>
       </div>
           <div id="resulttwo">
            
        </div>
       </div>
       
       <div id="three">
           <select>
               <option>--Pilih Obat</option>    
           </select>
           <div class="filtercontainer">
           <input type="text" class="form-control" id="usr" placeholder="Filter kata" style="width: 70%;float: left;">
        <button type="button" class="btn btn-info" id="filter" style="width: 28%;margin-top: 7.5%; margin-left: 2%;">Filter</button>
       </div>
           <div id="resultthree">
            
        </div>
       </div>
       <div id="pilihan">
           <input type="number" id="hari"><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hari</label>
       <div id="pilihanbg">
           <Label><b>Tipe :</b></Label>
        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">Reguler</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">Supreme</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">VIP</label>
        </div>
           <a href="" style="text-decoration: underline;">Informasi Tipe</a>
           </div>
           <div id="keterangan">
           <input type="text" class="form-control" id="usr" placeholder="Atas Nama" id="keteranganitem">
           <textarea class="form-control" placeholder="Keterangan" id="keteranganitem" name="information" cols="40" rows="5" id="keteranganitem"></textarea>
             <br>
              <button type="button" class="btn btn-success" id="btnsearch" >Pesan</button>
           </div>
        <div id="result">
           </div>
       </div>-->
       <div id="content">
           <h4>
               Gunakan Form ini untuk Booking Pemeriksaan , Diagnosa , dan banyak lagi.
           </h4>
           <P>Lokasi anda</P>
           <select class="form-control">
               <option value="volvo">pilih salah satu lokasi</option>
                <option value="volvo">medan</option>
                <option value="saab">jakarta</option>
                <option value="honda">RS b</option>
                <option value="audi">Audi</option>
            </select>
           <div class="left">
           <p>1. Pilih Rumah sakit Sesuai keinginan anda</p>
            <select class="form-control">
               <option value="volvo">pilih salah satu Rumah sakit</option>
                <option value="volvo">RS Pringadi</option>
                <option value="saab">RS Mahoni</option>
                <option value="honda">RS b</option>
                <option value="audi">Audi</option>
            </select>
           <p>2. Apa yang anda ingin lakukan</p>
           <select class="form-control">
                <option value="volvo">pilih salah satu jenis</option>
                <option value="volvo">Operasi</option>
                <option value="saab">Pemeriksaan</option>
                <option value="honda">Cek kesehatan</option>
                <option value="audi">Audi</option>
            </select>
           <p>3. Pilih Dokter Anda</p>
           <select class="form-control">
               <option value="volvo">pilih salah satu Dokter</option>
                <option value="volvo">Dr. Cipto mangun kusumo</option>
                <option value="saab">Saab</option>
                <option value="honda">Honda</option>
                <option value="audi">Audi</option>
            </select>
            </div>
            <div class="right" >
           <input type="number" id="hari" ><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hari</label>
       <div id="pilihanbg">
           <Label><b>Tipe :</b></Label>
                   <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">Economy</label>
        </div>

        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">Reguler</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">Supreme</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="radAnswer" value="">VIP</label>
        </div>
           <a href="" style="text-decoration: underline;">Informasi Tipe</a>
           </div>
           </div>
           <div id="keterangan">
           <input type="text" class="form-control" id="usr" placeholder="Atas Nama" id="keteranganitem">
           <textarea class="form-control" placeholder="Keterangan" id="keteranganitem" name="information" cols="40" rows="5" id="keteranganitem"></textarea>
            </div>
           <p><b>NB: administrasi dilakukan di Rumah Sakit langsung,pemesanan akan mereserve kamar dan dokter Hangus dalam 3 hari apabila tidak  konfirmasi ke rumah sakit </b></p>
           <button type="button" class="btn btn-success" id="btnsearch" >Pesan</button>
           </div>
      <a href="emergency.php"><button type="button" class="btn btn-danger" id="emergencybutton" href=>Emergency Button</button></a>

<footer>
               <div class="footer">Copyright 2017 SCMES</div>
           </footer>
</body>
</html>