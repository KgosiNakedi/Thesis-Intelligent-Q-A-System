<?php
$error = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
   require_once './commons/mysql.php';
   $res = $Db->query('SELECT * from users where username = ? && password = ?', [$_POST['username'], $_POST['password']])->getRows();
   if (count($res) < 1) {
      $error = 'Incorrect username or password';
   } else {
      session_start();
      $_SESSION['user_id'] = $res[0]['id'];
      $_SESSION['username'] = $res[0]['username'];
      $_SESSION['fname'] = $res[0]['fname'];
      $_SESSION['lname'] = $res[0]['lname'];
      $_SESSION['role'] = $res[0]['role'];
      $_SESSION['image_url'] = IMG_DIR . '/' . $res[0]['profile_image_filename'];
      header('Location: ./index.php');
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="./assets/styles/main.css">
   <link rel="stylesheet" href="./assets/styles/login_resgister.css">

   <title>Animated login form - Bedimcode</title>
</head>

<body>
   <div class="login">
      <img src="login-bg.png" alt="" class="login__img">

      <form method="post" action="./login.php" class="login__form">
         <h1 class="login__title">Login</h1>

         <div class="login__content">
            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

               <div class="login__box-input">
                  <input name='username' required type="email" required class="login__input" placeholder=" ">
                  <label for="" class="login__label">Email</label>
               </div>
            </div>


            <div class="login__box">
               <i class="ri-lock-2-line login__icon"></i>

               <div class="login__box-input">
                  <input required name='password' type="password" required class="login__input" id="login-pass" placeholder=" ">
                  <label for="" class="login__label">Password</label>
                  <i class="ri-eye-off-line login__eye" id="login-eye"></i>
               </div>
            </div>
         </div>

         <div class="login__check">
            <div class="login__check-group">
               <input type="checkbox" class="login__check-input">
               <label for="" class="login__check-label">Remember me</label>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>
         </div>

         <button class="login__button">Login</button>

         <p class="login__register">
            Don't have an account? <a href="./register.php">Register</a>
         </p>


         <?php
         if ($error) {
         ?>
            <div class='error  p1 round1 v-flex c-c'>
               <?php echo $error ?>
               <div>
               <?php
            }
               ?>
      </form>
   </div>

   <!--=============== MAIN JS ===============-->
   <script src="trial.js"></script>
</body>

</html>