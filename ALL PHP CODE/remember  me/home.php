<?php session_start();
if(!$_SESSION['username']){
   header("location:index.php");
}
?>
<?php include "code.php" ?>
<?php include "link.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
</head>
<body>
   <h2>wellcame <?php echo $_SESSION['username'] ?></h2>
   <a href="logout.php?logout" class="btn btn-danger">Logout</a>
</body>
</html>