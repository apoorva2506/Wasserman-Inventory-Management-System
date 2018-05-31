
          <?php
          session_start();

          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "Inventory";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }


            $_SESSION['updsno']=$_POST["ser_no"];
            $varsno=$_SESSION['updsno'];
            $_SESSION['upddesc']=$_POST["descr"];
            $vardesc=$_SESSION['upddesc'];
            $_SESSION['updipadd']=$_POST["ip_add"];
            $varipadd=$_SESSION['updipadd'];
            $_SESSION['updmacadd']=$_POST["mac_add"];
            $varmacadd=$_SESSION['updmacadd'];
            $_SESSION['updloc']=$_POST["location"];
            $varloc=$_SESSION['updloc'];
            $_SESSION['updroom']=$_POST["room"];
            $varroom=$_SESSION['updroom'];
            $_SESSION['updstaff']=$_POST["staff"];
            $varstaff=$_SESSION['updstaff'];
            $_SESSION['updcateg']=$_POST["category"];
            $varcateg=$_SESSION['updcateg'];
            $_SESSION['updmanu']=$_POST["manufacturer"];
            $varmanufac=$_SESSION['updmanu'];
            $_SESSION['updavail']=$_POST["availability"];
            $varavail=$_SESSION['updavail'];
            $_SESSION['updscore']=$_POST["score"];
            $varscore=$_SESSION['updscore'];

          //echo $_SESSION['origserial'];
        //  echo $_SESSION['updsno'];
          //echo $_SESSION['orig_sno'];
          $temp=$_SESSION['orig_sno'];

          $sql="UPDATE stock SET
          serial_no ='$varsno',
          item_name='$vardesc',
          ip_add='$varipadd',
          mac_add='$varmacadd',
          location='$varloc',
          room='$varroom',
          staff='$varstaff',
          category='$varcateg',
          manufacturer='$varmanufac',
          availability='$varavail',
          score='$varscore'
          WHERE serial_no = '$temp'";
          $result = $conn->query($sql);
          //$sql="UPDATE stock SET serial_no ='$var_sno' WHERE serial_no = '$temp'";
          if($result){
            echo '<script language="javascript">';
            echo 'alert("Updated successfully"); location.href="updatealldevs.php"';
            echo '</script>';
           }

          ?>
