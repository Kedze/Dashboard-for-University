<?php 
    include_once "database.php";

    echo 'Single Registration <br>'; 

    $id = $_GET['id'];
    $sql = "SELECT * FROM registrations WHERE rid=$id";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo "Name: ". $row['name']. " Other names: ". $row['other_names']. " Church: " . $row['church'];  
        }
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration</title>
</head>
<body>
    
</body>
</html>