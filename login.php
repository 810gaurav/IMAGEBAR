<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="img/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="./img/bootstrap.bundle.min.js.download"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <style>
    body:hover {
      opacity: 1;
    }

    body {
      opacity: 0.5;
    }

    b {
      color: rgb(206, 23, 87);
    }

    input {
      border-radius: 10px;
    }

    form {
      text-align: center;
      margin-top: 12%;

    }

    body {
      background: url(bootstrap\ project_files/box2.jpg) no-repeat center;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-light  ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><b>
            <h1>IMAGEBAR</h1>
          </b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button><strong>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><b
                    class="fa-solid fa-house fa-1xl"></b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.php"><b>ABOUT</b></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="login.php" aria-disabled="true"><b>LOGIN</b></a>
              </li>

              </li>
            </ul>
          </div>

        </strong>
      </div><i>

      </i>
    </nav><i>
      <form action="submit.php" method="post">

        <input type="email" placeholder="email address" id="email"name="email"
          style="height: 3rem; width: 17rem; padding: 1%; border:solid; background-color: rgb(175, 182, 185);"><br><br>

        <input type="password" aria-label="fa-solid" placeholder="Password" id="Password"name="password"
          style="height: 3rem; width: 17rem; padding: 1%;border: solid; background-color: rgb(175, 182, 185);"><br>

        <label for="" style="color: white;"><input type="checkbox" style="margin-left: -30%;">Remember me</label>

        <label for=""><a href="login.php" style="text-decoration: none;">Forgot Password?</a></label><br><br>

     <button type="submit"
          style="height: 3rem; width: 8rem; border-radius: 10cm;border: whitesmoke; background-color: rgb(10, 124, 206);">Sing
          in</button>

      </form>


</body>

</html>