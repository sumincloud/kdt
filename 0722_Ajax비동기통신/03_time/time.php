<?php 
// time.php

// 1. 시간변수 생성
$d1 = new DateTime; 

//2. 현재 지역시간으로 맞춤
$d1 -> setTimezone(new DateTimezone("asia/seoul"));

//3. 시간출력
echo $d1 -> format('H:i:s');

?>