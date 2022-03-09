<?php
echo "SHALVI MISHRA";
echo "<br>";
$hmark = $_REQUEST['hmark'];
$emark = $_REQUEST['emark'];
$mmark = $_REQUEST['mmark'];
$pmark = $_REQUEST['pmark'];
$cmark = $_REQUEST['cmark'];
$total = $hmark+$emark+$mmark+$pmark+$cmark;
printf("TOTAL MARKS IS %d", $total);
echo "<br>";
printf("MARKS IN PERCENTAGE %F",($total*100)/500);
?>