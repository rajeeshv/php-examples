<?php
ini_set("display_errors","1");
$arr= array("foo"=>"bar");
$obj = (object) $arr;
echo $obj->foo;  // outputs 'ciao'
echo "</br>";
echo get_class($obj);
?>

