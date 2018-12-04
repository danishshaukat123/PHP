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
      onclick="location.href='main.html'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
>
      GO BACK
</button>


<?php

if(isset($_POST['id'])&& isset($_POST['name']) && isset($_POST['degree']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $degree=$_POST['degree'];
    echo $id, $name , $degree;
    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    $query    = "INSERT INTO students VALUES" .
    "('$id', '$name', '$degree')";
    $result   = $conn->query($query);
    $conn->close();
    header("Location: read.php");
  
}






?>

<form method="POST" action="create.php">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-6">
          <input name="id" class="form-control form-control-lg" type="text" />
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input name="name" class="form-control form-control-lg" type="text" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Degree</label>
        <div class="col-sm-6">
            <label for="sel1">Select list (select one):</label>
                <select name="degree" class="form-control" id="sel1">
                <option value="">Select...</option>

                    <?php   
                     require_once '../login.php';
                     $conn = new mysqli($hn, $un, $pw, $db);
                     $query="SELECT * FROM degree";
                     $result=$conn->query($query);
                     $numOfRows=$result->num_rows;
                     for ($i=0;$i<$numOfRows;$i++)
                     {  
                        $row = $result->fetch_array(MYSQLI_NUM);
                        

          ?>
                    <option value=<?php echo $row[1]; ?>><?php echo $row[1]; ?></option>
                     <?php 
                     }
                    ?>
                </select>
        </div>
      </div>
      <button class="btn btn-secondary btn-lg" type="submit">
        ADD
      </button>
</form>
      

