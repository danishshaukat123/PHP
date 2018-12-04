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

<button
      onclick="location.href='reports.php'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
>
      GO BACK
</button>


<?php

if(isset($_POST['degree']))
{
    $degree=$_POST['degree'];
    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    $query="SELECT * FROM students where degree='$degree'";
    $result   = $conn->query($query);
    $numOfRows=$result->num_rows;
    //echo "aaa", $numOfRows;
    
    ?>

    <div class="container">
    
      <div class="row">
        <div class="col heading"><H4>Student Id</H4></div>
        <div class="col heading"><H4>Student Name</H4></div>
        <div class="col heading"><H4>Degree</H4></div>
        <div class="col heading"></div>
        <div class="col heading"></div>
        <div class="col heading"></div>
        
      </div>
    </div>


    <?PHP
    
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
}
?>


<?php

    if(isset($_POST['course']))
    {   
        $course=$_POST['course'];
        require_once '../login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        $query="SELECT * FROM coursedegree where courseId='$course'";
        $result   = $conn->query($query);
        $numOfRows=$result->num_rows;
        //echo $numOfRows;
        $row = $result->fetch_array(MYSQLI_NUM);
        $degreeId= $row[2];
        $query="Select * from degree where ID='$degreeId'";
        $result   = $conn->query($query);
        $numOfRows=$result->num_rows;
        $row = $result->fetch_array(MYSQLI_NUM);
        $degree= $row[1];
        $query="Select * from students where degree='$degree'";
        $result   = $conn->query($query);
        $numOfRows=$result->num_rows;

    ?>

    <div class="container">
    
        <div class="row">
            <div class="col heading"><H4>Student Id</H4></div>
            <div class="col heading"><H4>Student Name</H4></div>
            <div class="col heading"><H4>Degree</H4></div>
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
    
    
    
    }






?>






