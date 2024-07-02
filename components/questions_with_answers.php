
<?php if(isset($quizData)){?>
<div  class="v-flex gp1rem c-c max700 col2">
  <h1 class='mxpw algn_l'>
    <?php   echo $quizData['title'] ?>h
  </h1>
  <?php
  }
  ?>
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
          <div class="h-flex fs-fs gp1rem  <?php echo   $value['answer'] == 'a' ? 'selected' : '' ?> 
          <?php  if( isset($value['chosen_answer']))echo   $value['chosen_answer'] == 'a' ? 'chossen' : '' ?>" >
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
          <div class="h-flex fs-fs gp1rem  <?php echo  $value['answer'] == 'b' ? 'selected':'ligma' ?>
           <?php  if( isset($value['chosen_answer'])) echo   $value['chosen_answer'] == 'b' ? 'chossen' : '' ?>">
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
          <div class="h-flex fs-fs gp1rem   <?php echo  $value['answer'] == 'c'?'selected' : '' ?> 
          <?php if( isset($value['chosen_answer']))echo   $value['chosen_answer'] == 'c' ? 'chossen' : '' ?>">
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
          <div class="h-flex fs-fs gp1rem  <?php echo  $value['answer'] == 'd'?'selected' : '' ?> 
          <?php if( isset($value['chosen_answer']))echo   $value['chosen_answer'] == 'd' ? 'chossen' : '' ?>">
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



<style>
  input:checked+.option {
    background: var(--col_info);
  }

  .option_radio {
    opacity: 0;
    position: fixed;
    z-index: -1;
  }


  .selected{
    background: var(--col_success);
  }

  .chossen{
    border: 4px solid var(--color2);
    border-radius: 50px;
   
  }
</style>
