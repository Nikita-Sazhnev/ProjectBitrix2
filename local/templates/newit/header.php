<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss('/bitrix/css/main/bootstrap_v4/bootstrap.min.css');
    // Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
    // JS
    CJSCore::Init(array("jquery"));
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins//fancybox/source/jquery.fancybox.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}
    </script>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}
    </script>
    
    
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="page">
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "top",
                    "EDIT_TEMPLATE" => ""
                )
            );?>
                
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmulty", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "sect",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "topmulty"
	),
	false
);?>

</header> 
