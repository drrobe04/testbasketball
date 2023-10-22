<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'gamerecap';
 
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
$sql = " SELECT * FROM upcominggames ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <div class="center">
      <div class="row">
        <a class="space" href="index.php">Home</a>
        <a class="space" href="Roster.php">Roster</a>
        <a class="space" href="schedule.php">Schedule</a>
        <a class="space" href="statistics.php">Statistics</a>
        <a class="space" href="strengthandconditioning.php">Strength and Conditioning</a>
        <a class="space" href="medicalinfo.php">Medical Info</a>
        <a class="space" href="nutrition.php">Nutrition</a>
        <a class="space" href="practicedata.php">Practice Data</a>
        <a class="space" href="gamerecap.php">Game Recap</a>
        <a class="space" href="guidelines.php">Guidelines</a>
      </div>
    </div>
    <h1>Welcome Cards!</h1>
    <h3>Upcoming games</h3>
    <section>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Team</th>
                <th>Date</th>
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
                <td><?php echo $rows['Team'];?></td>
                <td><?php echo $rows['Date'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>