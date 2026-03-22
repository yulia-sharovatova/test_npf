<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    //main code
    //инициализируем модули для работы с коллекциями
    CModule::IncludeModule("fileman");
    CMedialib::Init();

    //получаем список коллекций
    $arCollections = CMedialibCollection::GetList([
            'arFilter' => ['ACTIVE' => 'Y', 'NAME' => $sCollectionName],
            'arOrder' => ['NAME' => 'ASC']
        ]);

    //смотрим есть ли среди них коллекция которую нам передали в .parameters.php
    $sTargetCollectionName = trim($arParams["COLLECTION"]);
    $iCollectionID = null;
	foreach ($arCollections as $collection) {
        if($collection['NAME'] == $sTargetCollectionName)
            $iCollectionID=$collection['ID'];
    }
    //если есть
    if ($iCollectionID) {
        //получаем список файлов из нее
        $arItems = CMedialibItem::GetList([
            'arCollections' => [$iCollectionID],
            'arFilter' => []
        ]);

        //перепаковываем добавляя расширения, чтобы не нужно было ничего выполнять в выводе
        foreach ($arItems as $aItem) {
            $arResult['FILES'][] = array(
                "NAME" => $aItem['NAME'],
                "PATH" => $aItem['PATH'],
                "EXTENSION" => pathinfo($aItem['NAME'], PATHINFO_EXTENSION)
            );
        }
    }

	
//end code, start template. data visualizer
$this->IncludeComponentTemplate();
?>