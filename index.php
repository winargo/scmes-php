<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    session_start();
    if($_SESSION["adminname"]!=""){
        header ("Location: admin.php");
        exit();
        }
    if($_SESSION["username"]!=""){
        header ("Location: home.php");
        exit();
        }
?>

  <html>
   <head>
       <title>Login</title>
       <link type="text/css" rel="stylesheet" href="css/loginstyle.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/javascript.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="module" src="js/loginjs.js"></script>
   </head>
    <body>
    
<div class="login-page">
  <div class="form">
    <form class="register-form" action="registering.php" method="post">
      <input type="text" name="name" placeholder="name"/>
      
      <input type="text" placeholder="Username" name="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="logincheck.php" method="post">
      <input type="text" 
      name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      <?php
        if($_SESSION["error"]==null){
            $_SESSION["error"]="";
        }
        if($_SESSION["error"]!=""){
        echo '<p>'.$_SESSION["error"].'</p>';
            $_SESSION["error"]="";
        }
        ?>
    </form>
    <a href="Home.php">Forgot Password ?
  </a>
   <br>
   <br>
    <a href="Home.php"><span class="glyphicon glyphicon-home"></span> Home
  </a>
  </div>
  
</div>
	</body>
	
</html>