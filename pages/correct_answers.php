<?php
require_once './commons/function.php';
require_once './commons/mysql.php';
$questions = [];
$uid = null ;
if(!isAdmin()){
  $uid  =  $_SESSION['user_id'];
}
  else{
    $uid  = $_GET['user'] ?? $_SESSION['user_id'];
  }

if(isAdmin() && $uid !=  $_SESSION['user_id']){
  $questions = $Db->query("SELECT q.* , ua.* from questions as q inner join user_answers as ua on ua.question_id = q.id where quiz_id = ? && ua.user_id = ?", [$_GET['quiz'],$uid])->getRows();
}
else if(isAdmin()){
  $questions = $Db->query("SELECT * from questions where quiz_id = ?", [$_GET['quiz']])->getRows();

  //echo "dsadas";
}
else if(!isAdmin()){
  $questions = $Db->query("SELECT q.* , ua.* from questions as q inner join user_answers as ua on ua.question_id = q.id where quiz_id = ? && ua.user_id = ?", [$_GET['quiz'],$uid])->getRows();

}

//  dd($questions );
//echo toJson($questions);
?>
<div class="v-flex gp1rem c-c max700 col2">
<?php
require_once './components/questions_with_answers.php'
?>
</div>
