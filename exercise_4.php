<?php

$students = '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
              {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
              {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

$studentsArray = json_decode($students, true);

foreach ($studentsArray as $student) {
    foreach ($student as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    echo '<br>';
}


?>