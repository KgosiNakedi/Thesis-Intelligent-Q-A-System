<?php
//dd($_SESSION);
$username = '';
$firstname = '';
$lastname = '';
$img_file_name = '';
$user_id = $_GET['userid'] ?? $_SESSION['user_id'];

//if ($_GET['userid'] != $_SESSION['user_id']) {
  if(false){
  if (!isAdmin()) {
    goBack();
  }
} else {
  $username = $_SESSION['username'];
  $firstname = $_SESSION['fname'];
  $lastname = $_SESSION['lname'];
  $img_file_name = $_SESSION['image_url'];
  // echo 'dddddd';
}

if(isset($_GET['userid'])){
require_once './commons/mysql.php';
$data = $Db->query("SELECT username , lname , fname , profile_image_filename  from users where  id = ? ",[$_GET['userid']])->getRows();

$username = $data[0]['username'];

$username = $data[0]['username'];
$firstname = $data[0]['fname'];
$lastname = $data[0]['lname'];
$img_file_name = IMG_DIR . '/' .$data[0]['profile_image_filename'];
}
?>
<div class='mxpw urwap max700 v-flex fs-fs col2 '>
  <h1 class='mxpw v-flex c-c mb2 mt2'>
    User Info
  </h1>
  <div class='v-flex  mxpw c-c mb2'>
    <img class='round profimg' src="<?php echo  $img_file_name ?>" alt="">
  </div>
  <div class='mxpw h-flex fs-c gp05rem ppinfo'>

    <span>Username</span>
    <h2><?php echo $username . 'ligma' . $_SESSION['username'] ?></h2>
  </div>
  <div class='mxpw h-flex fs-c gp05rem ppinfo'>

    <span>First name</span>
    <h2><?php echo $firstname ?></h2>
  </div>
  <div class='mxpw h-flex fs-c gp05rem ppinfo '>
    <span>Last name</span>
    <h2><?php echo $lastname ?></h2>
  </div>
</div>

<style>
  img.profimg {
    width: min(30vw, 200px);
    height: min(30vw, 200px);
  }

  .ppinfo>* {
    width: 50%;
  }

  .ppinfo>:first-child {
    text-align: right
  }

  h2{
    display: inline-block;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }


  @media screen and (max-width: 768px){
    .ppinfo> *{
    width: unset;
  }
  .urwap{
    white-space: break;
  }
  body{
    background: red !important;
  }
  }
</style>