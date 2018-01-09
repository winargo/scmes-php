<html>
  <head>
   <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          .col-md-6{
              width: 100%;
          }
          input{
              margin-bottom: 2%;
          }
          button{
              padding: 1%;
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
  <a href="admin.php">Verifikasi</a>
  <a href="inbox.php"  style="background-color:white; color:black;">Inbox</a>
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
            echo $_POST['command'];
            if($_POST['command']=="delete"){
                $sql="delete from `report` where reportid='".$_POST['reportid']."'";
                echo $sql;
                if(mysqli_query($conn, $sql)){
                header("Location: inbox.php");
                exit;
                    mysqli_close($link);
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
            }
       else{
           $sql="update `report` set view='1' where reportid='".$_POST['reportid']."'";
                if(mysqli_query($conn, $sql)){}
       }
        // Close connection
        
        ?>
     <div id="content"  href="javascript:void(0)" class="closebtn" onclick="closeNav()">
         <section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>CONTACT Data</h2>
						<p>Isi Pesan</p>
					</div>
					<div class="col-md-6">
						<form method="post" action="inbox.php">
                            
                             <?php
                   
                    include('db_connect.php');
                            $sql="";
                            $sql = "Select * from `report` where reportid='".$_POST['reportid']."'" ;
                    $result = mysqli_query($conn,$sql);
                    $a=1;
                    while( $row = mysqli_fetch_assoc( $result ) ){
                        echo"
                        <input name='name' type='text' class='form-control' placeholder='Name' value='".$row['name']."'>
                            <input name='email' type='text' class='form-control' placeholder='Email' value='".$row['email']."'>
                            <textarea name='keterangan' class='form-control' rows='3' placeholder='Message' style='margin-bottom:30px;'>".$row['keterangan']."</textarea>
                            <a href='inbox.php'><button class='btn btn-success' type='submit' id='sendbutton'>Back</button></a>
                        "
                            ;
                    }
                    ?>
                            
                        </form>
					</div>
				</div>
			</div>
		</section>
       
     </div>
</body>
</html>