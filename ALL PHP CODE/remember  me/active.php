<!-- active account  -->
<?php session_start() ?>
<?php include "code.php" ?>
<?php
if(isset($_GET['token'])){
   $token=$_GET['token'];
   $updatedata="UPDATE `loginlogout` SET `status`='actived' WHERE `token`='$token'";
   $updatequery=mysqli_query($con,$updatedata);
   if($query){
      ?>
         <script>
            alert('login successfully');
            location.replace('home.php');
         </script>
      <?php
   }else{
      ?>
         <script>
            alert('check your E-mail then login now');
            location.replace('index.php');
         </script>
      <?php
      echo $_SESSION['msg']="check your E-mail then login now";
   }
}

?>