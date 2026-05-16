<?php

require_once 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
//trajaali l user li aandou email edheka ken fama

   if(mysqli_num_rows($select_users) > 0){ //couf ken fama haja

      $row = mysqli_fetch_assoc($select_users); //trajaali tableau associative
      if($row['user_type'] == 'admin'){

         // If the user is an admin, set session variables for admin details
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];

         // redirect lel admin page
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         // If the user is a regular user, set session variables for user details
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];

         // Redirect the user to the home page
         header('location:home.php');

      }

   }else{
      // ken ma famma had
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/a3.css?v=<?php echo time(); ?>">
   <link rel="icon" href="images\Plantopia.png" type="image/x-icon" >
</head>
<body>
<div id="background-video">
   <video autoplay loop muted>
      <source src="images/vvvv3.mp4" type="video/mp4">
      Your browser does not support the video tag.
   </video>
</div>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
    <div class="form-container">
        <form action="" method="post">
            <h2>🍃WELCOME TO PLANTOPIA🍃</h2>
            <h3>Login now</h3>
            <input type="email" name="email" placeholder="enter email" required class="box">
            <input type="password" name="password" placeholder="enter password" required class="box">
            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have an account? <a href="register.php"">register now</a></p>
        </form>
    </div>
</body>
</html>