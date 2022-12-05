
<?php
session_start();
?><!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>index</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="csss/styles.css" rel="stylesheet" />
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        
        
   
</head>

<body >



  <!--navbar start-->
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sofa House</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pro1.php">Products</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link active">Contact</a>
        </li> 
         <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <!--navbar end-->


  <style>
    #main{
        margin-top: 3rem ;
        margin-left:calc(100% - 90rem) ;
        
        display: inline-block;
        /* grid-template-columns: 400px 400px 400px; */
        /* gap: 3rem; */
    }
    .main img{
      width:400px;
    }
    .card{
        margin-left:35px;
    }
    .card-img-top{
       
      width: 350px;
      height: 200px;
        margin-bottom: 50px;
    }
    .card-img-top:hover{
      transform:scale(1.1);
    }
    #tbl{
        display: inline;
    }
</style>
</head>
<div class="table-responsive" id="tbl">
  <?php
  $connection = mysqli_connect("localhost","root","","add");

  $query= "SELECT * from fer ";
  $query_run = mysqli_query($connection,$query);
  ?>

<body>
<?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {    
         ?>
    <div id="main">
 <div class="card" style="width: 350px; margin-left:100px; border: none; border-bottom: 3px solid #ddd; border-radius: 0%;">
 <?php echo '<img src="../admin/upload/'.$row['image'].'" class="card-img-top" alt="Error" width="200px" height="200px" style="border-radius: 0px;">'?>
        <div class="card-body">
          <h5 class="card-title" style="font-weight:bold;"><?php echo $row['tittle'];?></h5>
          <p class="card-text" style="font-weight:bold;">
          <?php echo $row['subtitle'];?></p>
            <h2>$ <?php echo $row['price'];?></h2>
            <a href="detail.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-dark">Buy Now</button></a>
      </td>

          
        </div>
      </div>
      </div>
    </div>
</body>
</html>

<?php
        }
      }
        else
        {
        echo"record not found";
        }
      ?>
  <footer>
  <p class="p-3 bg-dark text-white text-center">Sofa House   Copyright 2022 All Right Reserved</p>
</footer>
        
    </body>
</html>
