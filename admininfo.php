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
          h2,#emergencytitle{
            color: black;
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
      <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
            $sql="";
            if($_POST['command']=="ignore"){
                $sql="update `emergencyreport` set accepted=0,checked=1 where emergencyid='".$_POST['emergencyid']."'";
                if(mysqli_query($conn, $sql)){
                header("Location: admin.php");
                exit();
                    mysqli_close($link);
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
                header("Location: admin.php");
                exit();
            }   
            else if($_POST['command']=="accept"){
                 $sql="update `emergencyreport` set accepted=1,checked=1 where emergencyid='".$_POST['emergencyid']."'";
                if(mysqli_query($conn, $sql)){
                header("Location: admin.php");
                exit();
                    mysqli_close($link);
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
                header("Location: admin.php");
                exit();
            }
           $sql="update `emergencyreport` set checked='1' where emergencyid='".$_POST['emergencyid']."'";
             if(mysqli_query($conn, $sql)){}
        // Close connection
        mysqli_close($link);
        ?>
     <div id="content"  href="javascript:void(0)" class="closebtn" onclick="closeNav()">
         <div class="container">
             
            
            
    <h2 id="emergencytitle">Informasi Darurat</h2>
             <?php
             include('db_connect.php');
                            $sql="";
                            $sql = "Select * from `emergencyreport` where emergencyid='".$_POST['emergencyid']."'" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
             echo"
       <div id='emergencyitem'>
           <img src='".$row['imagedir']."' id='imageemergency'>
           <div id='emergencyinfo'>
              <p id='emergencytext'>
               <input type='text' name='hp' placeholder='No Hp' class='form-control' style='margin-bottom: 10px;' value='".$row['hp']."'>
               <input type='text' name='address' placeholder='Alamat' class='form-control' value='".$row['location']."'>
               </p>
               
               <textarea class='form-control' placeholder='Informasi Penting keterangan dan Data yang Lengkap akan mempercepat verifikasi' name='keterangan' cols='40' rows='8' id='emergencyiteminfo'>".$row['keterangan']."</textarea>
           </div>
       </div>";}
           ?>
           <a href="admin.php"><button name="submit "type="submit" class="btn btn-info" id="btnreport">Kembali</button></a>
</div>

     </div>
    </body>
</html>