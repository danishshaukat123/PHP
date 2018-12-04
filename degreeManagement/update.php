<head>

<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

<style>
 body {
        background-color: #da627d;
      }


</style>

</head>

<?php
    if (isset($_POST['updatedFee'])&& isset($_POST['updatedName']))
    {
            $updatedName=$_POST['updatedName'];
            $updatedFee=$_POST['updatedFee'];
            $id=$_POST['id'];
            require_once '../login.php';
            $conn = new mysqli($hn, $un, $pw, $db);
            $query="update degree set name='$updatedName' , fee='$updatedFee' where id='$id'";
            if ($conn->query($query) === TRUE) {
                echo "Record updated successfully";
                header("Location: read.php");
            } 
            else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
    

    }   

?>

<?php
if (isset($_POST['name']) && isset($_POST['fee']) && isset($_POST['id']) )
{   
    $name=$_POST['name'];
    $fee=$_POST['fee'];
    $id=$_POST['id'];
    
    

?>
    <form method="POST" action="update.php">
    <input type="hidden" name="id" value=<?php echo $id ?>>
    <label> Name </label>
    <input name="updatedName" placeholder=<?php echo $name ?>>
    <label> Fee </label>
    <input name="updatedFee" placeholder=<?php echo $fee ?>>  
    <button type="submit"> Update </button>
    </form>    

<?php

    
}


?>