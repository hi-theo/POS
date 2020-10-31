<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");
echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<b>sheet 1</b> \t <u>isikan kebutuhan untuk excel anda disini</u> \t \n ";
echo "</body>";
echo "</html>";
?>