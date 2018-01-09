
      
       <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        include('db_connect.php');
            $stringa='SC'.(rand(0000000,2000000));
            $sql = "INSERT INTO report (reportid,name,email,keterangan) VALUES ('$stringa','".$_POST['name']."','". $_POST['email']."','". $_POST['keterangan']."')";
            if(mysqli_query($conn, $sql)){
                header("Location: contact.php");
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