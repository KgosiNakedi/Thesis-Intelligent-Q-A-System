<?php
require_once './commons/mysql.php';
require_once './commons/function.php';
require_once './session.php';

$sql = "SELECT uq.quiz_id as id,u.id as userid, u.fname ,u.lname , u.username ,uq.score , uq.created_at
FROM users as u inner join user_quiz as uq on uq.user_id  = u.id";
$params = [];
if(!isAdmin()){
  $sql  .= " where u.id = ?";
  $params = [$_SESSION['user_id']];
}

$userData = $Db->query(
  $sql,$params)->getRows();
//echo toJson($userData);
?>
<style>
  #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: white;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

<div class="max700">
<h1 class='mb2 col2'>Histroy</h1>

<table id="customers">
  <tr>
    <th>User</th>
    <th>Score</th>
    <th>Time</th>
  </tr>

  <?php
        foreach ($userData as $key => $value) {
        ?>
  <tr onclick="window.location='?page=correct_answers&user=<?php echo $value['userid']?>&quiz=<?php echo $value['id']?>'">
    <td><?php echo $value['fname'].' '.$value['lname']?></td>
    <td><?php echo $value['score']?></td>
    <td><?php echo $value['created_at']?></td>
  </tr>
  <?php
  }
  ?>
 
</table>
</div>