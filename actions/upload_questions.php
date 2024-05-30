<?php
      if(isset($_POST['action'])){
        unset($_POST['action']);
        require_once '../session.php';
        require_once '../commons/mysql.php';
        require_once '../commons/function.php';
        echo json_encode($_POST,true);
        $quiz_id = $Db->query("INSERT into quiz (create_by ,title ,discriiption) VALUES (?,?,?)",[$_SESSION['user_id'],$_POST['title'], $_POST['discriiption']])->lastId();
        for ($i=0; $i < count($_POST['question']); $i++) { 
        $optionsParam=[$quiz_id,$_POST['question'][$i],$_POST['answer'][$i] ,$_POST['optionA'][$i], $_POST['optionB'][$i] ,$_POST['optionC'][$i] ?? '' ,$_POST['optionD'][$i] ?? ''];
          $Db->query("INSERT into questions (quiz_id,question,answer,optiona,optionb,optionc,optiond) values (?,?,?,?,?,?,?)",$optionsParam);
          # code...
        }
        $Db->query("UPDATE quiz set num_questions = ? where id = ?",[count($_POST['question']),$quiz_id]);
$_POST=[];

goBack();






      }
      ?>