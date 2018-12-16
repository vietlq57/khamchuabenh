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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
    <header>
        <div id="header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="container-fluid">
                                <div class="navtop pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="https://thucucclinics.com">Trang chủ</a></li>
                                        <li><a href="/gioi-thieu/" rel="nofollow">Giới thiệu</a></li>
                                        <li><a href="/he-thong-clinics/" rel="nofollow">Hệ thống Clinics</a></li>
                                        <li><a href="/hop-tac/" rel="nofollow">Hợp tác</a></li>
                                        <li><a href="/he-thong-clinics/" rel="nofollow">Sơ đồ chỉ đường</a></li>
                                        <li><a href="/lien-he/" rel="nofollow">Liên hệ</a></li>
                                        <li><a href="tel:19001920" rel="nofollow"><span><i class="glyphicon glyphicon-phone-alt"></i> 1900 1920</span></a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-lg-12">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="https://thucucclinics.com"><img src="wp-content/themes/thucuc/assets/img/logo.png" alt=""></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="navmain pull-right">
                                        <div id="cssmenu" class="collapse navbar-collapse navbar-ex1-collapse"><ul id="menu-menu-main" class="nav navbar-nav"><li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-da-mat/"><span>Chăm sóc<br><b> da mặt</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" href="/cham-soc-da-mat-thu-gian/"><span>Chăm sóc da mặt thư giãn</span></a>
                                                            <ul>
                                                                <li id="menu-item-28839" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/nuoi-duong-da-bang-chiet-xuat-cam-tuoi/"><span>Cung cấp sức sống cho làn da</span></a></li>
                                                                <li id="menu-item-28840" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/cai-thien-da-lao-hoa-nho-collagen-sinh-hoc/"><span>Cải thiện da lão hóa nhờ Collagen sinh học</span></a></li>
                                                                <li id="menu-item-28841" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/lieu-phap-giam-cang-thang-bang-huong-thom/"><span>Liệu pháp giảm căng thẳng bằng hương thơm</span></a></li>
                                                                <li id="menu-item-28842" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/cham-soc-phuc-hoi-da-nhay-cam-bang-tinh-chat-viet-quat-den/"><span>Chăm sóc phục hồi da nhạy cảm bằng tinh chất Việt Quất Đen</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-lam-trang-da/"><span>Chăm sóc làm trắng da</span></a>
                                                            <ul>
                                                                <li id="menu-item-28844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-lam-trang-da-bang-vitamin-c/"><span>Trị liệu làm trắng da bằng vitamin C</span></a></li>
                                                                <li id="menu-item-28845" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/mat-na-tre-hoa-trang-hong/"><span>Mặt nạ trẻ hóa trắng hồng</span></a></li>
                                                                <li id="menu-item-28846" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-va-lam-trang-da-bang-mat-na-dna/"><span>Trẻ hóa và làm trắng da bằng mặt nạ DNA</span></a></li>
                                                                <li id="menu-item-28847" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dac-tri-lam-giam-nam-tan-nhang-bang-aha-pha/"><span>Đặc trị làm giảm nám, tàn nhang bằng AHA- PHA</span></a></li>
                                                                <li id="menu-item-28848" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dac-tri-lam-trang-da-bang-cong-nghe-sinh-hoc/"><span>Đặc trị làm trắng da bằng công nghệ sinh học</span></a></li>
                                                                <li id="menu-item-28849" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/lam-trang-da-toan-dien-bang-cong-nghe-3c/"><span>Làm trắng da toàn diện bằng công nghệ 3C</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-tre-hoa-da/"><span>Chăm sóc trẻ hóa da</span></a>
                                                            <ul>
                                                                <li id="menu-item-28851" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tai-sinh-da-lao-hoa-bang-mat-na-omega/"><span>Tái sinh da lão hóa bằng mặt nạ Omega</span></a></li>
                                                                <li id="menu-item-28852" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dac-tri-da-lao-hoa-bang-mat-na-vi-tao/"><span>Đặc trị da lão hóa bằng mặt nạ vi tảo</span></a></li>
                                                                <li id="menu-item-28853" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-da-bang-oxy-tinh-khiet/"><span>Trẻ hóa da bằng Oxy tinh khiết</span></a></li>
                                                                <li id="menu-item-28854" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-da-bang-mat-na-vang/"><span>Trẻ hóa da bằng mặt nạ vàng</span></a></li>
                                                                <li id="menu-item-28855" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/sieu-duong-voi-tinh-chat-suong-rong-sa-mac/"><span>Siêu dưỡng ẩm với tinh chất Xương Rồng Sa Mạc</span></a></li>
                                                                <li id="menu-item-28856" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/giu-mai-net-thanh-xuan-bang-vitamin-va-serum/"><span>Giữ mãi nét thanh xuân bằng vitamin và Serum</span></a></li>
                                                                <li id="menu-item-28857" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/phuc-hoi-tam-giac-tuoi-thanh-xuan/"><span>Phục hồi tam giác tuổi thanh xuân</span></a></li>
                                                                <li id="menu-item-28858" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-da-nang-co-va-lam-day-cac-nep-nhan-bang-tao-nam-cuc/"><span>Trẻ hóa da, nâng cơ và làm đầy các nếp nhăn bằng Tảo Nam Cực</span></a></li>
                                                                <li id="menu-item-28859" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dac-tri-da-nhay-cam-bang-hop-chat-gpi/"><span>Đặc trị da nhạy cảm bằng hợp chất GPI</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-cac-vung-khac/"><span>Chăm sóc vùng mắt, môi, cổ</span></a>
                                                            <ul>
                                                                <li id="menu-item-28861" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/cham-soc-vung-moi-bang-parafin/"><span>Chăm sóc vùng môi bằng parafin</span></a></li>
                                                                <li id="menu-item-28862" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/chong-lao-hoa-va-quang-tham-vung-mat-bang-parafin/"><span>Chống lão hóa &#038; quầng thâm vùng mắt bằng Parafin</span></a></li>
                                                                <li id="menu-item-28863" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/chong-lao-hoa-va-lam-sang-vung-mat-bang-hyaluronic/"><span>Chống lão hóa &#038; làm sáng vùng mắt bằng Hyaluronic</span></a></li>
                                                                <li id="menu-item-28864" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/cham-soc-chong-nhan-vung-co-bang-hyaluronic-3d/"><span>Chăm sóc &#038; chống nhăn vùng cổ bằng Hyaluronic 3D</span></a></li>
                                                                <li id="menu-item-28865" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-dac-biet-vung-co-bang-mat-na-vi-tao/"><span>Trẻ hóa đặc biệt vùng cổ bằng mặt nạ vi tảo</span></a></li>
                                                                <li id="menu-item-28866" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-vung-mat-bang-mat-na-cu-cai-duong/"><span>Trẻ hóa vùng mắt bằng mặt nạ củ cải đường</span></a></li>
                                                                <li id="menu-item-28867" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-chuyen-sau-cho-vung-mat-moi-bang-trung-ca-muoi/"><span>Trị liệu chuyên  sâu cho vùng mắt, môi bằng trứng cá muối</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28868" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="/thay-da-sinh-hoc/"><span>Thay da sinh học</span></a>
                                                            <ul>
                                                                <li id="menu-item-28869" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thay-da-sinh-hoc-lieu-trinh-cho-da-nam-sam-tan-nhang/"><span>Thay da sinh học – Liệu trình cho da nám, sạm, tàn nhang</span></a></li>
                                                                <li id="menu-item-28870" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thay-da-sinh-hoc-cho-da-dau-mun-viem-nhe/"><span>Thay da sinh học cho da dầu, mụn viêm nhẹ</span></a></li>
                                                                <li id="menu-item-28871" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thay-da-sinh-hoc-lieu-trinh-cho-da-toi-xin-thieu-do-sang/"><span>Thay da sinh học – Liệu trình cho da tối xỉn, thiếu độ sáng</span></a></li>
                                                                <li id="menu-item-28872" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thay-da-sinh-hoc-tre-hoa-da-vung-mat/"><span>Thay da sinh học – Trẻ hóa da vùng mắt</span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-toan-than/"><span>Chăm sóc<br><b> toàn thân</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/dich-vu-tri-lieu/"><span>Dịch vụ trị liệu</span></a>
                                                            <ul>
                                                                <li id="menu-item-28874" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-tong-hop-cam-nhan-suc-song-thu-cuc/"><span>Trị liệu tổng hợp: Cảm nhận sức sống Thu Cúc</span></a></li>
                                                                <li id="menu-item-28875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="/tri-lieu-thu-gian-toan-bang-phuong-phap-tinh-dau/"><span>Trị liệu thư giãn toàn thân bằng phương pháp tinh dầu</span></a>
                                                                    <ul>
                                                                        <li id="menu-item-28876" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-thu-gian-toan-than-voi-tinh-dau/"><span>Trị liệu thư giãn toàn thân với tinh dầu</span></a></li>
                                                                        <li id="menu-item-28877" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-lam-san-chac-thon-nho-toan-than/"><span>Trị liệu làm săn chắc thon nhỏ toàn thân</span></a></li>
                                                                        <li id="menu-item-28878" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-toan-than-bang-phuong-phap-thuy-dien/"><span>Trị liệu toàn thân bằng phương pháp Thụy Điển</span></a></li>
                                                                        <li id="menu-item-28879" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-giai-doc-to-toan-than/"><span>Trị liệu giải độc tố toàn thân</span></a></li>
                                                                        <li id="menu-item-28880" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-phuc-hoi-co-the-bang-thao-duoc/"><span>Trị liệu phục hồi cơ thể bằng thảo dược</span></a></li>
                                                                        <li id="menu-item-28881" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bang-nang-luong-da-nong/"><span>Trị liệu bằng năng lượng đá nóng</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li id="menu-item-28888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="/tri-lieu-thu-gian-toan-bang-phuong-phap-an-huyet/"><span>Trị liệu thư giãn toàn thân bằng phương pháp ấn huyệt</span></a>
                                                                    <ul>
                                                                        <li id="menu-item-28882" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-tay/"><span>Trị liệu bấm huyệt tay</span></a></li>
                                                                        <li id="menu-item-28883" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-chan/"><span>Trị liệu bấm huyệt chân</span></a></li>
                                                                        <li id="menu-item-28884" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-chong-nhuc-moi-dau-vai/"><span>Trị liệu bấm huyệt chống nhức mỏi đầu vai</span></a></li>
                                                                        <li id="menu-item-28885" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-bang-phuong-phap-thai-lan/"><span>Trị liệu bấm huyệt bằng phương pháp Thái Lan</span></a></li>
                                                                        <li id="menu-item-28886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-bang-phuong-phap-nhat-ban/"><span>Trị liệu bấm huyệt bằng phương pháp Nhật Bản</span></a></li>
                                                                        <li id="menu-item-28887" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-cho-nguoi-choi-the-thao/"><span>Trị liệu bấm huyệt cho người chơi thể thao</span></a></li>
                                                                    </ul>
                                                                </li>
                                                                <li id="menu-item-28889" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="/tri-lieu-thu-gian-cho-ba-bau/"><span>Trị liệu thư giãn cho bà bầu</span></a>
                                                                    <ul>
                                                                        <li id="menu-item-28890" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-thu-gian-toan-voi-tinh-dau-cho-ba-bau/"><span>Trị liệu thư giãn toàn thân với tinh dầu cho bà bầu</span></a></li>
                                                                        <li id="menu-item-28891" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-bam-huyet-chong-nhuc-moi-cho-ba-bau/"><span>Trị liệu bấm huyệt chống nhức mỏi cho bà bầu</span></a></li>
                                                                        <li id="menu-item-51947" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a href="/giam-beo-sau-sinh/"><span>Giảm béo sau sinh</span></a>
                                                                            <ul>
                                                                                <li id="menu-item-51948" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-lam-san-chac-thon-nho-toan/"><span>Trị liệu làm săn chắc thon nhỏ toàn thân</span></a></li>
                                                                                <li id="menu-item-51950" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-lieu-giai-doc-to-toan-than/"><span>Trị liệu giải độc tố toàn thân</span></a></li>
                                                                                <li id="menu-item-51949" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/muoi-tay-da-chet-giam-beo-tinh-the-tre/"><span>Muối tẩy da chết giảm béo tinh thể tre</span></a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28892" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-toan/"><span>Chăm sóc toàn thân</span></a>
                                                            <ul>
                                                                <li id="menu-item-28893" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-da-chet-va-thu-gian-co-bang-muoi-tra-xanh/"><span>Tẩy da chết và thư giãn cơ thể bằng muối, trà xanh</span></a></li>
                                                                <li id="menu-item-28894" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-da-chet-bang-hat-oc-cho/"><span>Tẩy da chết bằng hạt óc chó</span></a></li>
                                                                <li id="menu-item-30736" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-da-chet-va-thu-gian-co-the-bang-muoi-vitamin/"><span>Tẩy da chết và thư giãn cơ thể bằng muối, vitamin</span></a></li>
                                                                <li id="menu-item-28895" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-da-chet-va-thu-gian-co-bang-muoi-bien-va-tao/"><span>Tẩy da chết và thư giãn cơ thể bằng muối biển và tảo</span></a></li>
                                                                <li id="menu-item-28897" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-da-chet-thu-gian-co-bang-sua-gao-va-mat-ong/"><span>Tẩy da chết &#038; thư giãn cơ thể bằng sữa gạo và mật ong</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-va-duong-the/"><span>Chăm sóc và dưỡng thể</span></a>
                                                            <ul>
                                                                <li id="menu-item-28900" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-toan-than-bang-mat-na-parafin/"><span>Trẻ hóa toàn thân bằng mặt nạ parafin</span></a></li>
                                                                <li id="menu-item-28901" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-toan-than-bang-mat-na-vi-tao/"><span>Trẻ hóa toàn thân bằng mặt nạ vi tảo</span></a></li>
                                                                <li id="menu-item-28902" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-va-lam-sang-da-bang-mat-na-dau-tam/"><span>Trẻ hóa và làm sáng da bằng mặt nạ dâu tằm</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-55622" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-sub"><a href="/tam-trang/"><span>Dịch vụ Tắm trắng</span></a>
                                                            <ul>
                                                                <li id="menu-item-28904" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tam-trang-bang-collagen-2/"><span>Tắm trắng bằng Collagen</span></a></li>
                                                                <li id="menu-item-28905" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tam-trang-phi-thuyen/"><span>Tắm trắng phi thuyền</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28906" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/cham-soc-tron-goi/"><span>Chăm sóc trọn gói</span></a>
                                                            <ul>
                                                                <li id="menu-item-28907" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/ha-noi-4-mua/"><span>Hà Nội 4 mùa</span></a></li>
                                                                <li id="menu-item-28908" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/du-lich-mien-nhiet-doi/"><span>Du lịch miền nhiệt đới</span></a></li>
                                                                <li id="menu-item-28909" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/kham-pha-bi-phuong-dong/"><span>Khám phá bí ẩn phương Đông</span></a></li>
                                                                <li id="menu-item-28910" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thao-duoc-tien/"><span>Thảo dược thần tiên</span></a></li>
                                                                <li id="menu-item-28911" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/giu-mai-net-thanh-xuan/"><span>Giữ mãi nét thanh xuân</span></a></li>
                                                                <li id="menu-item-28912" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/lua-doi-hanh-phuc/"><span>Lứa đôi hạnh phúc</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-28913" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/detox-lieu-phap-thanh-loc-co-the-phong-ngua-ung-thu/"><span>Detox – thanh lọc cơ thể, phòng ngừa ung thư</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/tham-my-cong-nghe-cao/"><span>Thẩm mỹ<br> <b>công nghệ cao</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28914" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-mun/"><span>Trị mụn Blue Light</span></a></li>
                                                        <li id="menu-item-28915" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-mun-thit/"><span>Trị mụn thịt</span></a></li>
                                                        <li id="menu-item-28916" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-nam/"><span>Trị nám</span></a></li>
                                                        <li id="menu-item-28917" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-tan-nhang/"><span>Trị tàn nhang</span></a></li>
                                                        <li id="menu-item-28918" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-seo-loi/"><span>Trị sẹo lồi</span></a></li>
                                                        <li id="menu-item-28919" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-seo-lom/"><span>Trị sẹo lõm</span></a></li>
                                                        <li id="menu-item-28920" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-vet-tham/"><span>Trị vết thâm</span></a></li>
                                                        <li id="menu-item-28921" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/triet-long-bang-laser-diode/"><span>Triệt lông bằng Laser Diode</span></a></li>
                                                        <li id="menu-item-28922" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dieu-tri-ran-da/"><span>Điều trị rạn da</span></a></li>
                                                        <li id="menu-item-28923" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dieu-tri-doi-moi-vung-mat/"><span>Điều trị đồi mồi vùng mặt</span></a></li>
                                                        <li id="menu-item-28924" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/dieu-tri-gian-mao-mach/"><span>Điều trị giãn mao mạch</span></a></li>
                                                        <li id="menu-item-28925" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/xoa-hinh-xam/"><span>Xóa hình xăm</span></a></li>
                                                        <li id="menu-item-28926" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/xoa-cham-bot-bam-sinh/"><span>Xóa chàm bớt bẩm sinh</span></a></li>
                                                        <li id="menu-item-28927" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tay-not-ruoi/"><span>Tẩy nốt ruồi</span></a></li>
                                                        <li id="menu-item-28928" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tre-hoa-da-cnc/"><span>Trẻ hóa da  bằng CNC</span></a></li>
                                                        <li id="menu-item-28929" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/nang-co-xoa-nhan-bang-thermage/"><span>Nâng cơ xóa nhăn bằng Hifu, Thermage</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-3609" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/lam-dep-bang-cong-nghe-te-bao-goc/"><span>Công nghệ<br><b> tế bào gốc</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28930" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/sieu-tre-hoa-da/"><span>Siêu trẻ hóa da bằng tế bào gốc P’cell</span></a></li>
                                                        <li id="menu-item-28931" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-nam-da-tan-nhang/"><span>Trị nám da – tàn nhang</span></a></li>
                                                        <li id="menu-item-28932" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/thu-nho-lo-chan-long/"><span>Thu nhỏ lỗ chân lông</span></a></li>
                                                        <li id="menu-item-28933" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/tri-seo-bang-cong-nghe-te-bao-goc/"><span>Trị sẹo bằng công nghệ tế bào gốc</span></a></li>
                                                        <li id="menu-item-51953" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/mat-na-cooling-mask-lam-diu-da/"><span>Mặt nạ Cooling Mask làm dịu da</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-1127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/dich-vu-khac/"><span>Dịch vụ<br><b> thẩm mỹ khác</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28934" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/waxing/"><span>Waxing tẩy lông</span></a></li>
                                                        <li id="menu-item-28935" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/xong-hoi-suc-bon/"><span>Xông hơi sục bồn</span></a></li>
                                                        <li id="menu-item-28936" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/nhom-dich-vu-cham-soc-tay/"><span>Nhóm dịch chăm sóc tay</span></a></li>
                                                        <li id="menu-item-28937" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/nhom-dich-vu-cham-soc-chan/"><span>Nhóm dịch vụ chăm sóc chân</span></a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-1128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-sub"><a title="nofollow" rel="nofollow" href="/my-pham-cao-cap/"><span>Mỹ phẩm<br><b> cao cấp</b></span></a>
                                                    <ul>
                                                        <li id="menu-item-28938" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/danh-cho-da-dau/"><span>Dành cho da dầu</span></a></li>
                                                        <li id="menu-item-28939" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/danh-cho-da-kho/"><span>Dành cho da khô</span></a></li>
                                                        <li id="menu-item-28940" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/danh-cho-da-lao-hoa/"><span>Dành cho da lão hóa</span></a></li>
                                                        <li id="menu-item-28941" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/danh-cho-da-nhay-cam/"><span>Dành cho da nhạy cảm</span></a></li>
                                                        <li id="menu-item-28942" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/chong-lao-hoa-chuyen-biet/"><span>Chống lão hóa chuyên biệt</span></a></li>
                                                        <li id="menu-item-28943" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/my-pham-cham-soc-da-toan-than/"><span>Mỹ phẩm chăm sóc toàn thân</span></a></li>
                                                        <li id="menu-item-28944" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/my-pham-lam-trang-da/"><span>Mỹ phẩm làm trắng da</span></a></li>
                                                        <li id="menu-item-28945" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/kem-chong-nang/"><span>Kem chống nắng</span></a></li>
                                                        <li id="menu-item-28946" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/cac-dong-my-pham/"><span>Các dòng sản phẩm</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>										</div><!-- /.navbar-collapse -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bg-Tet -->
        <!--link rel="stylesheet" href="assets/img/tet-2017/style.css">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tet-01">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tet-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 tet-2"></div>
            </div-->

        <!-- end header -->
        <div class="slider">
            <!-- meta slider -->
            <div style="max-width: 1920px; margin: 0 auto;" class="metaslider metaslider-flex metaslider-70 ml-slider nav-hidden">

                <div id="metaslider_container_70">
                    <div id="metaslider_70" class="flexslider">
                        <ul class="slides">
                            <li style="display: block; width: 100%;" class="slide-56460 ms-image"><a href="http://thammythucuc.vn/landing/phun-moi-6D/" target="_blank"><img src="wp-content/uploads/2018/12/1920x610.jpg" height="610" width="1920" alt="" class="slider-70 slide-56460" /></a></li>
                            <li style="display: none; width: 100%;" class="slide-56463 ms-image"><a href="http://thammythucuc.vn/landing/nang-co-tre-hoa-da-hifu-3d" target="_blank"><img src="wp-content/uploads/2018/12/HIFU-3D-1920X610.jpg" height="610" width="1920" alt="" class="slider-70 slide-56463" /></a></li>
                            <li style="display: none; width: 100%;" class="slide-56465 ms-image"><a href="http://thammythucuc.vn/landing/phun-moi-8d" target="_blank"><img src="wp-content/uploads/2018/12/MÔI-8D-1920x610.jpg" height="610" width="1920" alt="" class="slider-70 slide-56465" /></a></li>
                            <li style="display: none; width: 100%;" class="slide-54984 ms-image"><a href="http://thammythucuc.vn/landing/dieu-khac-long-may" target="_blank"><img src="wp-content/uploads/2018/09/1920x610dieukhaclongmay.png" height="610" width="1920" alt="" class="slider-70 slide-54984" /></a></li>
                            <li style="display: none; width: 100%;" class="slide-54986 ms-image"><a href="http://thammythucuc.vn/landing/nang-co-ultra-tissue-therapy" target="_blank"><img src="wp-content/uploads/2018/09/1920x610nangco.png" height="610" width="1920" alt="" class="slider-70 slide-54986" /></a></li>
                            <li style="display: none; width: 100%;" class="slide-54988 ms-image"><a href="http://thammythucuc.vn/landing/phun-moi-6D" target="_blank"><img src="wp-content/uploads/2018/09/Banner-web-Phun-Moi-1920x610.jpg" height="610" width="1920" alt="" class="slider-70 slide-54988" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// meta slider-->
        </div>
    </header>

	<div id="content" class="site-content">
