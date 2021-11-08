<?php 
session_start();
session_unset();
unset($_SESSION['username']);
?>
   <script>
      alert("logout successfully");
      location.replace('index.php');
   </script>
<?php 
?>
<?php include "code.php" ?>
