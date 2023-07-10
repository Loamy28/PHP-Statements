<?php
echo "<table border='1'>";
echo "<tr>";

    for ($column = 1; $column <= 10; $column++) {
        echo "<th>$column</th>";
    }

echo "</tr>";

    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        

        for ($column = 1; $column <= 10; $column++) {
            $result = $row / $column;
            echo "<td>$result</td>";
        }

        echo "</tr>";
    }

echo "</table>";

?>