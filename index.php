<?php
include "Student.php";
include "DBConnect.php";
include "StudentsManager.php";
include_once "Add.php";
$studentmanager = new StudentsManager();
$students = $studentmanager->get_All();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2px" style="color: red" >
    <tr>
        <td>STT</td>
        <td>NAME</td>
        <td>CLASS</td>
    </tr>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $student->name ?></td>
            <td><?php echo $student->class ?></td>
            <td><a href="Edit.php?id=<?php echo $student->id ?>"</a>EDIT</td>
            <td><a href="Delete.php?id=<?php echo $student->id ?>"</a>DELETE</td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>