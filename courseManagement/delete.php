<?php
    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        $query  = "DELETE FROM courses WHERE ID='$id'";
        $result = $conn->query($query);
        header("Location: read.php");
          
    }



?>