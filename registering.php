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
 
            $sql = "INSERT INTO user (username,password,name,admin) VALUES ('".$_POST['username']."','". $_POST['password']."','". $_POST['name']."','0')";
            if(mysqli_query($conn, $sql)){
                header("Location: index.php");
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