<?php 
error_reporting(0);
$condb = mysqli_connect("localhost","root","","bar_pos") 
or die ("Error :".mysqli_error($condb));
mysqli_query($condb,"SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');

?>