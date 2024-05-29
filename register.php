<?php
$error = '';
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['Conf_password'])) {
   require_once './commons/mysql.php';
   require_once './commons/function.php';

   $res1 = $Db->query('SELECT * from users where username = ?', [$_POST['username']])->getRows();
   if (count($res1) > 0) {
      $error = 'User Already exists with the same name please chose another one';
   }

   if ($_POST['password'] !=  $_POST['Conf_password']) {
      $error = "Passwords don't match";
   }
   if (!$error) {

      $res = $Db->query(
         "INSERT INTO `users`
 (`username`, `password`, `fname`, `lname`) VALUES 
 (?,?,?,?);",
         [
            $_POST['username'],
            $_POST['password'],
            $_POST['fname'],
            $_POST['lname'],
         ]
      )->lastId();
      $t = time();
      if ($res) {
         if (upload('image', './src/profileimages/' . $t . '.jpg')) {

            $Db->query("UPDATE `users` SET `profile_image_filename` = ? WHERE `users`.`id` = ?;", [$t . '.jpg', $res]);
         } else {
            $error = 'Upload error';
         }
      }
      if ($res  & !$error) {
         header('Location: login.php');
      }
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
   <link rel="stylesheet" href="trial.css">

   <title>Animated login form - Bedimcode</title>
   <link rel="stylesheet" href="./assets/styles/main.css">
   <link rel="stylesheet" href="./assets/styles/login_resgister.css">
   <script>
      function openLoginPage() {

      }
   </script>
</head>
<style>
   #resform {
      margin-block: 100px;
   }
</style>

<body>
   <div class="login">
      <img src="login-bg.png" alt="" class="login__img">

      <form id='resform' action='./register.php' method='post' enctype="multipart/form-data" action="./" class="login__form ">
         <h1 class="login__title ">Register</h1>


         <label for='upp' class="profile-picture">

            <h1 class="upload-icon">
               <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
            </h1>
            <input class="file-uploader" type="file" id='upp' onchange="upload()" accept="image/*" required name='image' />
         </label>


         <div class="login__content mt1">
            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

               <div class="login__box-input">
                  <input value="<?php echo $_POST['username'] ?? ''; ?>" id='cpss' name='username' type="email" required class="login__input" placeholder=" ">
                  <label for="cpss" class="login__label">Email</label>
               </div>
            </div>


            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

               <div class="login__box-input">
                  <input value="<?php echo $_POST['fname'] ?? ''; ?>" name='fname' type="text" required class="login__input" placeholder=" ">
                  <label for="" class="login__label">First name</label>
               </div>
            </div>


            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

               <div class="login__box-input">
                  <input value="<?php echo $_POST['lname'] ?? ''; ?>" name='lname' type="text" required class="login__input" placeholder=" ">
                  <label for="" class="login__label">Last name</label>
               </div>
            </div>

            <div class="login__box">
               <i class="ri-lock-2-line login__icon"></i>

               <div class="login__box-input">
                  <input value="<?php echo $_POST['password'] ?? ''; ?>" type="password" name='password' required class="login__input" id="login_pass" placeholder=" ">
                  <label for="login_pass" class="login__label">Password</label>
                  <i class="ri-eye-off-line login__eye login_eye" id="login_eye"></i>
               </div>
            </div>

            <div class="login__box">
               <i class="ri-lock-2-line login__icon"></i>

               <div class="login__box-input">
                  <input value="<?php echo $_POST['Conf_password'] ?? ''; ?>" type="password" name='Conf_password' required class="login__input" id="login_pass" placeholder=" ">
                  <label for="login_pass" class="login__label">Confirm Password</label>
                  <i class="ri-eye-off-line login__eye login_eye" id="login_eye"></i>
               </div>
            </div>

         </div>

         <div class="login__check">
            <div class="login__check-group">

               <label for="" class="login__check-label">Remember me</label>
               <input type="checkbox" class="login__check-input">
               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>
         </div>

         <button class="login__button">Register</button>
         <a href='login.php' class="login__button" onclick="window.location.href = 'trial.html'">Login</a>

         <?php
         if ($error) {
         ?>


            <div class='error  p1 round1 v-flex c-c'>
               <?php echo $error ?>
            </div>
         <?php
         }
         ?>
         <div>
      </form>
   </div>

   <!--=============== MAIN JS ===============-->
   <script src="trial.js"></script>
</body>
<script>
   const togglePassword = document.querySelector('.login_eye');
   // const password = document.querySelector('#login_pass');

   togglePassword.addEventListener('click', function(e) {
      // toggle the type attribute
      let password = e.previousSibling
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
   });
</script>

<script>
   function upload() {

      const fileUploadInput = document.querySelector('.file-uploader');

      // using index [0] to take the first file from the array
      const image = fileUploadInput.files[0];

      // check if the file selected is not an image file
      if (!image.type.includes('image')) {
         return alert('Only images are allowed!');
      }

      // check if size (in bytes) exceeds 10 MB
      if (image.size > 10_000_000) {
         return alert('Maximum upload size is 10MB!');
      }
      const fileReader = new FileReader();
      fileReader.readAsDataURL(image);

      fileReader.onload = (fileReaderEvent) => {
         const profilePicture = document.querySelector('.profile-picture');
         profilePicture.style.backgroundImage = `url(${fileReaderEvent.target.result})`;
      }
   }
</script>


</html>