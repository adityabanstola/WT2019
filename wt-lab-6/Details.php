<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;

$gces->name = "Gandaki College of Engineering & Science";
$gces->address = "Gandaki, Kaski, Lamachour, Pokhara";

array_push($gces->employees, new Employee("ankit","hemja"));
array_push($gces->employees, new Employee("sari","Pokhara"));
array_push($gces->employees, new Employee("anku","thampu"));

$emp = array($employees);
var_dump $emp;
echo "<table border='2'>";
        foreach( $employees as $name => $address)
        {
            echo "<tr>";
                echo "<td>" .$name. "</td>";
                echo "<td>" .$address. "</td>";
            echo "</tr>";
        }
echo "</table>";
?>