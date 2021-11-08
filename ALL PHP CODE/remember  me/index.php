<?php session_start() ?>
<?php include 'code.php' ?>
<?php include 'link.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
      <div class="log_all_div">
         <div class="log_div">
            <div class="header text-center py-3">
               <h2>login</h2>
            </div>
            <div class="session bg-primary text-light px-3 py-1 mb-2">
               <p>
                  <?php 
                     if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                     }else{
                        echo $_SESSION['msg']='login now';
                     }
                  ?>
               </p>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
               </div>
               <input type="email" name="loginemail" placeholder="E-maill adderss" class="form-control" value="<?php if(isset($_COOKIE['emailcooke'])){ echo $_COOKIE['emailcooke'];}  ?>" required />
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
               </div>
               <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php if(isset($_COOKIE['passwordcooke'])){ echo $_COOKIE['passwordcooke'];}  ?>" required />
            </div>
            <div class="remember_me pb-2">
               <div class="form-check">
                  <label class="form-check-label" id="check">
                     <input type="checkbox" class="form-check-input" name="rememberme" id="check" >
                     remember me
                  </label>
               </div>
            </div>
            <input type="submit" value="login now" name="loginnow" class="btn btn-info form-control" id="btn">
            <div class="or text-center py-3">
               <span class="h4 ">or</span>
            </div>
            <div class="login_with text-center">
            <p class="text-muted py-1">Login with </p>
            </div>
            <div class="all_icon">
               <div class="facebook">
                  <a href="#"><span><i class="fab fa-facebook"></i></span></a>
               </div>
               <div class="google">
                  <a href="#"><span><i class="fab fa-google"></i></span></a>
               </div>
               <div class="insta">
                  <a href="#"><span><i class="fab fa-instagram"></i></span></a>
               </div>
               <div class="goole_plush">
                  <a href="#"><span><i class="fab fa-google-plus-g"></i></span></a>
               </div>
               <div class="twitter">
                  <a href="#"><span><i class="fab fa-twitter"></i></span></a>
               </div>
            </div>
            </form>
            <div class="haveaccount text-center py-3">
               <p class="text-muted">creeat accout ! <a href="sigup.php">click now</a></p>
            </div>
         </div>
      </div>
   </div>
</body>
</html>