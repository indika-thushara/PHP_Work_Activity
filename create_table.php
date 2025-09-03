<?php
include "connect.php";

$sql = "CREATE TABLE work (EmpNo VARCHAR(5) PRIMARY KEY,
ProjNo VARCHAR(10), Task VARCHAR (20), Hours INT)";

$result = mysqli_query($conn, $sql);

if ($result === true)
    echo "Table is created.";

mysqli_close($conn);