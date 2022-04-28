<form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
</form>

<?php
	if (isset($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Привет,'.$name;
	}
?>