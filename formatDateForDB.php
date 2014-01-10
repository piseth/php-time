<?php

$date= '20.12.2012';
function formatDateForDB( $date )
	{
		if( is_null($date) )
			return null;
		
		$y = substr($date, 6, 4);
		$m = substr($date, 3, 2);
		$d = substr($date, 0, 2);
		return date("Ymd", mktime(0,0,0,$m,$d,$y));
	}
echo formatDateForDB( $date );

$date = '20121220';
function formatDateForDatePicker( $date )
	{
		$format = "d.m.Y";
		$y = substr($date, 0, 4);
		$m = substr($date, 4, 2);
		$d = substr($date, 6, 2);
		return date($format, mktime(0,0,0,$m,$d,$y));
	}
echo formatDateForDatePicker($date);
?>
