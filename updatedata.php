<?php
    echo $student_id = $_POST['s_id'];
    echo $student_name = $_POST['s_name'];
    echo $student_address = $_POST['s_address'];
    echo $student_class = $_POST['s_class'];
    echo $student_phone = $_POST['s_phone'];

    $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed:("); 
                
    $sql = "UPDATE student SET s_name = '{$student_name}', s_address = '{$student_address}', s_class = '{$student_class}', s_phone = '{$student_phone}' WHERE s_id = {$student_id}";

    $result = mysqli_query($connection, $sql) or die("Query unsuccessful:(");

    header("Location: http://localhost/crud/index.php");

    mysqli_close($connection);
?>