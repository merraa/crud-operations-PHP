<?php
    include("student.class.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];

        $stud = new Student($id,$name,$class,$mark);
        $result = $stud->insert($id,$name,$class,$mark);
        //echo $stud->$id; 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <h1>insert data</h1>

        <input type="text" name="id" id="" placeholder="id">
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="class" id="" placeholder="class">
        <input type="text" name="mark" id="" placeholder="mark">
        <input type="submit" value="Insert">

    </form>
</body>
</html>