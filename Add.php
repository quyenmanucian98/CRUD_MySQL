<?php
include_once 'Student.php';
include_once 'StudentsManager.php'
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
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Class</td>
            <td><input type="text" name="class" placeholder="Enter Class"></td>
        </tr>
        <tr>
            <td>
                <button type="submit">ADD</button>
            </td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $studentsManager = new StudentsManager();
    $student = new Student($name, $class);
    $studentsManager->addStudent($student);
}
//header('Location: index.php');
?>
</body>
</html>