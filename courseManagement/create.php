<?php
    require_once '../login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    
    if (isset($_POST['id'])&&isset($_POST['name'])&& isset($_POST['creditHours']))
    {
      $id=$_POST['id'];
      $name=$_POST['name'];
      $creditHours=$_POST['creditHours'];
      $query    = "INSERT INTO courses VALUES" .
      "('$id', '$name', '$creditHours')";
      $result=$conn->query($query);
      header("Location: read.php");
    }

    

    function get_post($conn, $var)
    {
      return $conn->real_escape_string($_POST[$var]);
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="main.js"></script>
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
      label,
      p {
        /* color: #bbdb9b; */
        /* color: #da627d; */
        color: #191308;
        font-weight: bolder;
        font-size: 3em;
      }
      input {
        color: red;
      }
      form {
        margin-top: 5%;
        margin-left: 10%;
      }
      button {
        margin-top: 2%;
        color: #191308;
        background-color: #191308;
      }
    </style>
  </head>
  <body>
    <button
      onclick="location.href='main.html'"
      type="button"
      class="btn btn-secondary btn-lg"
      type="submit"
    >
      GO BACK
    </button>
    
      <form method="POST" action="create.php">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-6">
          <input name="id" class="form-control form-control-lg" type="text" />
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Course Title</label>
        <div class="col-sm-6">
          <input name="name" class="form-control form-control-lg" type="text" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Credit Hours</label>
        <div class="col-sm-6">
          <input name="creditHours" class="form-control form-control-lg" type="text" />
        </div>
      </div>
      <button class="btn btn-secondary btn-lg" type="submit">
        ADD
      </button>
    </form>
      
  
  
  </body>
</html>
