<?php
echo "String functions in PHP";
echo "</br>";

echo "Count length of string: ";echo "</br>";
$string = "Hello World";
echo strlen($string);
echo "</br>";

echo "Reverse a string: ";echo "</br>";
echo strrev($string);
echo "</br>";

echo "Word count of a string: ";echo "</br>";
echo str_word_count($string);
echo "</br>";

echo "Finding the position of specific character or word in a string: ";echo "</br>";
$string = "Hello World , World Hello";
echo strpos($string, "World");
echo "</br>";

echo "Replace a char or word with another word or char in a string: ";echo "</br>";
$string = "Hello World";
echo str_replace("World","Miss", $string);
echo "</br>";
echo "</br>";

echo "Array function in PHP";
echo "</br>";

echo "Count length of array: ";echo "</br>";
$new = array("Mango", "Football", "Dog");
echo count($new);
echo "</br>";

echo "Check if a variable is array or not: ";echo "</br>";
echo is_array($new);
echo "</br>";

echo "Check if a variable is inside array or not: ";echo "</br>";
echo in_array("Football", $new);
echo "</br>";

echo "Merge two arays together: ";echo "</br>";
$arr1 = array("Mango", "Football", "Dog");
$arr2 = array("Cat", "Man", "Cow");
$merged = array_merge($arr1, $arr2);
foreach ($merged as $mergedArr) {
    echo $mergedArr;
    echo"</br>";
}
echo "</br>";

echo "Print key value of aray: ";echo "</br>";
$keys = array_keys($merged);
foreach ($keys as $key) {
    echo $key;
    echo"</br>";
}
echo "</br>";
?>