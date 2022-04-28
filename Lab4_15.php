<form action="" method="POST">
	<span>Ваш возраст?</span>
	<select name="list_age">
		<option value="0">Сколько вам лет?</option>
		<option value="1">менее 20</option>
		<option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">более 30</option>
	</select>
	<input type="submit">
</form>

<?php 
	if (isset($_POST['list_age']) && $_POST['list_age'] == 1){
		echo 'Вам менее 20 лет';
	}
	if (isset($_POST['list_age']) && $_POST['list_age'] == 2){
		echo 'Вам 20-25 лет';
	}
    if (isset($_POST['list_age']) && $_POST['list_age'] == 3){
		echo 'Вам 26-30 лет';
	}
    if (isset($_POST['list_age']) && $_POST['list_age'] == 4){
		echo 'Вам более 30 лет';
	}
?>