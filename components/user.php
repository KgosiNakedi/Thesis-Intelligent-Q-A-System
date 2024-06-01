<?php
require_once './session.php';
require_once './commons/mysql.php';

$uid = $_GET['user'];
$userData = $Db->query("SELECT lname , username ,fname ,profile_image_filename, lname from  users where id = ? ", [$uid])->getRows()[0];
$imgUrl = IMG_DIR . '/' . $userData['profile_image_filename'];
?>
<div class='max700 h mb2'>
  <div class='h-flex fs-c gp1rem'>
    <div class='img_c'>
      <img src="<?php echo $imgUrl ?>" class='sdw1' alt="">
    </div>

    <h2 class='col2'>
      <?php echo $userData['fname'] . ' ' . $userData['lname'];
      ?>
    </h2>
</div>
</div>

<style>
  .img_c {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
  }

  .img_c>img {
    width: 100%;

  }
</style>