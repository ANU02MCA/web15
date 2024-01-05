<?php
// Store names of students in an array
$students = array("Anu", "Anna", "Sherin", "Megha","Shalu","Saranya","Helen");
echo "Original array: ";
print_r($students);
asort($students);
echo "<br>Sorted array (asort): ";
print_r($students);
arsort($students);
echo "<br>Sorted array (arsort): ";
print_r($students);
?>