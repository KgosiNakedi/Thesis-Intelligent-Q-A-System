<?php
require_once '../session.php';
require_once '../commons/mysql.php';
require_once '../commons/function.php';


$quizid = $_POST['quiz_id'];
unset($_POST['quiz_id']);
echo $quizid ;
if(count($Db->query("SELECT id FROM user_quiz where user_id = ? and quiz_id = ?",[$_SESSION['user_id'],$quizid])->getRows()) > 0){
  goBack();
  die();
}
//$quizdata = $Db("SELECT * FROM questions")->getRows();
$numCorrect = 0;
foreach ($_POST as $key => $value) {
  # code...
  $question_id =  explode('_',$key)[1];
  $correct_answer = $Db->query("SELECT answer FROM questions WHERE id = ?",[$question_id])->getRows()[0]['answer'];
 
  if($value  == $correct_answer){
    $numCorrect = $numCorrect + 1;
  }
  $Db->query("INSERT INTO user_answers (user_id, chosen_answer ,question_id) VALUES (?,?,?) ",[$_SESSION['user_id'],$value,$question_id]);
}

$Db->query("INSERT INTO user_quiz (score,quiz_id,user_id) VALUES (?,?,?)",[$numCorrect,$quizid,$_SESSION['user_id']]);

echo 'success';
?>