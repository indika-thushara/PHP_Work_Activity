<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Work</title>
</head>
<body>
    <?php

    include 'connect.php';

    $sql = "SELECT * FROM work";

    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
        echo "<table border='1'><tr>
        <th>Employee Number</th>
        <th>Project Number</th>
        <th>Task</th><th>Hours</th></tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row['EmpNo']."</td><td>".$row['ProjNo']."</td>
            <td>".$row['Task']."</td><td>".$row['Hours']."</td> </tr>";            
        }
    }

    ?>
</body>
</html>