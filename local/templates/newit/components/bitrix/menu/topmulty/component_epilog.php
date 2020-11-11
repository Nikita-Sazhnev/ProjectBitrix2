 <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"search", 
	array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "Y",
		"COMPONENT_TEMPLATE" => "search"
	),
	false
);?>