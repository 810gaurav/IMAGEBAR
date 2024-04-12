<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icons link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./img/bootstrap.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- end of icon links -->
  <link href="./img/bootstrap.min.css" rel="stylesheet">
  <script src="./img/bootstrap.bundle.min.js.Download"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <style type="text/css">
    .card img:hover {
      filter: blur(3px);
      transition: 0.5s;
    }

    .card img {
      filter: blur(0px);
    }

    * {

      color: rgb(206, 23, 87);
    }


    .imgg {
      height: 30em;
    }

    .card-title {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bolder;
      text-align: center;

    }

    .heading_1 {
      text-align: center;
      height: 2rem;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bolder;
    }


    .con-2 {
      height: 250px;
      margin: auto;
      position: relative;
      width: 90%;
      display: grid;
      place-items: center;
      overflow: hidden;
    }

    .slide-container {
      display: flex;
      width: calc(250px *10);
      animation: scroll 20s linear infinite;

    }

    @keyframes scroll {
      0% {
        transform: translatex(0%);
      }

      100% {
        transform: translateX(calc(-250px * 5));
      }
    }

    .slide-image {
      height: 250px;
      width: 250px;
      display: flex;
      align-items: center;
      padding: 5px;
      perspective: 100px;
    }

    img {
      width: 100%;
    }

    footer {
      background-color: #dddddd;
      font-size: 12px;
      font-weight: 400;}

    .Copyright {
      font-size: 10px;
      background-color: #0e181d;
      padding-top: 12px;
      align-items: center;
      justify-content: space-evenly;
      display: flex;
    }
  </style>
  <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <h1>IMAGEBAR</h1>
      </a>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://127.0.0.1:5500/bootstrap%20project.html#"
                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Trandings
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="top.php">TOP</a></li>
                <li><a class="dropdown-item" href="manth.php">MANTH</a></li>
                <li><a class="dropdown-item" href="year.php">YEAR</a></li>

              </ul>
            </li>
          </ul>
        </div>
    </div>
  </nav>
  <!-- this is our slidebar -->
  <div id="carouselExampleIndicators" class="carousel slide m-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class=""
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
        class=""></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"
        class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="./img/3d.jpg" class="d-block w-100 imgg " alt="First img" style="opacity: 1;">
        <div class="carousel-caption d-none d-md-block text-warning fst-italic">
          <h2><strong> Trandings</strong></h2>
          <p>tranding 3d ,hd and 4k images</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/dress2.jpg" class="d-block w-100 imgg" alt="second img" style="opacity: 1;">
        <div class="carousel-caption d-none d-md-block text-warning fst-italic">
          <h2><strong> Trandings</strong></h2>
          <p>trandin fashion images for all category</p>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="./img/dark.jpg" class="d-block w-100 imgg" alt="third img" style="opacity: 1;">
        <div class="carousel-caption d-none d-md-block text-warning fst-italic">
          <h2><strong> Trandings</strong></h2>
          <p>tranding dark images mon ,night and other</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="heading_1">WELCOME TO IMAGEBAR</h1>

  <br>


  <!-- cards here  -->
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title">Fashion</h3>
          <a href="fashion.php"><img src="./img/dress2.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>


        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>Nature</b></h3>

          <a href="nature.php"><img src="./img/nature.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>

        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>Dark</b></h3>

          <a href="dark.php"> <img src="./img/dark.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>

        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>Animal</b></h3>

          <a href="animal.php"><img src="./img/animal.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>


        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>Animation</b></h3>

          <a href="animation.php"><img src="./img/animation.jpg"
              class="bd-placeholder-img card-img-top" width="100%" height="225"></a>


        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>4k</b></h3>

          <a href="4k.php"><img src="./img/4k.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>


        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>3d</b></h3>

          <a href="3d.php"><img src="./img/3d.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>


        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>hd</b></h3>

          <a href="hd.php"><img src="./img/hd.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>

        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <h3 class="card-title"><b>God</b></h3>

          <a href="god.php"><img src="./img/god.jpg" class="bd-placeholder-img card-img-top"
              width="100%" height="225"></a>


        </div>
      </div>
    </div>
  </div>
  <!-- cards end here -->

  <!-- infainite slider  -->


  <div id="slider-body">
    <div class="con-2">
      <div class="slide-container">
        <div class="slide-image">
          <a href="dark.php"><img src="img/dark.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="animation.php"><img src="img/animation9.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="nature.php"><img src="img/nature4.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="fashion.php"><img src="img/f3.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="4k.php"><img src="img/4k4.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="god.php"><img src="img/god9.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="dark.php"><img src="img/dark3.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="animal.php"><img src="img/animal8.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="4k.php"><img src="img/4k1.jpg" alt="loading"></a>
        </div>
        <div class="slide-image">
          <a href="hd.php"><img src="img/hd3.jpg" alt="loading"></a>
        </div>


      </div>
    </div>
  </div>

  <footer>
  <div class="main div" style="display: flex; justify-content:space-around; padding: 4%;">
      <div class="div1-footer">
        <h1><i class="fa-solid fa-images" style="color: #0e95d8; height: 2rem; width: 3rem;"></i> IMAGEBAR</h1>
        <pre>This is the best wey to searching for <br> your projects , buisness and other <br>helpful Images I hope this help's you.
        </pre>
      </div>

      <div class="div2-footer">
        <ul type="none">
          <h3>Main Pages</h3>
          <li><a href="index.php" style="text-decoration: none; color:#000080;">Home</a></li>
          <li><a href="login.php" style="text-decoration: none; color:#000080;">sign in</a></li>
          <li><a href="about.php" style="text-decoration: none;color:#000080;">About</a></li>
        </ul>
      </div>

      <div class="div3-footer">
        <ul type="none">
          <h3>Tranding Pages</h3>
          <li><a href="dark.php" style="text-decoration: none; color:#000080; ">Dark</a></li>
          <li><a href="nature.php" style="text-decoration: none; color:#000080;">Nature</a></li>
          <li><a href="animaton.php" style="text-decoration: none; color:#000080;">Animation</a></li>
        </ul>
      </div>

      <div>
        <ul>
          <div class="d-flex my-5 " style="justify-content: center; align-items: center;">
            <a href="https://www.facebook.com/PinterestIndia?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-2xl"
                style="color: #1a5bcb; padding: 0% 2% 0%;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.instagram.com/gaurav_gupta800/"><i class="fa-brands fa-instagram fa-2xl"
                style="color: #e50c8b;padding: 0% 2% 0%;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a
              href="https://www.linkedin.com/blog/member/product/linkedin-profile-photo-tips-introducing-photo-filters-and-editing"><i
                class="fa-brands fa-linkedin fa-2xl" style="color:  #01471c;padding: 0% 2% 0%;"></i></a>
          </div>
      </div>
    </div>
    <div class="Copyright">
      <p>© 2023-2024, Imagebar.com, Gaurav Developer<br>The content has been copied by | unsplash.com</p>
    </div>
  </footer>
</body>

</html>