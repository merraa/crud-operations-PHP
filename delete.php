<?php
    include("student.class.php");
    $id = 0;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    
   $stud = new Student();
   $stud->delete($id);
   header('Location: select.php');

?>