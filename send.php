<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$USER_NAME = htmlspecialchars($_POST["user_name"]);
$USER_EMAIL = htmlspecialchars($_POST["user_email"]);
$USER_PHONE = htmlspecialchars($_POST["user_phone"]);
$USER_MESS = htmlspecialchars($_POST["user_mess"]);

$arEventFields = array(
    "USER_NAME" => $USER_NAME,
    "USER_EMAIL" => $USER_EMAIL,
    "USER_PHONE" => $USER_PHONE,
    "USER_MESS" => $USER_MESS,
);

CEvent::Send("SEND_EMAIL", "s1", $arEventFields, "N", "", "");


header("Location: /tovars/")
?>