<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <title></title>

    <style>
      body {
        background-color: #454545;
        /*		background-color: #73C2BE*/
      }
      .homeButtons {
        margin: auto;
        width: 50%;
        height: 100vh;
        margin-top: 13%;
        margin-left: 23%;
      }

      a,
      button {
        width: 100%;
        display: block;
        margin-left: 1%;
        margin-top: 1%;
        height: 15%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="homeButtons">
      <button
        onclick="location.href='degreeManagement/main.html'"
        type="button"
        class="btn btn-primary btn-lg"
      >
        Degree Management
      </button>
      <button
        onclick="location.href='courseManagement/main.html'"
        style="background-color:#b47978 "
        type="button"
        class="btn btn-secondary btn-lg"
        >Course Management
        </button>
      <button
        onclick="location.href='StudentManagement/main.html'"
        style="background-color: #bbdb9b "
        type="button"
        class="btn btn-secondary btn-lg"
      >
        Student Management
    </button>
    </div>
  </body>
</html>
