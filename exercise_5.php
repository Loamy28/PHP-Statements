<?php

$start_num = 1;
$end_num = 5;

// Print the header of the table
echo "<table border='1'>";
echo "<tr>";
echo "<th>Dividend</th>";
echo "<th>Divisor</th>";
echo "<th>Quotient</th>";
echo "</tr>";

// Loop through the dividend numbers
for ($dividend = $start_num; $dividend <= $end_num; $dividend++) {

  // Loop through the divisor numbers
  for ($divisor = $start_num; $divisor <= $end_num; $divisor++) {

    // Calculate the quotient
    $quotient = $dividend / $divisor;

    // Print the row of the table
    echo "<tr>";
    echo "<td>$dividend</td>";
    echo "<td>$divisor</td>";
    echo "<td>$quotient</td>";
    echo "</tr>";
  }
}

// Print the footer of the table
echo "</table>";

?>