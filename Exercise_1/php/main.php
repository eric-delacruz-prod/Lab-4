<?php
    echo "<table style=\"background-color: rgb(107, 235, 207);\" border=\"1\">";
    for($i = 1 ; $i < 101 ; $i++) 
    {
        echo "<tr>";

        for($j=1 ; $j < 101 ; $j++)
        {
            echo '<th>' . $i*$j . '</th>';
        }
        echo "</tr>";
    }
    echo "</table>";
?>