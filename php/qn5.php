<!-- to display the day of the week based ona numeric input using a switch statement -->
<?php
$dayNumber = 3; 
switch ($dayNumber) {
    case 1:
        echo "Day 1 is: Monday\n";
        break;
    case 2:
        echo "Day 2 is: Tuesday\n";
        break;
    case 3:
        echo "Day 3 is: Wednesday\n";
        break;
    case 4:
        echo "Day 4 is: Thursday\n";
        break;
    case 5:
        echo "Day 5 is: Friday\n";
        break;
    case 6:
        echo "Day 6 is: Saturday\n";
        break;
    case 7:
        echo "Day 7 is: Sunday\n";
        break;
    default:
        echo "Invalid input! Please enter a number between 1 and 7.\n";
        break;
}
?>
