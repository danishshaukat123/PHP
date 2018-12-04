
<?php
$dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $mydb = 'studentregistrationsystem';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $mydb);
   
   if (mysqli_connect_error()) {
    
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>