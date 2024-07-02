<?php
require_once './commons/mysql.php';
require_once './commons/function.php';
require_once './session.php';

// if(!isAdmin()){
//   header('Location: ./index.php');
//   die();
// }

$users = $Db->query("SELECT * FROM users")->getRows();
//echo toJson($users);
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
<h1 class='mb2 col2'>Users</h1>

<table  id="customers">
  <tr >
    <th>Username</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Date registered</th>
  </tr>

  <?php
        foreach ($users as $key => $value) {
        ?>
  <tr onclick="window.location='?page=user&userid=<?php echo $value['id']?>'">
    <td><?php echo $value['username']?></td>
    <td><?php echo $value['fname']?></td>
    <td><?php echo $value['lname']?></td>
    <td><?php echo $value['created_at']?></td>
   
  </tr>
  <?php
  }
  ?>
</table>
</div>