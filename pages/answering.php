<?php
require_once './commons/mysql.php';
if (!isset($_GET['quiz'])) {
  header('Location: ./index.php');
}

$quizData = $Db->query(
  "SELECT uq.score,q.id, 
  q.title from quiz as q 
   left outer join user_quiz as uq on q.id = uq.quiz_id  where (uq.user_id = ? 
   or uq.user_id is null) and q.id = ?",
  [$_SESSION['user_id'], $_GET['quiz']]
)->getRows()[0];

if ($quizData['score']) {
  header('Location: ./index.php');
}

$questions = $Db->query("SELECT * from questions where quiz_id = ?", [$_GET['quiz']])->getRows();
?>
<form method="post" action='./actions/uploa_answers.php' class="v-flex gp1rem c-c max700 col2">
  <h1 class='mxpw algn_l'>
    <?php   echo $quizData['title'] ?>h
  </h1>
<input value="<?php echo $quizData['id'] ?>" type="hidden" name="quiz_id">
  <?php
  foreach ($questions as $key => $value) {
  ?>
    <div class='v-flex c-c mxpw'>

      <span class='mxpw algn_l'>
        <?php echo '(' . $key + 1 . ')' ?> <?php echo $value['question'] ?>
      </span>

      <div class='mxpw v-flex gp05rem mt1'>

        <?php
        if ($value['optiona']) {
        ?>
          <div class='h-flex fs-fs gp1rem'>
            <input value='a' required name="question_<?php echo $value['id'] ?>" class='option_radio' id="question_<?php echo $value['id'] ?>_a" type="radio">
            <label for="question_<?php echo $value['id'] ?>_a" class='pbtn  round1 mxpw option' for="op1">
              A.<?php echo $value['optiona'] ?>
            </label>
          </div>
        <?php
        }
        ?>

        <?php
        if ($value['optionb']) {
        ?>
          <div class='h-flex fs-fs gp1rem'>
            <input value='b' required name="question_<?php echo $value['id'] ?>" class='option_radio' id="question_<?php echo $value['id'] ?>_b" type="radio">
            <label for="question_<?php echo $value['id'] ?>_b" class='pbtn  round1 mxpw option' for="op1">
              B.<?php echo $value['optionb'] ?>
            </label>
          </div>
        <?php
        }
        ?>

        <?php
        if ($value['optionc']) {
        ?>
          <div class='h-flex fs-fs gp1rem'>
            <input value='c' required name="question_<?php echo $value['id'] ?>" class='option_radio' id="question_<?php echo $value['id'] ?>_c" type="radio">
            <label for="question_<?php echo $value['id'] ?>_c" class='pbtn  round1 mxpw option' for="op1">
              C.<?php echo $value['optionc'] ?>
            </label>
          </div>
        <?php
        }
        ?>


        <?php
        if ($value['optiond']) {
        ?>
          <div class='h-flex fs-fs gp1rem'>
            <input value='d' required name="question_<?php echo $value['id'] ?>" class='option_radio' id="question_<?php echo $value['id'] ?>_d" type="radio">
            <label for="question_<?php echo $value['id'] ?>_d" class='pbtn  round1 mxpw option' for="op1">
              D.<?php echo $value['optiond'] ?>
            </label>
          </div>
        <?php
        }
        ?>



      </div>
    </div>
  <?php
  }
  ?>

  <div class='mxpw'>
    <button class='mxpw pbtn'>Submit</button>
  </div>
</form>


<style>
  input:checked+.option {
    background: var(--col_info);
  }

  .option_radio {
    opacity: 0;
    position: fixed;
    z-index: -1;
  }
</style>