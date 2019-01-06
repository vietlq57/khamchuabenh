<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Khambenh_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                                                                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                                                                                   document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1788459514726816', {
            em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1788459514726816&ev=PageView&noscript=1"
        /></noscript>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This site is optimized with the Yoast SEO plugin v3.0.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Trang chủ - " />
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="Bệnh viện Nam Học và Hiếm muộn Hà Nội" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Trang chủ - "/>

    <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/afhanoi.com\/","name":"B\u1ec7nh vi\u1ec7n Nam H\u1ecdc v\u00e0 Hi\u1ebfm mu\u1ed9n H\u00e0 N\u1ed9i","potentialAction":{"@type":"SearchAction","target":"https:\/\/afhanoi.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
    <!-- / Yoast SEO plugin. -->

    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"https:\/\/afhanoi.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.2"}};
        !function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d"),f=String.fromCharCode;return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(f(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(f(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(f(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(f(55357,56835),0,0):e.fillText(f(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        .g1-layer-small-black {
            padding:5px 20px;
            position:absolute;
            font-size:18px;
            line-height:24px;
            color:#000;
            background-color:rgb(255,255,255);
            background-color:rgba(255,255,255, 0.75);
        }

        .g1-layer-small-white {
            padding:5px 20px;
            position:absolute;
            font-size:18px;
            line-height:24px;
            color:#fff;
            background-color:rgb(0,0,0);
            background-color:rgba(0,0,0, 0.75);
        }

        .g1-layer-medium-black {
            padding:7px 20px;
            position:absolute;
            font-size:36px;
            line-height:42px;
            color:#000;
            background-color:rgb(255,255,255);
            background-color:rgba(255,255,255, 0.75);
        }

        .g1-layer-medium-white {
            padding:7px 20px;
            position:absolute;
            font-size:36px;
            line-height:42px;
            color:#fff;
            background-color:rgb(0,0,0);
            background-color:rgba(0,0,0, 0.75);
        }

        .g1-layer-large-black {
            padding:7px 20px;
            position:absolute;
            font-size:60px;
            line-height:70px;
            color:#000;
            background-color:rgb(255,255,255);
            background-color:rgba(255,255,255, 0.75);
        }

        .g1-layer-large-white {
            padding:7px 20px;
            position:absolute;
            font-size:60px;
            line-height:70px;
            color:#fff;
            background-color:rgb(0,0,0);
            background-color:rgba(0,0,0, 0.75);
        }

        .g1-layer-xlarge-black {
            padding:7px 20px;
            position:absolute;
            font-size:84px;
            line-height:98px;
            color:#000;
            background-color:rgb(255,255,255);
            background-color:rgba(255,255,255, 0.75);
        }

        .g1-layer-xlarge-white {
            padding:7px 20px;
            position:absolute;
            font-size:84px;
            line-height:98px;
            color:#fff;
            background-color:rgb(0,0,0);
            background-color:rgba(0,0,0, 0.75);
        }
        .tp-caption a {
            color:#ff7302;
            text-shadow:none;
            -webkit-transition:all 0.2s ease-out;
            -moz-transition:all 0.2s ease-out;
            -o-transition:all 0.2s ease-out;
            -ms-transition:all 0.2s ease-out;
        }

        .tp-caption a:hover {
            color:#ffa902;
        }
    </style>
    <link rel='stylesheet' id='rs-plugin-captions-css'  href='/wp-content/plugins/revslider/rs-plugin/css/captions.php?rev=4.3.6&#038;ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-fonts-css'  href='wp-content/themes/mixcolors/fonts/font-awesome.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-fonts2-css'  href='wp-content/themes/mixcolors/fonts/fonts.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-bootstap-css'  href='wp-content/themes/mixcolors/css/bootstrap.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-bootstap-theme-css'  href='wp-content/themes/mixcolors/css/bootstrap-theme.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-bxslider-css'  href='wp-content/themes/mixcolors/css/jquery.bxslider.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='style-main-css'  href='wp-content/themes/mixcolors/css/style.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='main-style-css'  href='wp-content/themes/mixcolors/style.css?ver=4.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='A2A_SHARE_SAVE-css'  href='wp-content/plugins/add-to-any/addtoany.min.css?ver=1.12' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.plugins.min.js?rev=4.3.6&#038;ver=4.4.2'></script>
    <script type='text/javascript' src='/wp-content/plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=4.3.6&#038;ver=4.4.2'></script>
    <link rel='https://api.w.org/' href='/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.4.2" />
    <link rel='shortlink' href='/' />

    <script type="text/javascript"><!--
        var a2a_config=a2a_config||{},wpa2a={done:false,html_done:false,script_ready:false,script_load:function(){var a=document.createElement('script'),s=document.getElementsByTagName('script')[0];a.type='text/javascript';a.async=true;a.src='https://static.addtoany.com/menu/page.js';s.parentNode.insertBefore(a,s);wpa2a.script_load=function(){};},script_onready:function(){wpa2a.script_ready=true;if(wpa2a.html_done)wpa2a.init();},init:function(){for(var i=0,el,target,targets=wpa2a.targets,length=targets.length;i<length;i++){el=document.getElementById('wpa2a_'+(i+1));target=targets[i];a2a_config.linkname=target.title;a2a_config.linkurl=target.url;if(el){a2a.init('page',{target:el});el.id='';}wpa2a.done=true;}wpa2a.targets=[];}};a2a_config.callbacks=a2a_config.callbacks||[];a2a_config.callbacks.push({ready:wpa2a.script_onready});a2a_config.templates=a2a_config.templates||{};a2a_localize = {
            Share: "Share",
            Save: "Save",
            Subscribe: "Subscribe",
            Email: "Email",
            Bookmark: "Bookmark",
            ShowAll: "Show all",
            ShowLess: "Show less",
            FindServices: "Find service(s)",
            FindAnyServiceToAddTo: "Instantly find any service to add to",
            PoweredBy: "Powered by",
            ShareViaEmail: "Share via email",
            SubscribeViaEmail: "Subscribe via email",
            BookmarkInYourBrowser: "Bookmark in your browser",
            BookmarkInstructions: "Press Ctrl+D or \u2318+D to bookmark this page",
            AddToYourFavorites: "Add to your favorites",
            SendFromWebOrProgram: "Send from any email address or email program",
            EmailProgram: "Email program",
            More: "More&#8230;"
        };

        //--></script>
    <title>
        Trang chủ - Bệnh viện Nam Học và Hiếm muộn Hà Nội | Andrology and Fertility Hospital of Hanoi	</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/2016/02/logo-mobile.png" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "/connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=919638041421579";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header class="header container">
    <div class="row top-header">
        <div class="col-sm-9 left">
            <span class="add-icon">431 Tam Trinh (Lô 01 – 8A), Cụm Công Nghiệp Hoàng Mai - Quận Hoàng Mai – Hà Nội – Việt Nam&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <a href="tel:024 3634 3636" class="tel-icon">024 3634 3636</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mailto:contact@afhanoi.com" class="mail-icon">contact@afhanoi.com</a>
        </div>
        <div class="col-sm-3 text-right">
            <div class="switch-lang" >
                <a href="http://afhanoi.com/en"><img src="wp-content/themes/mixcolors/images/us-flag.png" /> English</a>
            </div>
            <form action="https://afhanoi.com" class="form-inline">
                <fieldset>
                    <div class="input-group" style="position: relative;">
                        <input type="text" name="s" id="search" placeholder="Tìm kiếm"  />
                        <button type="submit" class="search-button"><img src="wp-content/themes/mixcolors/images/search-icon.png" /></button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="row mid-header">
        <div class="col-md-7 left">
            <h1>
                <a href="https://afhanoi.com" rel="homepage">
                    <img src="wp-content/uploads/2016/05/logo-3.jpg" />
                </a>
            </h1>
        </div>
        <div class="col-md-5 right text-right">
            <a href="tel:090 222 1268"><img class="hotline" src="wp-content/uploads/2016/03/phone-icon.png"  style="margin-right: 15px;"/></a>
            <a href="https://www.youtube.com/channel/UClpOMql2VufF_FCpxUWBeyA" target="_blank" style="margin-left: 10px;"><img src="wp-content/uploads/2016/03/YouTube-2-e1457166848675.png" /></a>
            <a href="https://www.facebook.com/afhanoi" target="_blank" style="margin-left: 10px;"><img src="wp-content/uploads/2016/03/Facebook-2-e1457166880901.png" /></a>
            <a href="https://www.doctorman.net" target="_blank" style="margin-left: 10px;"><img src="wp-content/uploads/2017/02/Logo-doctor-man-40x40.png" /></a>
        </div>
    </div>
    <p class="slogan">Kết nối yêu thương, Ươm mầm hạnh phúc</p>
    <nav role="navigation">
        <div class="navbar">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
                <a href="https://afhanoi.com" rel="homepage">
                    <img class="mobile" src="wp-content/uploads/2016/05/logo-3.jpg" />
                </a>
                <p class="slogan slogan-mobile">Kết nối yêu thương, Ươm mầm hạnh phúc</p>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse nav-custom">
                <div class="container">
                    <div class="menu-menu-main-container"><ul id="menu-menu-main" class="nav navbar-nav navbar-left"><li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-49"><a href="/">Trang chủ</a></li>
                            <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-48"><a href="/gioi-thieu">Giới thiệu</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1156"><a href="/tong-quan-ve-benh-vien">Tổng quan về Bệnh viện</a></li>
                                    <li id="menu-item-1161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1161"><a href="/co-so-vat-chat">Cơ sở vật chất</a></li>
                                    <li id="menu-item-1125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1125"><a href="/doi-ngu-chuyen-mon">Đội ngũ chuyên môn</a></li>
                                    <li id="menu-item-1475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1475"><a href="/hop-tac-chuyen-mon">Hợp tác Chuyên môn</a></li>
                                    <li id="menu-item-1164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1164"><a href="/tam-nhin-va-su-menh">Tầm nhìn và sứ mệnh</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-100"><a href="/danh-muc/nam-hoc-va-gioi-tinh">Nam Học và Giới tính</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-240" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-240"><a href="/danh-muc/nam-khoa">Nam khoa</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1445"><a href="/tong-quan-ve-nam-hoc-2">Tổng quan về Nam học</a></li>
                                            <li id="menu-item-241" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-241"><a href="/danh-muc/tinh-duc-nam">Tình dục Nam</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1506"><a href="/roi-loan-cuong-duong">Rối loạn Cương dương</a></li>
                                                    <li id="menu-item-1505" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1505"><a href="/roi-loan-xuat-tinh">Rối loạn xuất tinh</a></li>
                                                    <li id="menu-item-1504" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1504"><a href="/suy-sinh-duc">Suy sinh dục</a></li>
                                                    <li id="menu-item-1503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1503"><a href="/man-duc-nam">Mãn dục Nam</a></li>
                                                    <li id="menu-item-1502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1502"><a href="/giam-ham-muon-tinh-duc">Giảm ham muốn tình dục</a></li>
                                                    <li id="menu-item-1501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1501"><a href="/tai-nan-phong-the">Tai nạn phòng the</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-239" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-239"><a href="/danh-muc/cac-benh-ly-he-sinh-san-nam-gioi">Các bệnh lý hệ sinh sản Nam giới</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1639" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1639"><a href="/gan-tinh-mach-tinh-nhung-dieu-can-bie.html">Giãn tĩnh mạch tinh</a></li>
                                                    <li id="menu-item-1638" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1638"><a href="/tinh-hoan-an-2.html">Tinh hoàn ẩn</a></li>
                                                    <li id="menu-item-1637" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1637"><a href="/tinh-hoan-lac-cho.html">Tinh hoàn lạc chỗ</a></li>
                                                    <li id="menu-item-1636" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1636"><a href="/939.html">Dương vật cong</a></li>
                                                    <li id="menu-item-1635" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1635"><a href="/thoat-vi-ben.html">Thoát vị bẹn</a></li>
                                                    <li id="menu-item-1640" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1640"><a href="/so-cuu-vat-hang.html">Sơ cứu vật hang</a></li>
                                                    <li id="menu-item-1634" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1634"><a href="/974.html">Hẹp bao quy đầu</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-238" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-238"><a href="/danh-muc/benh-ly-lien-quan-den-quan-he-tinh-duc">Bệnh lý liên quan đến quan hệ tình dục</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1572" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1572"><a href="/lau">Lậu</a></li>
                                                    <li id="menu-item-1571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1571"><a href="/giang-mai">Giang mai</a></li>
                                                    <li id="menu-item-1570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1570"><a href="/sui-mao-ga">Sùi mào gà</a></li>
                                                    <li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569"><a href="/1553-2">Viêm gan B</a></li>
                                                    <li id="menu-item-1568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1568"><a href="/hiv">HIV</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-292" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-292"><a href="/danh-muc/vo-sinh-nam">Vô sinh Nam</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1641" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1641"><a href="/khong-tinh-trung.html">Không tinh trùng</a></li>
                                                    <li id="menu-item-1646" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1646"><a href="/phuong-phap-dieu-tri-benh-khong-xuat-tinh.html">Không xuất tinh</a></li>
                                                    <li id="menu-item-1643" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1643"><a href="/tac-ong-dan-tinh.html">Tắc ống dẫn tinh</a></li>
                                                    <li id="menu-item-1642" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1642"><a href="/van-de-roi-loan-noi-tiet-o-nam-gioi.html">Vấn đề rối loạn nội tiết ở nam giới</a></li>
                                                    <li id="menu-item-1645" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1645"><a href="/vo-sinh-o-nam-va-nu-do-di-truyen-co-the-ban-chua-biet.html">Rối loạn nhiễm sắc thể</a></li>
                                                    <li id="menu-item-1644" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1644"><a href="/gan-tinh-mach-tinh-nhung-dieu-can-bie.html">Giãn tĩnh mạch tinh</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-424" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-424"><a href="/danh-muc/san-phu-khoa">Sản phụ khoa</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1448"><a href="/tong-quan-ve-san-phu-khoa">Tổng quan về Sản phụ khoa</a></li>
                                            <li id="menu-item-426" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-426"><a href="/danh-muc/cac-benh-ly-he-sinh-san-nu-gioi">Các bệnh lý hệ sinh sản Nữ giới</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1631" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1631"><a href="/lac-noi-mac-tu-cung-va-thu-thai.html">Lạc nội mạc tử cung</a></li>
                                                    <li id="menu-item-1629" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1629"><a href="/dinh-buong-tu-cung-va-cach-dieu-tri.html">Dính tử cung</a></li>
                                                    <li id="menu-item-1630" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1630"><a href="/trieu-chung-cua-tac-ong-dan-trung.html">Viêm tắc vòi trứng</a></li>
                                                    <li id="menu-item-1632" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1632"><a href="/suy-buong-trung.html">Suy buồng trứng</a></li>
                                                    <li id="menu-item-1633" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1633"><a href="/dau-hieu-cua-hoi-chung-buong-trung-da-nang.html">Buồng trứng đa nang</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-435" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-435"><a href="/danh-muc/vo-sinh-nu">Vô sinh Nữ</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1618" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1618"><a href="/vo-sinh-do-di-tat-tu-cung.html">Vô sinh do dị tật tử cung</a></li>
                                                    <li id="menu-item-1617" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1617"><a href="/lac-noi-mac-tu-cung-va-thu-thai.html">Lạc nội mạc tử cung</a></li>
                                                    <li id="menu-item-1615" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1615"><a href="/dinh-buong-tu-cung-va-cach-dieu-tri.html">Dính tử cung</a></li>
                                                    <li id="menu-item-1621" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1621"><a href="/vo-sinh-nu-do-tac-voi-trung.html">Vô sinh Nữ do vòi trứng</a></li>
                                                    <li id="menu-item-1620" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1620"><a href="/suy-buong-trung.html">Suy buồng trứng</a></li>
                                                    <li id="menu-item-1623" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1623"><a href="/dau-hieu-cua-hoi-chung-buong-trung-da-nang.html">Buồng trứng đa nang</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-434" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-434"><a href="/danh-muc/tinh-duc-nu">Tình dục Nữ</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1628" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1628"><a href="/roi-loan-chuc-nang-tinh-duc-nu.html">Rối loạn chức năng tình dục nữ</a></li>
                                                    <li id="menu-item-1627" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1627"><a href="/1120.html">Giảm ham muốn tình dục</a></li>
                                                    <li id="menu-item-1626" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1626"><a href="/lanh-cam-tinh-duc-nu-gioi.html">Lãnh cảm tình dục Nữ giới</a></li>
                                                    <li id="menu-item-1625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1625"><a href="/tai-nan-phong-the">Tai nạn phòng the</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-436" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-436"><a href="/danh-muc/benh-ly-lien-quan-den-quan-he-tinh-duc">Bệnh lý liên quan đến quan hệ tình dục</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-1562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1562"><a href="/lau">Lậu</a></li>
                                                    <li id="menu-item-1561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1561"><a href="/giang-mai">Giang mai</a></li>
                                                    <li id="menu-item-1560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1560"><a href="/sui-mao-ga">Sùi mào gà</a></li>
                                                    <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559"><a href="/1553-2">Viêm gan B</a></li>
                                                    <li id="menu-item-1558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1558"><a href="/hiv">HIV</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-99" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-99"><a href="/danh-muc/hiem-muon">Hiếm muộn</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1423"><a href="/tong-quan-ve-hiem-muon">Tổng quan về Hiếm muộn</a></li>
                                    <li id="menu-item-1422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1422"><a href="/thu-tinh-nhan-tao">Thụ tinh nhân tạo</a></li>
                                    <li id="menu-item-1421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1421"><a href="/thu-tinh-ong-nghiem">Thụ tinh ống nghiệm (IVF)</a></li>
                                    <li id="menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1420"><a href="/tru-lanh-tinh-trung-noan-phoi">Trữ lạnh tinh trùng, noãn, phôi</a></li>
                                    <li id="menu-item-586" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-586"><a href="/danh-muc/vo-sinh-nam">Vô sinh Nam</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1604" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1604"><a href="/tong-quan-ve-vo-sinh-nam.html">Tổng quan về vô sinh nam</a></li>
                                            <li id="menu-item-1601" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1601"><a href="/khong-tinh-trung.html">Không tinh trùng</a></li>
                                            <li id="menu-item-1607" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1607"><a href="/phuong-phap-dieu-tri-benh-khong-xuat-tinh.html">Không xuất tinh</a></li>
                                            <li id="menu-item-1602" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1602"><a href="/tac-ong-dan-tinh.html">Tắc ống dẫn tinh</a></li>
                                            <li id="menu-item-1603" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1603"><a href="/gan-tinh-mach-tinh-nhung-dieu-can-bie.html">Giãn tĩnh mạch tinh</a></li>
                                            <li id="menu-item-1605" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1605"><a href="/vo-sinh-o-nam-va-nu-do-di-truyen-co-the-ban-chua-biet.html">Rối loạn nhiễm sắc thể</a></li>
                                            <li id="menu-item-1606" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1606"><a href="/van-de-roi-loan-noi-tiet-o-nam-gioi.html">Vấn đề rối loạn nội tiết ở nam giới</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-587" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-587"><a href="/danh-muc/vo-sinh-nu">Vô sinh Nữ</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378"><a href="/tong-quan-vo-sinh-o-nu-gioi">Tổng quan vô sinh ở Nữ giới</a></li>
                                            <li id="menu-item-1614" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1614"><a href="/lac-noi-mac-tu-cung-va-thu-thai.html">Lạc nội mạc tử cung</a></li>
                                            <li id="menu-item-1616" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1616"><a href="/vo-sinh-do-di-tat-tu-cung.html">Vô sinh do dị tật tử cung</a></li>
                                            <li id="menu-item-1613" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1613"><a href="/dinh-buong-tu-cung-va-cach-dieu-tri.html">Dính tử cung</a></li>
                                            <li id="menu-item-1619" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1619"><a href="/vo-sinh-nu-do-tac-voi-trung.html">Vô sinh Nữ do vòi trứng</a></li>
                                            <li id="menu-item-1622" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1622"><a href="/suy-buong-trung.html">Suy buồng trứng</a></li>
                                            <li id="menu-item-1624" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1624"><a href="/dau-hieu-cua-hoi-chung-buong-trung-da-nang.html">Buồng trứng đa nang</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-588" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-588"><a href="/danh-muc/cac-ky-thuat-trong-ho-tro-sinh-san">Các kỹ thuật trong Hỗ trợ sinh sản</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-1599" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1599"><a href="/thu-tinh-trong-ong-nghiem-va-cac-xu-huong-ky-thuat.html">IVF</a></li>
                                            <li id="menu-item-1595" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1595"><a href="/icsi-cong-nghe-ho-tro-sinh-san.html">ICSI</a></li>
                                            <li id="menu-item-1597" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1597"><a href="/ho-tro-phoi-thoat-mang.html">Hỗ trợ phôi thoát màng</a></li>
                                            <li id="menu-item-1598" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1598"><a href="/ivm.html">IVM</a></li>
                                            <li id="menu-item-1596" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1596"><a href="/1116.html">PGS/PGD</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-1097" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1097"><a href="/danh-muc/suc-khoe-sinh-san">Sức khoẻ sinh sản</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1383"><a href="/suc-khoe-sinh-san/tong-quan-ve-sinh-san-nam">Tổng quan về hệ sinh sản Nam</a></li>
                                    <li id="menu-item-1392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1392"><a href="/tong-quan-ve-he-sinh-san-nu">Tổng quan về hệ sinh sản Nữ</a></li>
                                    <li id="menu-item-1407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1407"><a href="/kham-va-kiem-tra-suc-khoe-sinh-san-tien-hon-nhan">Khám và kiểm tra sức khỏe sinh sản tiền hôn nhân</a></li>
                                    <li id="menu-item-1586" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1586"><a href="/tu-van-cap-vo-chong-chuan-bi-mang-thai.html">Tư vấn cặp vợ chồng chuẩn bị mang thai</a></li>
                                    <li id="menu-item-1588" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1588"><a href="/tinh-duc-an-toan.html">Tình dục an toàn</a></li>
                                    <li id="menu-item-1587" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1587"><a href="/990.html">Kế hoạch hóa gia đình</a></li>
                                    <li id="menu-item-1592" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1592"><a href="/ca">Các bệnh, biến chứng liên quan đến sức khỏe sinh sản và cách phòng ngừa</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-548"><a href="/tin-tuc">Tin tức</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-617" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-617"><a href="/danh-muc/tin-tuc/tin-chuyen-nganh">Tin chuyên ngành</a></li>
                                    <li id="menu-item-618" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-618"><a href="/danh-muc/tin-tuc/tin-noi-bo">Tin nội bộ</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-541"><a href="/goc-tri-an">Góc tri ân</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-619" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-619"><a href="/danh-muc/goc-bao-chi">Góc báo chí</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-540"><a href="/thu-vien">Thư viện</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-621" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-621"><a href="/danh-muc/video">Video</a></li>
                                    <li id="menu-item-1585" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1585"><a href="/hinh-anh">Hình ảnh</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-551" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-551"><a href="/hoi-dap">Hỏi đáp</a></li>
                            <li id="menu-item-654" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-654"><a href="/danh-muc/tuyen-dung">Tuyển dụng</a></li>
                            <li id="menu-item-533" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-533"><a href="/lien-he">Liên hệ</a></li>
                        </ul></div>				</div>
            </div>
        </div>
    </nav>
</header><div class="main-content main-homepage container">
