<?php
header('Content-Type: text/html; charset=utf-8');

$firstName = $_POST['firstName'];
$Name = $_POST['Name'];
$lastName = $_POST['lastName'];

$arName = explode(' ',$Name);
$arlastName = explode(' ',$lastName);

$arFirstLetters = array_map(function ($item){
    return mb_substr($item, 0, 1,'UTF-8');
}, $arName);
$arFirstLetters1 = array_map(function ($item){
    return mb_substr($item, 0, 1,'UTF-8');
}, $arlastName);
$strFirstLetter = implode('', $arFirstLetters);
$strFirstLetter1 = implode('', $arFirstLetters1);
echo $firstName, $strFirstLetter, $strFirstLetter1;
?>
            