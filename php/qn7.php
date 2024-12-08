<!-- Create a numeric array containing the names of five countries. display the element using a loop -->
<?php
$countries = array("Korea", "Nepal", "India", "Japan", "Thailand");
for ($i = 0; $i < count($countries); $i++) {
    echo $countries[$i] . "\n";  
}
?>
