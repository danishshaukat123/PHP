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
.container{
    margin-top:2%;
    font-weight:bolder;   
}
.heading{
    color:#DAD7CD;
}
 button{
    background-color: #FAF8D4;
 }
 


</style>


</head>

<?php

require_once '../login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query="SELECT * FROM courses";
$result=$conn->query($query);
$numOfRows=$result->num_rows;

?>

<button
      onclick="location.href='main.html'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
    >
      GO BACK
</button>

<div class="container">
    
    <div class="row">
        <div class="col heading"><H4>Coourse Id</H4></div>
        <div class="col heading"><H4>Course Name</H4></div>
        <div class="col heading"><H4>Credit Hours</H4></div>
        <div class="col heading"></div>
        <div class="col heading"></div>
        <div class="col heading"></div>
        
    </div>
</div>



<?php
for($i=0;$i<$numOfRows;$i++){

  
    $row = $result->fetch_array(MYSQLI_NUM);
    
    
    
    

?>
<div class="container">
    
    

    <div class="row">
        <div class="col"><?php echo $row[0] ?></div>
        <div class="col"><?php echo $row[1] ?></div>
        <div class="col"><?php echo $row[2] ?></div>
        <div class="col">
            <form method="POST" action="update.php">
                <input type="hidden" name="id" value=<?php echo $row[0]; ?>>
                <input type="hidden" name="name" value=<?php echo $row[1]; ?>> 
                <input type="hidden" name="degree" value=<?php echo $row[2]; ?>>
                <button style="background-color:#A1867F" type="submit"> Update</button>
            </form>
        </div>
        <div class="col">
            <form method="POST" action="delete.php">
                <input type="hidden" name="id" value=<?php echo $row[0]; ?>>
                <button type="submit"> DELETE</button>
            </form>
        </div>
    </div>

</div>



<?php

}

?>




