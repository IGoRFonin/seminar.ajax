<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$array = array("�����", "������", "�������");
echo str_replace("'", "\"", CUtil::PhpToJSObject($array));