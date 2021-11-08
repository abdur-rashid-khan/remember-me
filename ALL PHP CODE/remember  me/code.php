<?php 
$server="localhost";
$name="root";
$password="";
$db="login_logout";
$con=mysqli_connect($server,$name,$password,$db);
?>
<!-- creeat accout  -->
<?php
if(isset($_POST['creeataccoutn'])){
   $username= mysqli_real_escape_string($con, $_POST['username']);
   $usernumber= mysqli_real_escape_string($con, $_POST['usernumber']);
   $useremail= mysqli_real_escape_string($con, $_POST['useremail']);
   $creeatpassword= mysqli_real_escape_string($con, $_POST['creeatpassword']);
   $conformpassword= mysqli_real_escape_string($con, $_POST['conformpassword']);
   $hasCreeatpass=password_hash($creeatpassword,PASSWORD_BCRYPT);
   $hasConfirmpass=password_hash($conformpassword,PASSWORD_BCRYPT);
   $token=bin2hex(random_bytes(15));
   $emailserch="SELECT * FROM `loginlogout` WHERE `useremail`='$useremail'";
   $query=mysqli_query($con,$emailserch);
   $numrows=mysqli_num_rows($query);
   if($numrows > 0){
      ?>
         <script>
            alert('allready saved this email');
            location.replace('sigup.php');
         </script>
      <?php 
   }else{
      if($creeatpassword==$conformpassword){
         $insertquery="INSERT INTO `loginlogout`(`username`, `usernumber`, `useremail`, `creeatepassword`, `confpassword`, `token`, `status`) VALUES ('$username','$usernumber','$useremail','$hasCreeatpass','$hasConfirmpass','$token','inactive')";
         $inserquery=mysqli_query($con,$insertquery);
         if($inserquery){
            $subject="E-mail Activation";
            $body="HI , $username . click here too activate your accout http://localhost/all%20php%20code/remember%20%20me/active.php?token=$token";
            $senderemail="From:rashidkhanbd57@gmail.com";
            if(mail($useremail,$subject,$body,$senderemail)){
               $_SESSION['msg']="check your mail activate your accout $useremai";
               ?>
               <script>
                  alert("E-mail send successfully");
                  location.replace('index.php');
               </script>
               <?php 
            }else{
               $_SESSION['msg']="E-mail send unsuccessfully $useremai";
               ?>
               <script>
                  alert("E-mail send faile");
                  location.replace('index.php');
               </script>
               <?php
            }
            // ?>
            // <script>
            //    alert('creeat accout successfully');
            //    location.replace('index.php');
            // </script>
            // <?php 
         }else{
            ?>
               <script>
                  alert('query faile');
               </script>
            <?php
         }
      }else{
         ?>
            <script>
               alert("Don't macing password");
               location.replace('sigup.php');
            </script>
         <?php 
      }
   }
}
?>
<!-- login -->
<?php 
if(isset($_POST['loginnow'])){
   $logemail=$_POST['loginemail'];
   $logpassword=$_POST['loginpassword'];
   $emailserch="SELECT * FROM `loginlogout` WHERE `useremail`='$logemail'";
   $query=mysqli_query($con,$emailserch);
   $numrows=mysqli_num_rows($query);
   if($numrows){
      $datafatch=mysqli_fetch_assoc($query);
      $fatchpass=$datafatch['confpassword'];
      $_SESSION['username']=$datafatch['username'];
      $verfiypass=password_verify($logpassword,$fatchpass);
      if($verfiypass){
         if(isset($_POST['rememberme'])){
            setcookie('emailcooke',$logemail,time()+86400);
            setcookie('passwordcooke',$logpassword,time()+86400);
            ?>
               <script>
                  alert('login successfully');
                  location.replace('home.php');
               </script>
            <?php
         }else{
            ?>
            <script>
               alert('login successfully');
               location.replace('home.php')
            </script>
         <?php
         }
      }
   }else{
      ?>
         <script>
            alert('Not found this email');
         </script>
      <?php 
   }
}
?>