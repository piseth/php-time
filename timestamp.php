<?php

// get current timstamp
echo "<br>time()=";
echo time();
echo "<br>mktime()=";
echo mktime();
echo '<br>$now = new DateTime();$now->getTimestamp()=';
$now = new DateTime();
echo $now->getTimestamp();
echo "<br>date('U')=";
echo date("U");



// get timestamp of specific date and time
echo "<br>strtotime('2012-07-25 14:35:08')=";
echo strtotime('2012-07-25 14:35:25');

echo "<br>mktime(14,35,25,07,25,2012)=";
echo mktime(14,35,25,07,25,2012);

echo '<br>$date = new DateTime("2012-07-25 14:35:25");$date->getTimestamp()=';
$date = new DateTime('2012-07-25 14:35:25');
echo $date->getTimestamp();


echo "<br>mktime(0, 0, 0)=";
echo mktime(0, 0, 0);
echo "<br>mktime(0, 0, 0,11,29,2013)=";
echo mktime(0, 0, 0,11,29,2013);



// Y-m-d h:i:s
// 2013-11-29 00:00:00 -> 2013-11-29 23:59:59
echo "<br>";
echo date('Y-m-d h:i:s a', time());
echo "<br>";
echo date('Y-m-d H:i:s', time());

echo "<br>";
echo strtotime('today');
echo "<br>";
echo strtotime('tomorrow');
echo "<br>";
echo strtotime('today + 2 days');
echo "<br>";
echo strtotime('tomorrow + 1 days');


echo "<br>";
echo strtotime('today');
echo "<br>";
echo(strtotime("today + 23 hours 59 minutes 59 seconds") . "<br>");




echo strtotime('today');
echo "<br>";
echo strtotime('29-11-2013');
echo "<br>";
echo strtotime('2013-11-29');
echo "<br>";
///////////////////// (this get start tstamp of a day from given tstamp.)
// 2013-11-29 4:12:00 = 1385716317  
$tstamp = 1385716317;
echo strtotime(date('Y-m-d',$tstamp));




//int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )

//////////////////// (this get end tstamp of a day from given tstamp)
echo "<br>";
echo(strtotime("today + 23 hours 59 minutes 59 seconds") . "<br>");

echo mktime(23,59,59,date('n',$tstamp));
echo "<br>";
echo mktime(23,59,59,date('n',$tstamp),date('j',$tstamp));
echo "<br>";
echo mktime(23,59,59,date('n',$tstamp),date('j',$tstamp),date('Y',$tstamp));




?>
