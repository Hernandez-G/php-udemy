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
                
                echo '<td></td>';

            }
        }

        echo"</tr>";

    }
    echo "</table>";

    
}