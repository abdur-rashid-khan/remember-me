<?php
    include_once ('config.php');

    if(isset($_POST['login'])){
        $mail=mysqli_real_escape_string($con,$_POST['email']);
        $pass=mysqli_real_escape_string($con,$_POST['pass']);
        $cheeck_data=mysqli_query($con,"SELECT * FROM user where useremail='$mail'");
        $num=mysqli_num_rows($cheeck_data)  ;
        if($num>0){
            $fetch_data=mysqli_fetch_assoc($cheeck_data);

            $fetch_data_mail= $fetch_data['useremail'];
            $haspassword=sha1(md5(($pass)));
            if($fetch_data['useremail'] == $mail && $fetch_data['password'] == $haspassword){
            header("location:users.php"); 
            }else{
                echo "Invalid Pass Given ";
            }
        }else{
            echo "nn ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-form">
        <form action="" method="POST">
            <input type="email"name="email" placeholder="Enter Your email " >
            <input type="password"name="pass" placeholder="Enter Your Password" >
            <input type="submit"name="login" >
        </form>
    </div>
</body>
</html>