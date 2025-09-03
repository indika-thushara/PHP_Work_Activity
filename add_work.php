<?php

include 'connect.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $empno = $_POST['EmpNo'];
    $projno = $_POST['ProjNo'];
    $task = $_POST['Task'];
    $hour=$_POST['Hour'];

    $sql = "INSERT INTO work (EmpNo, ProjNo, Task, Hours) VALUES ('".$empno."','".$projno."','".$task."',".$hour.")";

    $result = mysqli_query($conn,$sql);

    if($result===true)
        echo "Record inserted successfully.";

    

}

?>