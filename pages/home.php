
<?php
require_once './commons/mysql.php';
$args = [$_SESSION['user_id']];
$sql = "SELECT q.id,uq.score, q.title, q.created_at,u.username,u.fname,u.lname , q.num_questions from quiz as q INNER join users as u on q.create_by = u.id left outer join user_quiz as uq on q.id = uq.quiz_id  where uq.user_id = ? or uq.user_id is null ORDER BY q.id DESC";

if(isset($_GET['search'])){
  if(!empty($_GET['search'])){

  
  $args = [$_SESSION['user_id'],$_GET['search']];
  $sql = "SELECT q.id,uq.score, q.title, q.created_at,u.username,u.fname,u.lname , q.num_questions from quiz as q INNER join users as u on q.create_by = u.id left outer join user_quiz as uq on q.id = uq.quiz_id  where (uq.user_id = ? or uq.user_id is null) and q.title like CONCAT('%',?,'%') ORDER BY q.id DESC ";
  }
}

$quizs = $Db->query($sql,$args)->getRows();
//header('Location: ?page=dsadas');

//echo  toJson($quizs);
//dd($quizs);
?>
<div class='mxpw'>
  <form class='h-flex c-c'>
    <input 
    value="<?php
    echo isset($_GET['search']) ? $_GET['search'] : '';
    ?>"
    class='max500 fss' name= "search" type="text">
    <button class='pbtn ri-search-line bold700'></button>
  </form>
</div>

<div class="h-flex fr mxpw c-c gp2rem mt2">

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


    <?php if($value['score']){ ?>
    <div class='h-flex fs-c gp1rem'>
      <span class='fs1 '>
        Score:
      </span>
      <h2 class='no_wrap'>
      <?php echo $value['score'] ?>
      </h2>
    </div>
<?php
}
?>

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