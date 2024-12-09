<?php

$students = array("Manu", "Pachu", "Sanu", "Tom", "Jerry");


echo "Array of students: ";
print_r($students);


sort($students);
echo "<br>Sorted Array (ascending order): ";
print_r($students);


$students = array("Manu" => 2, "Pachu" => 1, "Sanu" => 3, "Tom" => 0, "Jerry" => 4);
asort($students);
echo "<br>After asort: ";
print_r($students);


arsort($students);
echo "<br>After arsort: ";
print_r($students);
?>
