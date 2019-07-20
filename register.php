
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-warning">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="register.php">
          <?php include('errors.php'); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Username</label>
                <input class="form-control" id="exampleInputName" type="text"   name="username" value="<?php echo $username; ?>" >
              </div>
              
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Age</label>
                <input class="form-control" id="age" type="int"   name="age" value="<?php echo $age; ?>" >
              </div>
            <div class="form-group">
            <label for="exampleInputName">Gender</label>
                <input class="form-control" id="exampleInputName" type="text"   name="gender" value="<?php echo $gender; ?>" >
              </div>
            <div class="form-group">
            <label for="exampleInputName">Nationality</label>
                <input class="form-control" id="nation" type="text"   name="nationality" value="<?php echo $nationality; ?>" >
              </div>
            <div class="form-group">
            <label for="exampleInputName">State</label>
                <input class="form-control" id="state" type="text"   name="state" value="<?php echo $state; ?>" >
              </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >
              </div>
             <div class="col-md-6">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >
              </div>
            </div>
          </div>
        
          
           <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
        <!---  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        </div>
      </div>
    </div>
  </div>
  
</body>

</html>
