<form action="" method="GET">
    <p>Введите login</p>
	<input type="text" name="login">
    <p>Введите password</p>
	<input type="password" name="pass">
	<input type="submit" name="submit">
</form>

<?php
	if (isset($_REQUEST['submit'])) {
		$login = 'user';
		$pass = '123456';
		$formLogin = trim($_REQUEST['login']);
		$formPass = trim($_REQUEST['pass']);
		if ($login == $formLogin and $pass == $formPass) {
			echo 'Доступ разрешен!';
		} else {
			echo 'Доступ запрещен!';
		}
	}
?>