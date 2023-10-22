<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'Roster';
 
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
$sql = " SELECT * FROM players ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roster</title>
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
    <h1>Roster</h1>
    <section>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Height</th>
                <th>High School</th>
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
                <td><?php echo $rows['ID'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Position'];?></td>
                <td><?php echo $rows['Height'];?></td>
                <td><?php echo $rows['High School'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>