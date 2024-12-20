<?php
    include("student.class.php");
    
    $id = isset($_GET['id'])? $_GET['id'] : null;
    echo $id;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $mark = $_POST['mark'];

        $stud = new Student($id,$name,$class,$mark);
        $resut = $stud->update($id,$name,$class,$mark);
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
    <form action="update.php" method="post">
        <h1>update data</h1>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="name" id="" placeholder="name">
        <input type="text" name="class" id="" placeholder="class">
        <input type="text" name="mark" id="" placeholder="mark">
        <input type="submit" value="Update">

    </form>
</body>
</html>