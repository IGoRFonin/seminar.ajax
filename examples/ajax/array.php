<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$array = array("Кошка", "Собака", "Попугай");
echo CUtil::PhpToJSObject($array);