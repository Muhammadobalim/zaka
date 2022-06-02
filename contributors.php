<?php include_once "includes/connect.php"; ?>
<!doctype html>
<?php
// a nested if statement
if(isset( $_POST["Submit"]) && isset( $_POST["Firstname"])  && isset( $_POST["Lastname"]) && isset( $_POST["Phone Number"]) && isset( $_POST["Address"]) && isset( $_POST["Date of Payment"]) && isset( $_POST["Mode of Payment"]) && isset( $_POST["Mosque name"])){
    $Firstname= $_POST["Firstname"];
    $Lastname= $_POST["Lastname"];
    $Phone_number= $_POST["Phone Number"];
    $Address= $_POST["Address"];
    $dop= $_POST["Date of Payment"]; 
    $mop= $_POST["Mode of Payment"]; 
    $Mosque_name= $_POST["Mosque name"]; 
    //Declaring a variable
    if( !empty( $Firstname) && !empty( $Lastname) && !empty( $Phone_number) && !empty( $Address) && !empty( $dop) && !empty( $mop) && !empty( $Mosque_name))
    {


    $sql = "INSERT INTO contributors(Firstname,Lastname,Phone_number,`Address`,dop,mop,Mosque_name,`image`) VALUES ('$Firstname','$Lastname','$Phone_number','$address','$dop','$mop','$Mosque_name','')";
        if (mysqli_query($connection, $sql))
        {
           echo "data inserted"; 
        } 
        else
        {
            echo "not inserted";
        }
        // string <concertination..... joining two strings.
    }
    else{
        echo "Please enter all fields";
    }
}
else{
    echo "does not exist";
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>
<!-- ==========================================Dashboard======================================== -->
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contributors.php">
              <span data-feather="file"></span>
              CONTRIBUTORS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mosque.php">
              <span data-feather="shopping-cart"></span>
              MOSQUE
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="collectors.php">
              <span data-feather="bar-chart-2"></span>
              COLLECTORS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
            
            </a>
          </li>
        </ul>

      
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
     <div class="bg-item align-center">
       <h2 class="h3">CONTRIBUTORS</h2>
     </div>
     <div class="bg-item">
       <h4 class="h5">ZAKATUL-MAAL</h4>
      <P class="f">Add a contributor</P>
     </div>
     
       <div class="form-control">
         <form action="" method="POST" class="form-control">
           <div class="mb-3">
<label for="firstn">Firstname</label>
<input type="text" class="form-control" placeholder="firstname" name="firstnaem">
           </div>
          <div class="mb-3">
            <label for="lastn">Lastname</label>
            <input type="text" class="form-control" name="lastname" placeholder="lastname">
          </div>
          <div class="mb-3">
            <label for="telno">Phone Number</label>
            <input type="text" class="form-control" placeholder="phone_number" name="phone number">
          </div>
          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" placeholder="Address" name="address">
          </div>
          <div class="mb-3">
            <label for="dop">Date of Payment</label>
            <input type="text" class="form-control" placeholder="Date of payment" name="date of payment">
          </div>
          <div class="mb-3">
            <label for="Mop">Mode of Payment</label>
            <select name="nationality" id="" class="form-control">
              <option value="" selected>Select mode of payment</option>
              <option value="Money">Money/Cash</option>
              <option value="Agricultural Produces">Agricultural Produces</option>
              <option value="livestock">Livestock</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="mosque">Mosque name</label>
            <input type="text" class="form-control" placeholder="mosque Name" name="Mosque Id">
          </div>
          
         </form>
       </div>

     <button type="submit" class="btn btn-success  btn-lg text-white rounded-pill mx-auto d-block m-3"
            style="width: 150px;">SUBMIT</button> <button type="submit" class="btn btn-grey  btn-lg text-white rounded-pill mx-auto d-block m-5"
            style="width: 250px;"><a href="display.php">SHOW CONTRIBUTORS</a></button>
             <button type="submit" class="btn btn-grey  btn-lg text-white rounded-pill mx-auto d-block m-5"
            style="width: 250px;"><a href="update.php">UPDATE CONTRIBUTORS</a></button>
             <button type="submit" class="btn btn-grey  btn-lg text-white rounded-pill mx-auto d-block m-5"
            style="width: 250px;"><a href="display.php">DELETE CONTRIBUTORS</a></button>
      
     
    </main>
  </div>
</div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="js/dashboard.js"></script>
  </body>
</html>
