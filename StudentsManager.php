<?php


class StudentsManager
{
    protected $connects;

    public function __construct()
    {
        $database = new DBConnect('mysql:host=localhost;dbname=students', 'students', '123456');
        $this->connects = $database->connect();
    }

    public function get_All()
    {
        $sql = 'SELECT * FROM student10';
        $stmt = $this->connects->query($sql);
        $result = $stmt->fetchAll();
        $managerStudent = [];
        foreach ($result as $object) {
            $student = new Student($object['name'], $object['class']);
            $student->id = $object['id'];
            array_push($managerStudent, $student);
        }
        return $managerStudent;
    }

    public function addStudent($student)
    {
        $stmt = $this->connects->prepare('INSERT INTO student10(name, class) VALUES(:name,:class) ');
        $stmt->bindParam(':name', $student->name);
        $stmt->bindParam(':class', $student->class);
        $stmt->execute();
    }

    public function deleteStudent($index)
    {
        $stmt = $this->connects->prepare("DELETE FROM student10 WHERE(id=:id)");
        $stmt->bindParam(':id', $index);
        $stmt->execute();
    }

    public function editStudent($index, $name, $class)
    {
        $sql = "UPDATE student10 SET name=:name,class=:class WHERE id =:id";
        $stmt = $this->connects->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':id', $index);
        $stmt->execute();
    }
}