
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

<button
      onclick="location.href='read.php'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
    >
      GO BACK
</button>

<?php
    
    if(isset($_POST['updatedId'])&&isset($_POST['updatedName'])&&isset($_POST['updatedDegree'])&&isset($_POST['originalId']))
    {
        $originalId=$_POST['originalId'];
        $id=$_POST['updatedId'];
        $name=$_POST['updatedName'];
        $degree=$_POST['updatedDegree'];
        require_once '../login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        $query="update students set ID='$id', name='$name' , degree='$degree' where id='$originalId'";
        $result   = $conn->query($query);
        if ($conn->query($query) === TRUE) {
            //echo "Record updated successfully";
            //echo $id,$name,$degree;
            header("Location: read.php");
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();

    }


?>





<?php

    if(isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['degree']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $degree=$_POST['degree'];
        ?>
    <form method="POST" action="update.php">
      <input type="hidden" name="originalId" value=<?php echo $id; ?>>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-6">
          <input name="updatedId" placeholder=<?php echo $id; ?> class="form-control form-control-lg" type="text" />
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-6">
          <input name="updatedName" placeholder=<?php echo $name ?> class="form-control form-control-lg" type="text" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Degree</label>
        <div class="col-sm-6">
        <input name="updatedDegree" placeholder=<?php echo $degree ?> class="form-control form-control-lg" type="text" />
        </div>
    </div>
      <button class="btn btn-secondary btn-lg" type="submit">
        UPDATE
      </button>
</form>


    <?php

    }





?>