<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ОТТ-притяжение: факторы перезагрузки на рынке онлайн-видео");
?>
<div class="h-ott">
	<img alt="ОТТ" src="/upload/banners/ott.jpg" height="106" title="ОТТ" class="h-ott__logo">
</div>
 <main class="ott">
<div class="ott__wraper">
	<div class="ott__left">
		<div class="ott__banner">
			<a href="https://www.ivi.ru/" target="_blank">
 				<img src="/upload/banners/ivi.jpg" alt="IWI" class="ott__title_img">
			</a>
		</div>
		<div class="ott__banner">
            <a href="https://www.huawei.com/ru/" target="_blank">
                <img src="/upload/banners/huawei.jpg" alt="" class="ott__title_img">
			</a>
		</div>
	</div>
	<div class="ott__content">
		<div class="ott__title">
			<div class="ott__title_banner">
                <img src="http://placehold.it/1150x100" alt="" class="ott__title_img">
			</div>
        </div>                  
		<div class="ott__content_video">
            <video src="#" class="ott__content_player" controls=""></video>
        </div>
		<div class="ott__banner_modile">
            <a href="https://rt.ru/" target="_blank">
                <img src="/upload/banners/rostelecom2.jpg" alt="" class="ott__title_img">
			</a>
        </div>
		<div class="ott__banner_modile">
            <a href="https://www.huawei.com/ru/" target="_blank">
                <img src="/upload/banners/huawei2.jpg" alt="" class="ott__title_img">
			</a>
		</div>         
		<div class="ott__banner_modile">
            <a href="https://www.ivi.ru/" target="_blank">
 				<img src="/upload/banners/ivi2.jpg" alt="IWI" class="ott__title_img">
			</a>
        </div>  
		<div class="ott__button_mobile">
            <a href="/upload/banners/programm3.jpg" class="ott__btn_link" target="_blank">
	            <img src="/upload/banners/button2.png" />
            </a>
		</div>               
		<div class="ott__content_chat">
			 <?$APPLICATION->IncludeComponent(
	"ylab:comments", 
	".default", 
	array(
		"ASYNC_PAGE_NAVIGATION" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CAN_AUTHOR_DELETE_UNMODERATED_COMMENTS" => "Y",
		"CAN_AUTHOR_EDIT_COMMENTS" => "Y",
		"CAN_UNAUTH_USERS_READ_COMMENTS" => "Y",
		"COMMENTING_CAPABILITIES" => array(
			0 => "undo",
			1 => "redo",
			2 => "formatting",
			3 => "strong",
			4 => "em",
			5 => "del",
			6 => "superscript",
			7 => "subscript",
			8 => "link",
			9 => "image",
			10 => "align",
			11 => "unorderedList",
			12 => "orderedList",
			13 => "horizontalRule",
			14 => "removeformat",
			15 => "emoji",
		),
		"COMMENTS_SORT" => "desc",
		"COMMENT_DATE_FORMAT" => "j M Y",
		"COMPONENT_LIKES_TEMPLATE" => ".default",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTENT_ID" => "1",
		"CONTENT_TYPE" => "1",
		"COUNT_ON_PAGE" => "10",
		"CURRENT_USER_NAME" => "",
		"EDITION_TIME" => "3600000000000000000000000",
		"GROUPS_THAT_CAN_COMMENT" => array(
			0 => "6",
		),
		"MENTIONED_USERS_FILTER_GROUPS_ID" => array(
			0 => "3",
		),
		"MENTIONED_USERS_FILTER_KEYWORDS" => "",
		"NEED_LIKES" => "N",
		"NEED_MODERATION" => "Y",
		"PAGE_NAVIGATION_TEMPLATE" => "modern"
	),
	false
);?>
<?
global $USER;
if ($USER->IsAdmin()){
?>
			<?}?>
			<?
				global $USER;
				if (!$USER->IsAuthorized()){?>
                    <div class="ott__nonauth">
                        <p class="ott__nonauth_info">
                            Для того чтобы иметь возможность задать вопрос спикерам, вам необходимо <a href="https://telesputnik.ru/auth/#auth" class="ott__nonauth_link" target="_blank">авторизоваться</a>  или <a href="https://telesputnik.ru/auth/#registratsiya" class="ott__nonauth_link" target="_blank">зарегистрироваться</a>.
                        </p>
                        <p class="ott__nonauth_info">
                            После авторизации, пожалуйста, обновите страницу.
                        </p>
                    </div>
				<?}
			?>
        </div>
	</div>
	<div class="ott__right">
		<div class="ott__button">
            <a href="/upload/banners/programm3.jpg" class="ott__btn_link" target="_blank">
	            <img src="/upload/banners/opa_btn.png" />
            </a>
		</div>
		<div class="ott__banner">
            <a href="https://rt.ru/" target="_blank">
                <img src="/upload/banners/rostelecom.jpg" alt="" class="ott__title_img">
			</a>
		</div>
	</div>
</div>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>