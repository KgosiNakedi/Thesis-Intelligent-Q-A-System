<?php
require_once './session.php';
require_once './commons/env.php';
require_once './commons/function.php';

$page = '';
if (!isset($_GET['page'])) {
  $page = './pages/home.php';
} else {
  $page = './pages/' . $_GET['page'] . '.php';
}
if (isset($_GET['page'])) {
  if (!file_exists($page)) {
    $page = './pages/not_found.php';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/styles/main.css" class="css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css" integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css" integrity="sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<style>
  .login__img {
    position: fixed;
    z-index: -1;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }

  body {
    height: 100dvh;
  }

  #main {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: calc(100% - var(--navheight));

    position: relative;
    /* background-color: hsla(0, 0%, 10%, .1); */
    border: 2px solid var(--white-color);

    padding: 2.5rem 1.5rem;
    position: relative;
    z-index: 10;
    border-radius: 1rem;

   
  }
body::before{
  position: fixed;
  z-index: 1;
  content: '';
  top: 0px;
  left: 0px;
  height: 100vh;
  width: 100vw;
  background-color: hsla(0, 0%, 10%, .5);
  backdrop-filter: blur(8px);
}
  .navbar>div {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-block: 0.3rem;

    gap: 2rem
  }

  .navbar {
    height: var(--navheight);
    width: min(700px, 100vw);
    position: relative;
    z-index: 10;
    margin-inline: auto;
    padding: 0.5rem 1rem;
    background-color: var(--bgcol3);
    border-radius: 0.5rem;
    box-shadow: 0 0 1px 0 rgba(52, 46, 173, 0.25), 0 15px 30px 0 rgba(52, 46, 173, 0.1);
  }

  .logo {
    margin-right: auto;
  }

  .profile_image {
    width: 2rem;
    height: 2rem;
    border-radius: 50%
  }

  .imgcc {
    display: flex;
    align-items: center;
    justify-content: center;
   
  }
  a{
    text-decoration: none;
    color:var(--col_text);
  }
</style>

<body>
<img src="login-bg.png" alt="" class="login__img" />
  <header class='navbar mt1'>
    <div class='page_padding col_text '>
    

      <div class='logo'>

        Logo
      </div>
      <a href="./" class='v-flex c-c '>
  
      <i class="ri-home-5-line fs8"></i>
        Questions
      </a>
      <a href="?page=users" class='v-flex c-c'>
      <i class="ri-user-3-line fs8"></i>
        Users
      </a>
      <a href="?page=history" class='v-flex c-c'>
      <i class="ri-file-list-line fs8"></i>
        history
      </a>

       <a href="?page=upload_questions" class='v-flex c-c'>
       <i class="ri-questionnaire-line fs8"></i>
     <span class='no_wrap'>
     Add questions

     </span>
      </a>
      <a href="?page=profile_info" class='imgcc v-flex c-c'>
        <img class='profile_image' src="<?php echo  $_SESSION['image_url'] ?>" alt="image">
       <span class='no_wrap'> Profile info</span>
      </a>
    </div>
  </header>
  
  <div id='main'>
   
    <?php
    // echo "welcome ".$_SESSION['username'];
    require_once $page
    ?>
  </div>

</body>

</html>