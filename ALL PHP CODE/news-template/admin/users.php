<?php include "header.php"; ?>
<?php include "config.php"; ?>
<?php include "link.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Users</title>
</head>
<body>
<div id="admin-content">
   <div class="container">
         <div class="row">
            <div class="col-md-10">
               <h1 class="admin-heading">All Users</h1>
            </div>
            <div class="col-md-2">
               <a class="add-new" href="add-user.php">add user</a>
            </div>
            <div class="col-md-12">
               <table class="content-table">
                     <thead>
                        <th>S.No.</th>
                        <th>User Name</th>
                        <th> E-mail</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </thead>
                     <!-- data show  ORDER BY DESC -->
                     <?php 
                        $select="SELECT * FROM `user`  ";
                        $query=mysqli_query($con,$select);
                        $numrows=mysqli_num_rows($query);
                        if($numrows){
                           while($datafetch=mysqli_fetch_assoc($query)){
                              $user_id=$datafetch['user_id'];
                              $username=$datafetch['username'];
                              $role=$datafetch['role'];
                              $useremail=$datafetch['useremail'];
                     ?>
                     <tbody>
                        <tr>
                           <td><?php echo $user_id ?></td>
                           <td><?php echo $username ?></td>
                           <td><?php echo $useremail ?></td>
                           <td><?php if($role==1){
                              echo "Admin";
                           }else{
                              echo "Normal";
                           } ?></td>
                           <td><a style="color:#03c900; " href="update-user.php?id=<?php echo $user_id ?>"><i class="far fa-edit"></i></a></td>
                           <td><a style="color:#F70000;" href="delete-user.php?id=<?php echo $user_id ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                     </tbody>
                     <?php 
                        }
                     }
                  ?>
               </table>
               <ul class='pagination admin-pagination'>
                     <li class="active"><a>1</a></li>
                     <li><a>2</a></li>
                     <li><a>3</a></li>
               </ul>
            </div>
         </div>
   </div>
</div>
<?php include "header.php"; ?>
</body>
</html>