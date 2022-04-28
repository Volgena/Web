
<form action="" method="POST">
    <span> Введите ваше имя</span>
	<p><input type="text" name="name" placeholder="Имя">
	<input type="hidden" name="checkbox" value="0">
	<input type="checkbox" name="checkbox" value="1">
	<input type="submit">
</form>

<?php 
	if (isset($_POST['name']) && $_POST['checkbox'] == 1){
		$name = strip_tags($_POST['name']);
		echo 'Приветствую, '.$name;
	}
	if (isset($_POST['name']) && $_POST['checkbox'] == 0){
		$name = strip_tags($_POST['name']);
		echo 'Прощай, '.$name;
	}
?>