<?php
for ($i = date('Y'); $i >= 1850; $i--) {
	$years[$i] = sprintf('%04d', $i);
}
for ($i = 1; $i < 13; $i++) {
	$months[$i] = sprintf('%02d', $i);
}
for ($i = 1; $i < 32 ; $i++) {
	$days[$i] = sprintf('%02d', $i);
}
/*print_r($years);
echo '<br />';
print_r($months);
echo '<br />';
print_r($days);
echo '<br />';*/

echo date("Y/m/d") . "<br />";
echo date("Y.m.d") . "<br />";
echo date("Y-m-d") . "<br />";
echo time().'<br />';
$t=time();
echo ($t . "<br />");
echo (date("D F d Y",$t)).'<br>';
echo date('l jS \of F Y h:i:s A');
?>
