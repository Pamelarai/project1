<?php
function calculateCircleArea($radius) {
    if ($radius <= 0) {
        return "Radius must be greater than zero.";
    }
    $area = pi() * pow($radius, 2);
    return $area;
}
$testRadii = [3, 5, 0, -2, 7.5];
foreach ($testRadii as $radius) {
    echo "The area of a circle with radius $radius is: " . calculateCircleArea($radius) . "\n";
}
?>
