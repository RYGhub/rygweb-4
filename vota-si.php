<?php
	setcookie("bennatre", true, time() + 86400 * 30, '/');
?>
<html>
<?php
	$file = file_get_contents("si.json");
	$voted = file_get_contents("list.txt");
	$result = intval($file) + 1;
	$added = $voted . ', ' . $_SERVER['REMOTE_ADDR'];
	file_put_contents("si.json", $result);
	file_put_contents("list.txt", $added);
?>
</html>