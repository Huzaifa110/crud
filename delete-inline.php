<?php

$student_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE s_id = {$student_id}";

$result = mysqli_query($connection, $sql) or die("Query unsuccessful");

header("Location: http://localhost/crud/index.php");

mysqli_close($connection)

?>