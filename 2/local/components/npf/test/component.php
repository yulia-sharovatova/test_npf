<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//main code
global $USER;

$arResult=[];

if($USER->IsAuthorized())
{
	$arResult['LOGIN']=$USER->GetLogin();
}
else
{
	$arResult['LOGIN']="анонимус";
}

//end code, start template. data visualizer
$this->IncludeComponentTemplate();
?>