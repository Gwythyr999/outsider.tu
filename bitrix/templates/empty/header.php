<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$bIsMainPage = $APPLICATION->GetCurPage(false)  == SITE_DIR;
?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>

        <!-- Fonts -->
        <?
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/font-awesome.min.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/linea-icomoon.css');
        $APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Montserrat:400,700');
        $APPLICATION->SetAdditionalCSS('http://fonts.googleapis.com/css?family=Inconsolata:400,700');
        ?>
        <!-- CSS -->
        <?
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/bootstrap.min.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/linea-icomoon.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/slick.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/magnific-popup.css');
        $APPLICATION->SetAdditionalCSS('/bitrix/templates/.default/css/main.css');
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/bitrix/templates/.default/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/bitrix/templates/.default/img/favicon_32x32.png">
        <!-- Scripts -->
        <?
        $APPLICATION->AddHeadScript('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/modernizr.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/jquery.infinitescroll.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/jquery.appear.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/jquery.tweet.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/bootstrap.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/imagesloaded.pkgd.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/isotope.pkgd.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/slick.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/vendor/jquery.magnific-popup.min.js');
        $APPLICATION->AddHeadScript('/bitrix/templates/.default/js/main.js');
        ?>
        <div id="panel">
            <?$APPLICATION->ShowPanel();?>
        </div>
	</head>
	<body>

        <!-- Preloader -->
        <div class="preloader flex flex-middle">
            <img src="/bitrix/templates/.default/img/svg/cube.svg" class="preloader-cubes" alt="Loading..." />
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top is-transparent" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">OutSider</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "menu.main",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "menu.main"
                        ),
                        false
                    );?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#share-popup" class="iconized open-popup-link" data-toggle="tooltip" data-placement="bottom" title="Share"><i class="icon icon-share"></i></a>
                            <!-- Popup Content -->
                            <div id="share-popup" class="full-popup mfp-hide">
                                <article class="share">
                                    <h3 class="snserif">Share this page</h3>
                                    <ul class="social-list">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-pinterest"></a></li>
                                        <li><a href="#" class="fa fa-google-plus"></a></li>
                                        <li><a href="#" class="fa fa-tumblr"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </article>
                            </div>
                        </li>
                        <li>
                            <a href="#search-popup" class="iconized open-popup-link" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="icon icon-magnifier"></i></a>
                            <!-- Popup Content -->
                            <div id="search-popup" class="full-popup mfp-hide">
                                <article class="search">
                                    <div class="container">
                                        <div class="row">
                                            <h3 class="snserif">Search</h3>
                                            <div class="input-group col-md-4 col-md-offset-4">
                                                <input type="text" class="form-control" placeholder="Type and press enter to search">
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <?if($bIsMainPage):?>
        <header class="header hero flex flex-middle" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <h1>Jack Eastwood</h1>
                        <h4 class="snserif">Not another blogger</h4>
                    </div>
                </div>
            </div>
        </header>
            <main class="main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Filter -->
                            <ul id="filter" class="filter">
                                <li><a data-filter="*" class="btn btn-filter" role="button" data-text="All">All</a></li>
                                <li><a data-filter=".design" class="btn btn-filter" role="button" data-text="Design">Design</a></li>
                                <li><a data-filter=".inspiration" class="btn btn-filter" role="button" data-text="Inspiration">Inspiration</a></li>
                                <li><a data-filter=".adventure" class="btn btn-filter" role="button" data-text="Adventure">Adventure</a></li>
                                <li><a data-filter=".photography" class="btn btn-filter" role="button" data-text="Photography">Photography</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Masonry -->
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"posts.main", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/new/#ID#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "Posts",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "posts.main"
	),
	false
);?>
                    <!-- /.masonry -->
                    <!-- Pagination -->
                    <nav class="content-nav">
                        <ul class="pager">
                            <li class="disabled"><a href="page2.html">Older</a></li>
                            <li><a href="page2.html">Newer</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Scroll top icon-square_up-->
                <a class="scroll-top icon icon-arrow-up"></a>
            </main>
        <?else:?>
        <!-- Content -->
        <main class="main" role="main">
            <div class="container">
                <?endif;?>
						