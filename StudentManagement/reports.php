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

<form method="POST" action="reportsViews.php">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Degree</label>
        <div class="col-sm-6">
            <label for="sel1">Filter students on the basis of degree:</label>
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
        FILTER 
      </button>



</form>

<form method="POST" action="reportsViews.php">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Degree</label>
        <div class="col-sm-6">
            <label for="sel1">Filter students on the basis of course    :</label>
                <select name="course" class="form-control" id="sel1">
                <option value="">Select...</option>

                    <?php   
                     require_once '../login.php';
                     $conn = new mysqli($hn, $un, $pw, $db);
                     $query="SELECT * FROM courses";
                     $result=$conn->query($query);
                     $numOfRows=$result->num_rows;
                     for ($i=0;$i<$numOfRows;$i++)
                     {  
                        $row = $result->fetch_array(MYSQLI_NUM);
                        

          ?>
                    <option value=<?php echo $row[0]; ?>><?php echo $row[0]; ?></option>
                     <?php 
                     }
                    ?>
                </select>
             </div>
    </div>
      <button class="btn btn-secondary btn-lg" type="submit">
        FILTER 
      </button>



</form>



