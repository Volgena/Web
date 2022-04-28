<form action="" method="GET">
    <p> Введите ваше имя</p>
	<input type="text" name="name">
    <br>
    <p> Введите ваш возраст</p>
    <input type="text" name="age">
    <br>
    <p>Оставьте сообщение</p>
	<textarea name="message"></textarea>
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_REQUEST['submit'])) {
		$age = strip_tags($_REQUEST['age']);
		$name = strip_tags($_REQUEST['name']);
		$message = strip_tags($_REQUEST['message']);
		echo "Привет, $name, $age лет <br> твое сообщение: $message";
	}
?>