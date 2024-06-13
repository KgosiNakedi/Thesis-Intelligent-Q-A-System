<?php
require_once './commons/mysql.php';
if (!isset($_GET['quiz_id'])) {
  header('Location: ./index.php');
}
$quiz = $Db->query("SELECT q.discriiption,uq.score,q.id, q.title, q.created_at,u.username,u.fname,u.lname , q.num_questions from quiz as q INNER join users as u on q.create_by = u.id left outer join user_quiz as uq on q.id = uq.quiz_id or uq.id is null where (uq.user_id = ? or uq.user_id is null) and q.id = ?", [$_SESSION['user_id'], $_GET['quiz_id']])->getRows()[0];


// echo toJson($quiz);
// die();
//dd($quiz);
?>

<div class='mxpw max500 p1 mt2 round1 v-flex c-c gp1rem col2'>

  <h1 class='align algn_l mxpw'>
    TItle: <span>
      <?php echo $quiz['title'] ?>
    </span>
  </h1>

  <div class='v-flex mxpw gp05rem'>
    <h2>Discription:</h2>
  </div>
  <div class="algn_l mxpw">
    <?php echo $quiz['discriiption']?>
  </div>
  <div class='h-flex fs-fe gp1rem mxpw'>
    <span>
      Num question:
    </span>
    <h2>
      <?php echo $quiz['num_questions'] ?>
    </h2>
  </div>
  <?php
  if ($quiz['score'] !== null && !isAdmin()) {
  ?>
    <div class='mxpw'>
      Previous athems: <span>
        <?php echo $quiz['score'] . '/' . $quiz['num_questions'] ?>

      </span>
    </div>
  <?php
  } 
  else if(!isAdmin()){
  ?>



  <div class="mxpw h-flex fs-c">
    <a href='?page=answering&quiz=<?php echo $quiz['id']?>' class='pbtn v-flex c-c col2  enter mxpw bgcol1'>Start</a>
  </div>
  <?php
  } 
  // else {
  // 
  ?>

   <!-- <div class="mxpw h-flex fs-c">
    <a href='?page=answering&quiz=<?php echo $quiz['id']?>' class='pbtn v-flex c-c col2  enter mxpw bgcol1'>View answers</a>
   </div> -->

  <?php //}?>

  <?php
  if ($quiz['score'] !== null  || isAdmin()  ) {
  ?>

<div class="mxpw h-flex fs-c">
    <a href='?page=correct_answers&quiz=<?php echo $quiz['id']?>' class='pbtn v-flex c-c col2  enter mxpw bgcol1'>View answers</a>
  </div>
  <?php
  }
  ?>

</div>