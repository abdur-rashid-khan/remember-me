<?php include "header.php"; ?>
<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update User Details</title>
</head>
<body>
<div id="admin-content">
   <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="admin-heading">Update User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
               <!-- Form Start -->
               <!-- data fetch  -->
               <?php 
                  if(isset($_GET['id'])){
                     $id=$_GET['id'];
                  $select="SELECT * FROM `user` WHERE `user_id`='$id'";
                  $query=mysqli_query($con,$select);
                  $numrows=mysqli_num_rows($query);
                  if($numrows){
                     while($datafetch=mysqli_fetch_assoc($query)){
                        $user_id=$datafetch['user_id'];
                        $fastname=$datafetch['first_name'];
                        $lastname=$datafetch['last_name'];
                        $username=$datafetch['username'];
                        $role=$datafetch['role'];
                        $useremail=$datafetch['useremail'];
               ?>
               <form  action="" method ="POST">
                     <div class="form-group">
                        <input type="text" disabled name="user_id"  class="form-control" value="<?php echo $user_id ?>" placeholder="" >
                     </div>
                        <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" value="<?php echo $fastname ?>" placeholder="" required>
                     </div>
                     <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" class="form-control" value="<?php echo $lastname ?>" placeholder="" required>
                     </div>
                     <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username ?>" placeholder="" required>
                     </div>
                     <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control"  name="role" value="">
                           <option selected disabled>
                              <?php
                              if($role==1){
                                    echo "Admin";
                                 }else{
                                    echo "Normal";
                                 } 
                              ?>
                           </option>
                           <option value="0">Normal User</option>
                           <option value="1">Admin</option>
                        </select>
                     </div>
                     <!-- <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required value="<?php echo $useremail ?>">
                     </div> -->
                     <input type="submit" name="update" class="btn btn-primary" value="Update" required />
               </form>
               <?php 
                     }
                  }
               }
               ?>
               <!-- update now -->
               <?php 
                  if(isset($_GET['id'])){
                     $id=$_GET['id'];
                     if(isset($_POST['update'])){
                        $f_name=$_POST['f_name'];
                        $l_name=$_POST['l_name'];
                        $username=$_POST['username'];
                        $role=$_POST['role'];
                        // $email=$_POST['email'];
                        // $sercheemail="SELECT * FROM `user` WHERE `useremail`='$email'";
                        // $query=mysqli_query($con,$sercheemail);
                        $update="UPDATE `user` SET `first_name`='$f_name',`last_name`='$l_name',`username`='$username',`role`='$role' WHERE `user_id`='$id'";
                           $query=mysqli_query($con,$update);
                           if($query){
                              ?>
                                 <script>
                                    alert('Update successfully');
                                    location.replace('users.php');
                                 </script>
                              <?php 
                           }else{
                              ?>
                                 <script>
                                    alert('Update faile');
                                    location.replace('users.php');
                                 </script>
                              <?php 
                           }
                     }
                  }
               ?>
               <!-- /Form -->
            </div>
         </div>
   </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>