<?php
ini_set("display_errors","1");
echo md5("QNKCDZO");
echo "</br>";
echo md5("240610708");

if(md5("QNKCDZO") == md5("240610708")) {
echo "</br>==equal</br>";
}

if(md5("QNKCDZO") === md5("240610708")) {
echo "===equal</br>";
}

if(strcmp(md5("QNKCDZO"),md5("240610708"))) {
echo "strcmp equal</br>";
}

//if(hash_equals(md5("QNKCDZO"),md5("240610708"))) {
//echo "hash compare equal</br>";
//}

?>
