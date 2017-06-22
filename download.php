<html>
<body>

<?php
$output = shell_exec("youtube-dl -f "."".$_POST["code"]." ".$_POST["vurl"]);
echo "<pre>$output</pre>";
echo "youtube-dl -f "."".$_POST["code"]." ".$_POST["vurl"];

$findme1 = 'Destination: ';
$pos1 = strpos($output, $findme1);
$findme2 = ' ';
$pos2 = strpos($output,$findme2,$pos1+13);
$filename = substr($output,$pos1+13,$pos2-$pos1-13);
echo '</br>';
echo "http://192.3.248.174/tmp/"."".$filename;
?>

</body>
</html>

