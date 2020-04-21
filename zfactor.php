<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Z Factor Result</title>


<style type="text/css">
<!--
body {
	background-color: #FFCC99;
}
-->
</style></head>


<body>
<div align="center">
<?php
function Zfactor( $lat ) {

// Formula derived from https://support.esri.com/en/technical-article/000007956

if ($lat <= -90 OR $lat >= 90 OR is_numeric($lat) == false) {
print "<p> Not a valid latitude.  Latitude must be between -90 & 90 Degrees </p>";
} Else {
$Radians = $lat * 0.0174532925;
$Zfactor = (1/(111320 * (cos($Radians))));
print "<p> $Zfactor is your recommended  Z-Factor </p>";
}
}
Zfactor($_GET['latitude']);
?>

<p><img src="globe-icon.png" alt="Globe" width="128" height="128" /></p>
</div>

</body>
</html>
