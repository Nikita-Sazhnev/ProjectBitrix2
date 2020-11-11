 <?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
      "PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
      "USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
      "COMPONENT_TEMPLATE" => "flat"
        ),false
);?>