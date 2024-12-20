<?php 
    include("student.class.php");

    $stud = new Student();
    $result = $stud->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Mark</th>
            <th>Status</th>
            <th></th>
        </tr>
        <tr>
            <?php
                while($row = $result->fetch_assoc()){
             ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['class']?></td>
                <td><?php echo $row['mark']?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id'] ?>">Update</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tr>
    </table>
</body>
</html>