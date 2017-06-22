<html>
<body>

<form action="download.php" method="post">
download video code: <input type="text" name="code" />
<input type="text" name="vurl" value=<?php echo '"'.$_POST["videourl"].'"' ?> />
<input type="submit" />
</form>

<?php
$output = shell_exec("youtube-dl -F "."".$_POST["videourl"]);
echo "<pre>$output</pre>";
echo "youtube-dl -F "."".$_POST["videourl"];
?>

</body>
</html>

