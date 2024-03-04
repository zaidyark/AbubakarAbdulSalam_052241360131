<?php
// You can include PHP code here to dynamically generate timetable information if needed

// For example, fetching timetable data from a database

// Simulated timetable data for demonstration
$timetable = array(
    array("9:00 AM - 11:00 AM", "Room 101", "", "Room 203", "", "Room 101"),
    array("1:00 PM - 3:00 PM", "", "Room 205", "", "Room 301", ""),
    // Add more timetable entries as needed
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="css\Styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>

<header>
    <h1>Timetable</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <!-- Add more navigation links as needed -->
    </ul>
</nav>

<main>
    <section>
        <h2>Timetable for Spring Semester 2024</h2>
        <table>
            <tr>
                <th>Time/Day</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <!-- Add more table headings as needed -->
            </tr>
            <?php foreach ($timetable as $entry) : ?>
                <tr>
                    <?php foreach ($entry as $value) : ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>

<footer>
   
</footer>

</body>
</html>
