<!-- to demonstrate the usage of logical operators with conditional statement -->
<?php
$age = 20;
$isStudent = true;
if ($age >= 18 && $isStudent) {
    echo "You are an adult and a student.<br>";
} else {
    echo "You are either not an adult or not a student, or both.<br>";}

if ($age < 18 || !$isStudent) {
    echo "You are either under 18 or not a student, or both.<br>";
} else {
    echo "You are 18 or older and a student.<br>";
}

if (!($age < 18)) {
    echo "You are 18 or older.<br>";
} else {
    echo "You are under 18.<br>";
}
?>
