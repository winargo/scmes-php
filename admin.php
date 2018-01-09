<html>
 <?php
    session_start();
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    include("blockadmin.php");
?>
  <head>
   <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/javascript.js"></script>
      <title>Selamat Datang di SCMES</title>
      </head>
      <style>
    
/* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    left: 0;
    background-color: coral; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
    width: 20%;
    color: white;
    float: left;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
          nav{
              width: 100%;
              height: 80px;
          }
          #logo{
              float: left;
          }
          #content{
              height: auto;
              width: auto;
          }
          td,tr,th{
              text-align: center;
          }
          a{
            
          }
    </style>
   <body>
   <nav>
      <div id="nav">
      <div id="main">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="logo">&#9776; SCMES</span> 
           </div>
           <div style="margin-left:40%; float:left; margin-top:30px;">
           <a id="homelogin" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
       </div>
       </div>

       </nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin.php" style="background-color:white; color:black;">Verifikasi</a>
  <a href="inbox.php">Inbox</a>
  <a href="newslist.php">News List</a>
  <a href="partnerslist.php">Partners list</a>
  <a href="datamanagement.php">data management</a>
  <a href="usermanagement.php">User Management</a>
</div>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
     <div id="content"  href="javascript:void(0)" class="closebtn" onclick="closeNav()">
         <div class="container">
  <h2>Verifikasi Emergency</h2>
  <p>Pehatikan permintaan Darurat Secara seksama</p>            
  <table class="table table-striped">
    <thead>
     <tr>
         Panggilan Darurat Pending
     </tr>
      <tr>
       <th>No.</th>
        <th>Pemanggil</th>
        <th>Lokasi</th>
        <th>No HP</th>
        <th>diperiksa</th>
        <th>Keterangan</th>
        <th>Action1</th>
        <th>Action2</th>
      </tr>
    </thead>
    <tbody>
       <?php
                   
                    include('db_connect.php');
                    $user=$_SESSION["username"];
                    $sql = "Select * from `emergencyreport` where accepted is null" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>";if($row['caller']==""){
                  echo "<td>Tidak diketahui";
              }
                        else{
                             echo "<td>'".$row['caller']."'";
                        }echo "</td>
              <td>'".$row['location']."'</td>
              <td>'".$row['hp']."'</td>";
                        if($row['checked']==0){
                            echo"<td><i class='glyphicon glyphicon-remove' style='font-size:24px;color:red;'></i></td>";
                        }else
                        {
                           echo"<td><i class='glyphicon glyphicon-ok' style='font-size:24px;color:green;'></i></td>"; 
                        }
              echo"
              <td>
              <form action='admininfo.php' method='post'>
            <input type='hidden' name='emergencyid' value='".$row['emergencyid']."'>
            <input type='hidden' name='command' value='show'>
            <button type='submit' class='btn btn btn-primary'>Tampilkan</button>
            </form>
              </td>
              <td>
                <form action='admininfo.php' method='post'>
            <input type='hidden' name='emergencyid' value='".$row['emergencyid']."'>
            <input type='hidden' name='command' value='accept'>
            <button type='submit' class='btn btn btn-success'>Terima </button>
            </form></td>
            <td>
                <form action='admininfo.php' method='post'>
            <input type='hidden' name='emergencyid' value='".$row['emergencyid']."'>
            <input type='hidden' name='command' value='ignore'>
            <button type='submit' class='btn btn-danger'>Tolak</button>
            </form></td>
            </tr>";
                    $a++;
                    }
                    ?>
        
    </tbody>
  </table>
  <table class="table table-striped">
    <thead>
     <tr style="font-size='14pt'">
        <strong>Panggilan Darurat Diterima</strong>
     </tr>
      <tr>
       <th>No.</th>
        <th>Pemaggil</th>
        <th>Lokasi</th>
        <th>No HP</th>
        <th>Diperiksa</th>
        <th>Keterangan</th>
      </tr>
     </thead>
    <tbody>
       <?php
                   
                    include('db_connect.php');
                    $user=$_SESSION["username"];
                    $sql = "Select * from `emergencyreport` where accepted=1" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>";if($row['caller']==""){
                  echo "<td>Tidak diketahui";
              }
                        else{
                             echo "<td>'".$row['caller']."'";
                        }echo "</td>
              <td>'".$row['location']."'</td>
              <td>'".$row['hp']."'</td>";
                        if($row['checked']==0){
                            echo"<td><i class='glyphicon glyphicon-remove' style='font-size:24px;color:red;'></i></td>";
                        }else
                        {
                           echo"<td><i class='glyphicon glyphicon-ok' style='font-size:24px;color:green;'></i></td>"; 
                        }
              echo"
              <td>
              <form action='admininfo.php' method='post'>
            <input type='hidden' name='emergencyid' value='".$row['emergencyid']."'>
            <input type='hidden' name='command' value='show'>
            <button type='submit' class='btn btn btn-primary'>Tampilkan</button>
            </form>
              </td>";
                    $a++;
                    }
                    ?>
        
    </tbody>
  </table>
             <table class="table table-striped">
    <thead>
     <tr style="font-size='14pt'">
        <strong>Panggilan Darurat Ditolak</strong>
     </tr>
      <tr>
       <th>No.</th>
        <th>Pemaggil</th>
        <th>Lokasi</th>
        <th>No HP</th>
        <th>Diperiksa</th>
        <th>Keterangan</th>
      </tr>
     </thead>
    <tbody>
       <?php
                   
                    include('db_connect.php');
                    $user=$_SESSION["username"];
                    $sql = "Select * from `emergencyreport` where accepted=0" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        
            echo "
            <tr>
              <td id='1'>$a</td>";if($row['caller']==""){
                  echo "<td>Tidak diketahui";
              }
                        else{
                             echo "<td>'".$row['caller']."'";
                        }echo "</td>
              <td>'".$row['location']."'</td>
              <td>'".$row['hp']."'</td>";
                        if($row['checked']==0){
                            echo"<td><i class='glyphicon glyphicon-remove' style='font-size:24px;color:red;'></i></td>";
                        }else
                        {
                           echo"<td><i class='glyphicon glyphicon-ok' style='font-size:24px;color:green;'></i></td>"; 
                        }
              echo"
              <td>
              <form action='admininfo.php' method='post'>
            <input type='hidden' name='emergencyid' value='".$row['emergencyid']."'>
            <input type='hidden' name='command' value='show'>
            <button type='submit' class='btn btn btn-primary'>Tampilkan</button>
            </form>
              </td>";
                    $a++;
                    }
                    ?>
        
    </tbody>
  </table>
</div>

     </div>
    </body>
</html>