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
form{
    margin-left:20%;
    margin-top:5%;
}

</style>


</head>

<?php
        require_once '../login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        
        if(isset($_POST['courses'])&&isset($_POST['degreeId']))
        {
            $courses=$_POST['courses'];
            $degreeId=$_POST['degreeId'];
            if(empty($courses)){
            echo "No course selected";
            }
        
            else{
            $noOfCourses=count($courses);
            
            for($i=0;$i<$noOfCourses;$i++){
                echo $courses[$i];
                $query    = "INSERT INTO coursedegree VALUES" .
                "(NULL, '$courses[$i]', '$degreeId')";
                $result   = $conn->query($query);

                }

            
            }
           
            $conn->close();
  
        }


?>

<button
      onclick="location.href='read.php'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
    >
      GO BACK
</button>
</br>
</br>
    

<?php

require_once '../login.php';
$conn = new mysqli($hn, $un, $pw, $db);
$query="Select * from courses";
$result = $conn->query($query);
$numOfRows = $result->num_rows;
if(isset($_POST['name']) && isset($_POST['id'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    echo "Add courses for ", $name;



?>
<h1>SELECT COURSES </H1>
<form method="POST" action="addcourses.php" > 
<?php
for ($i=0;$i<$numOfRows;$i++)
{
        $row=$result->fetch_array(MYSQLI_NUM);
        ?>
        <div class="form-check">
            <input type="hidden" name="degreeId" value=<?php echo $id; ?>>
            <input class="form-check-input" type="checkbox" name="courses[]" value=<?php echo $row[0];  ?>>
            <label class="form-check-label" for=<?php echo $row[0];  ?>>
            <?php echo $row[1]; ?>
            </label>
        </div>
<?php

}

?>
<button type="submit"> Add Courses </button>
<?php

}
?>
</form>

