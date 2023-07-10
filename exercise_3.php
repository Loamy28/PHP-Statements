<?php
$monthName = 'December';

switch ($monthName) {
    case 'January':
    case 'March':
    case 'May':
    case 'July':
    case 'August':
    case 'October':
    case 'December':
        $numDays = 31;
        break;

    case 'April':
    case 'June':
    case 'September':
    case 'November':
        $numDays = 30;
        break;

    case 'February':
        $numDays = 28;
        break;

    default:
        $numDays = 'invalid';
        break;
}
    if($numDays == 'invalid'){
        echo "Invalid";
    }else{
        echo "$monthName has $numDays days.";
    }
?>