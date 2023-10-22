<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'playerstats';
 
// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM statistic ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Information</title>
</head>
<body>
<div>
        <a href="index.php">Home</a>
        <a href="Roster.php">Roster</a>
        <a href="schedule.php">Schedule</a>
        <a href="statistics.php">Statistics</a>
        <a href="strengthandconditioning.php">Strength and Conditioning</a>
        <a href="medicalinfo.php">Medical Info</a>
        <a href="nutrition.php">Nutrition</a>
        <a href="practicedata.php">Practice Data</a>
        <a href="gamerecap.php">Game Recap</a>
        <a href="guidelines.php">Guidelines</a>
    </div>
    <h1>Medical Info</h1>
</body>
</html>