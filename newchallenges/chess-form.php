<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chess.css">
    <title>Chess Board</title>
</head>
<body>
    <form  method="POST">
        <input type="number" name="gridsize" min="2" max="15" step="1" required>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $gridsize = $_POST['gridsize'];

    echo "<table>";

    for($row = 1; $row <= $gridsize; $row++) {
        echo "<tr>";


        for($col=1; $col <= $gridsize; $col++) {
            if(($row+$col) % 2 == 0) {
                echo "<td class='black'></td>";
            } else {
                
                echo "<td class='white'></td>";

            }
        }

        echo"</tr>";

    }
    echo "</table>";

    
}
?>