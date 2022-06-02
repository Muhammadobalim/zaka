
<?php include_once "validate.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.css">

</head>
<body class="bg-success">
  <div class="container w-50 my-auto mx-auto bg-white pt-5 px-0 rounded-3 mt-lg-5 shadow-lg">
     <div class="card-body p-5">
        <form action="" method="post">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control border-success border-end rounded-pill shadow-lg" name="Username" id="Username" placeholder="Username">
              <label for="floatingLabel" class="text-success"><i class="bi bi-person-fill" style="font-size:20px;"></i>Username</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control border-success border-end text-success rounded-pill shadow-lg" name="Password" id="Password" placeholder="Password">
              <label for="floatingLabel " class="text-success"><i class="bi bi-key" style="font-size:20px;"></i> Password</label>
            </div>
            <button type="submit" class="btn btn-success  btn-lg text-white rounded-pill mx-auto d-block m-5" style="width: 200px;">Login</button>
            <div class="row d-flex">
                <div class="col ">
                    <a href="#">Forgot password</a>
                </div>
                <div class="col">
                  <a href="#">Signup</a>
              </div>
  
            </div>
           
        </form>
     </div>
      <div class="card-footer bg-dark text-white text-center">
        <div class="card-text">Copyright your company &copy;2022</div>
    </div>
  </div> 
</body>
</html>