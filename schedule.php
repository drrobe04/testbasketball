<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'schedule';
 
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
$sql = " SELECT * FROM playerschedule ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
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
    <h1>Schedule</h1>
    <section>
        <h1>GeeksForGeeks</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Day</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Location</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php 
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Day'];?></td>
                <td><?php echo $rows['Time'];?></td>
                <td><?php echo $rows['Activity'];?></td>
                <td><?php echo $rows['Location'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

</body>
</html>