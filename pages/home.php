
<?php
require_once './commons/mysql.php';
$quizs = 
$Db->query("SELECT q.id, q.title, q.created_at,u.username,u.fname,u.lname , q.num_questions from quiz as q INNER join users as u on q.create_by = u.id left outer join user_quiz as uq on q.id = uq.quiz_id  where uq.user_id = ? or uq.user_id is null",[$_SESSION['user_id']])->getRows();



//dd($quizs);
?>
<div class='mxpw'>
  <form class='h-flex c-c'>
    <input class='max500 fss' type="text">
    <button class='pbtn ri-search-line bold700'></button>
  </form>
</div>

<div class="h-flex fr mxpw c-c gp1rem mt2">

<?php
        foreach ($quizs as $key => $value) {
        ?>
  <a href='?page=question&quiz_id=<?php echo $value['id'] ?>' class='quizz v-flex fs-fs round1 sdw1 p1 bg1 gp1rem col col_text2 max400'>
    <div class='h-flex fs-c gp1rem'>
      <span class='fs1'>
        Title
      </span>
      <h2 class='no_wrap'>
        <?php echo $value['title'] ?>
      </h2>
    </div>

    <div class='h-flex fs-c gp1rem'>
      <span class='fs1'>
        Uploaded by
      </span>
      <h2 class='no_wrap'>
        <?php echo $value['fname'] ?>
        <?php echo $value['lname'] ?>
      </h2>
    </div>
    <div class='h-flex fs-c gp1rem'>
      <span class='fs1'>
        Date Uploaded:
      </span>
      <h2 class='no_wrap'>
      <?php echo $value['created_at'] ?>
      </h2>
    </div>
    <div class='h-flex fs-c gp1rem'>
      <span class='fs1 '>
        Number of questions:
      </span>
      <h2 class='no_wrap'>
      <?php echo $value['title'] ?>
      </h2>
    </div>


  </a>
  <?php
        }
        ?>
</div>



<style>
  .quizz >div{
    width: 100%;
  }
.quizz >div >span{
width: 30%;

}
</style>