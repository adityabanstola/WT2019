<?php 
$arr = array("Football","Dog","Mango","Cat","Cow","Man");
sort($arr);

foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;
    echo "</br>";
}
    echo"</br>";

//rsort = sorts in descending order
rsort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;
    echo "</br>";
}
    echo "</br>";
//ksort = sorts in ascending order according to key value
$arr = array('2' => 'Mango', '1' => 'Grapes', '0' => 'Dog' );
ksort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";
//krsort = sorts in reverse order of items key value
$arr = array('2' => 'Mango', '1' => 'Grapes', '0' => 'Dog' );
krsort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";
//asort = sorts in ascending order of value
$arr = array('1' => 'Mango', '2' => 'Grapes', '0' => 'Dog' );
asort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";
//arsort = sorts in descending order of value
$arr = array('1' => 'Mango', '2' => 'Grapes', '0' => 'Dog' );
arsort($arr);
foreach($arr as $key => $value)
{
    echo " " .$key. " = " .$value;

    echo "</br>";
}
    echo "</br>";
?>