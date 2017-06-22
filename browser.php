<html>
<body>

<?php
$output = system("/usr/local/bin/python /var/www/html/tmp/search.py "."".$_POST["queryword"]);
echo "/usr/local/bin/python /var/www/html/tmp/search.py "."".$_POST["queryword"];
echo "</br>";
echo "$ouput";
?>

</body>
</html>

