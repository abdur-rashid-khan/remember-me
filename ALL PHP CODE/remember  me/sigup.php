
<?php include 'code.php' ?>
<?php include 'link.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>sigup</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
      <div class="all_div">
         <div class="min_div">
            <div class="header text-center py-3">
               <h2>Sigup</h2>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
               </div>
               <input type="text" name="username" placeholder="User name" class="form-control" required />
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
               </div>
               <input type="number" name="usernumber" placeholder="User number" class="form-control" required />
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
               </div>
               <input type="email" name="useremail" placeholder="User email" class="form-control" required />
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
               </div>
               <input type="password" name="creeatpassword" placeholder="creeat password" class="form-control" required />
            </div>
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
               </div>
               <input type="password" name="conformpassword" placeholder="conform password" class="form-control" required />
            </div>
            <input type="submit" value="creet accout " name="creeataccoutn" class="btn btn-info form-control" id="btn">
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
            <!-- sigup // creeat accout -->
            
            <div class="haveaccount text-center py-3">
               <p class="text-muted">I HAVE ACCOUNT ! <a href="index.php">click now</a></p>
            </div>
         </div>
      </div>
   </div>
</body>
</html>