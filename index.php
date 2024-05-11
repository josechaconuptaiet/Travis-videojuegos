<?php 
include("./lib/db.php");
$query = $db->query("SELECT * FROM users");
$data = $query->fetch_assoc();
echo $data["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>