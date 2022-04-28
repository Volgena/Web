<form action="" method="POST">
	<span>Сколько вам лет?</span>
	<p><input type="radio" id="age1" name="age" value="1">
	<label for="age1">Менее 20</label>
	<p><input type="radio" id="age2" name="age" value="2">
	<label for="age2">20-25</label>
	<p><input type="radio" id="ed3" name="age" value="3">
	<label for="age3">26-30</label>
    <p><input type="radio" id="ed3" name="age" value="4">
	<label for="age3">более 30</label>
	<p><input type="submit"></p>

<?php 
	if (isset($_POST['age']) && $_POST['age'] == 1){
		echo 'Вам менее 20 лет';
	}
	if (isset($_POST['age']) && $_POST['age'] == 2){
		echo 'Вам 20-25 лет';
	}
	if (isset($_POST['age']) && $_POST['age'] == 3){
		echo 'Вам 26-30 лет';
	}
    if (isset($_POST['age']) && $_POST['age'] == 4){
		echo 'Вам более 30 лет';
	}
?>
