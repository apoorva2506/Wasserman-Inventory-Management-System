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
//echo "Database Connected successfully"."<br><br>";
$user=$_POST["username"];
$pass=$_POST["password"];
$rad_type=$_POST["login_type"];
$sql = "select * from users where username='$user' and password='$pass'";
//$sql = "SELECT * FROM stock where serial_no='$ser'";

$result = $conn->query($sql);
$count  = mysqli_num_rows($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['type']== $rad_type) {
          if($rad_type=='admin') {
            header("location: index.php");
          }
          else if($rad_type=='user') {
            header("location: indexuser.php");
          }
          $_SESSION['username']=$user;

        }

    else if($row['type'] <> $rad_type) {
       header("location: failed_login.php");
     }
   }
 }

       else {
         header("location: wrongcred.php");
       }

?>
