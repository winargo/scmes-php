<?php
    session_start();
?>
   <html>
    <head>
        <title>Succesfully added</title>
    </head>
    <body>
      
       <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
            $sql="";
            echo $_POST['command'];
            if($_POST['command']=="clear"){
                $sql="update `user` set password='' where username='".$_POST['username']."'";
                echo $sql;
            }
            else{
                $sql="delete from `user` where username='".$_POST['username']."'";
                echo $sql;
            }
            if(mysqli_query($conn, $sql)){
                header("Location: usermanagement.php");
                exit;
            }   
            else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            };
        
        // Close connection
        mysqli_close($link);
        ?>
        <!--while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['employee_id'\]}</td>
              <td>{$row\['employee_name'\]}</td>
              <td>{$row\['employee_dob'\]}</td>
              <td>{$row\['employee_addr'\]}</td>
              <td>{$row\['employee_dept'\]}</td>
              <td>{$row\['employee_sal'\]}</td> 
            </tr>\n";
          }-->
    </body>
</html>