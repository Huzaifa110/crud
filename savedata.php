<?php
    echo $student_name = $_POST['s_name'];
    echo $student_address = $_POST['s_address'];
    echo $student_class = $_POST['s_class'];
    echo $student_phone = $_POST['s_phone'];

    $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed:("); 
                
    $sql = "INSERT INTO student(s_name, s_address, s_class, s_phone) VALUES ('{$student_name}', '{$student_address}', '{$student_class}', '{$student_phone}')";

    $result = mysqli_query($connection, $sql) or die("Query unsuccessful:(");

    header("Location: http://localhost/crud/index.php");

    mysqli_close($connection);
?>