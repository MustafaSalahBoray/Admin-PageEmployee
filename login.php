<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css?version=1">
  <!--===============================================================================================-->
</head>

<?php include 'header.php' ?>

<body class="hold-transition login-page ">

  <body>

    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG">
          </div>

          <form class="login100-form validate-form" method="POST">
            <span class="login100-form-title">
              Member Login
            </span>

            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="email" placeholder="Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <input class="input100" type="password" name="pass" placeholder="Password">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
            <div class="form-group mb-3">
              <label for="">Login As</label>
              <select name="login" id="" class="custom-select custom-select-sm">
                <option value="Employee">Employee</option>
                <option value="manager">manager</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
            <div class="container-login100-form-btn">
              <button class="login100-form-btn" type="submit" name="submit">
                Login
              </button>
            </div>

            <!-- <div class="text-center p-t-12">
              <span class="txt1">
                Forgot
              </span>
              <a class="txt2" href="#">
                Username / Password?
              </a>
            </div> -->

            <!-- <div class="text-center p-t-136">
              <a class="txt2" href="#">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>
    </div>

    <!-- /.login-box -->

    <script>
      // $(document).ready(function() {
      //   $('#login-form').submit(function(e) {
      //     e.preventDefault()
      //     start_load()
      //     if ($(this).find('.alert-danger').length > 0)
      //       $(this).find('.alert-danger').remove();
      //     $.ajax({
      //       url: 'ajax.php?action=login',
      //       method: 'POST',
      //       data: $(this).serialize(),
      //       error: err => {
      //         console.log(err)
      //         end_load();

      //       },
      //       success: function(resp) {
      //         if (resp == 1) {
      //           location.href = 'index.php?page=home';
      //         } else {
      //           $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
      //           end_load();
      //         }
      //       }
      //     })
      //   })
      // })
    </script>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <?php include 'footer.php' ?>

  </body>

</html>
<?php if (isset($_POST['submit']))
{   require 'DB.php';
  if ($_POST['login']==="Admin") 
   {
  
     $Login=$db->prepare("SELECT * FROM admin  WHERE Email=:Email  AND password=:password");
     $Login->bindparam("Email",$_POST['email']);
     $Login->bindparam("password",$_POST['pass']);
     $Login->execute();
     if ($Login->rowcount()==1) { //if account is arleady is mysql
        
            $user=$Login->fetchObject();
          if($user->ACTIVED==="0"){
        $_SESSION['admin']=$user;
        print_r($_SESSION['admin']);
        echo "<script>window.open('http://localhost/Admin%20PageEmployee/','_self')</script>";
     }}
  }
  elseif ($_POST['login']==="manager")
   {
    
     $Login=$db->prepare("SELECT * FROM manager  WHERE Email=:Email  AND Password=:Password ");
     $Login->bindparam("Email",$_POST['email']);
     $Login->bindparam("Password",$_POST['pass']);
     $Login->execute();
     if ($Login->rowcount()==1) {
        
            $user=$Login->fetchObject();
          if($user->ACTIVED==="0"){
        $_SESSION['admin']=$user;
        // print_r($_SESSION['admin']);
         echo "<script>window.open('http://localhost/Manager%20Page%20Project%20Emploeyee/Content//','_self')</script>";
     }}
  }
    elseif ($_POST['login']==="Employee")
   {
    
     $Login=$db->prepare("SELECT * FROM employee  WHERE Email=:Email  AND Password=:Password ");
     $Login->bindparam("Email",$_POST['email']);
     $Login->bindparam("Password",$_POST['pass']);
     $Login->execute();
     if ($Login->rowcount()==1) {
        
            $user=$Login->fetchObject();
          if($user->ACTIVED==="0"){
        $_SESSION['admin']=$user;
        // print_r($_SESSION['admin']);
         echo "<script>window.open('http://localhost/Employe%20Page%20Project%20Employee/Content/','_self')</script>";
     }}
  }
}
?>