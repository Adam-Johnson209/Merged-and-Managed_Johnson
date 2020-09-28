<?php
$MyFirstVariable = 'Adam';
$string1 = 'My first variable was named $MyFirstVariable';
    $string2 = "The value of my variable was $MyFirstVariable";
echo $string1. "<br/>";
echo "<br/>";
echo $string2. "<br/>";
echo "<br/>";

$emptyArray = array();


$object = [
    'First Name' => ' Adam ',
    'Last Name' => ' Johnson ',
    'Semester' => ' Fall 2020'
    ];

echo json_encode($object) ;
echo "<br/>";
echo "<br/>";

for( $i=1; $i<=50; $i++ )
echo $i;
echo "<br>";

echo strlen($string1) + strlen($string2) ; "<br>";
?>
