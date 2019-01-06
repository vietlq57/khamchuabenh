<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Khambenh_Theme
 */

?>

<div class="row">
    <div class="col-sm-9">
        <div class="main-article">
            <div class="title-detail">
                <h2>
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    ?>
                </h2>
                <span class="clock-icon">
                    <?php echo get_the_date('j/m/Y'); ?>
                </span>
            </div>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
            <div class="tags">

            </div>
        </div>
        <div class="social-bottom">
            <div class="addtoany_shortcode"><div class="a2a_kit a2a_kit_size_32 addtoany_list a2a_target" id="" style="line-height: 32px;"><a class="a2a_button_facebook_like addtoany_special_service" data-href="https://afhanoi.com/giu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html" style="width: 90px;"><div class="fb-like fb_iframe_widget" data-href="https://afhanoi.com/giu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html" data-width="90" data-layout="button_count" data-ref="addtoany" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=0&amp;container_width=86&amp;href=https%3A%2F%2Fafhanoi.com%2Fgiu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html&amp;layout=button_count&amp;locale=vi_VN&amp;ref=addtoany&amp;sdk=joey&amp;width=90"><span style="vertical-align: bottom; width: 68px; height: 20px;"><iframe name="f26fe04e27bc6c" width="90px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v3.1/plugins/like.php?app_id=0&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Dfe38f6beaf18c%26domain%3Dafhanoi.com%26origin%3Dhttps%253A%252F%252Fafhanoi.com%252Ff2006b4d8933b88%26relation%3Dparent.parent&amp;container_width=86&amp;href=https%3A%2F%2Fafhanoi.com%2Fgiu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html&amp;layout=button_count&amp;locale=vi_VN&amp;ref=addtoany&amp;sdk=joey&amp;width=90" style="border: none; visibility: visible; width: 68px; height: 20px;" class=""></iframe></span></div></a><a class="a2a_button_twitter_tweet addtoany_special_service" data-url="https://afhanoi.com/giu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html" data-text="Giữ sạch “cậu nhỏ” để tránh viêm bao quy đầu"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.8f9047c344e062fa7c7ada2fa8332f75.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fafhanoi.com%2Fgiu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html&amp;related=AddToAny%2Cmicropat&amp;size=m&amp;text=Gi%E1%BB%AF%20s%E1%BA%A1ch%20%E2%80%9Cc%E1%BA%ADu%20nh%E1%BB%8F%E2%80%9D%20%C4%91%E1%BB%83%20tr%C3%A1nh%20vi%C3%AAm%20bao%20quy%20%C4%91%E1%BA%A7u&amp;time=1546764553340&amp;type=share&amp;url=https%3A%2F%2Fafhanoi.com%2Fgiu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html" data-url="https://afhanoi.com/giu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html"></iframe></a><a class="a2a_button_google_plusone addtoany_special_service" data-href="https://afhanoi.com/giu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 32px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1546764550134" name="I0_1546764550134" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;annotation=bubble&amp;hl=en-US&amp;origin=https%3A%2F%2Fafhanoi.com&amp;url=https%3A%2F%2Fafhanoi.com%2Fgiu-sach-cau-nho-de-tranh-viem-bao-quy-dau.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.iLSi3iIqsaY.O%2Fam%3DQQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCMwCBmNRjzxYBl6u8_tTnbkVm1jFg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1546764550134&amp;_gfid=I0_1546764550134&amp;parent=https%3A%2F%2Fafhanoi.com&amp;pfname=&amp;rpctoken=31674231" data-gapiattached="true" title="G+"></iframe></div></a>
                    <script type="text/javascript"><!--
                        if(wpa2a)wpa2a.script_load();
                        //--></script>
                </div></div>			</div>
        <h6 class="title-list" style="font-weight: bold;">TIN TỨC KHÁC</h6>
        <div class="more-question-wrapper">
            <div class="list-art">
                <a href="https://afhanoi.com/lich-nghi-tet-nguyen-dan-ky-hoi-2019.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2019/01/cmnm-92x62.jpg" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="cmnm"></a>
                <h5><a href="https://afhanoi.com/lich-nghi-tet-nguyen-dan-ky-hoi-2019.html">Lịch nghỉ Tết Nguyên Đán Kỷ Hợi 2019</a></h5>
                <span class="clock-icon">05/01/2019</span>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349-92x62.jpg" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349"></a>
                <h5><a href="https://afhanoi.com/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html">Bị chế giễu “to béo mà mãi không chửa”, cặp đôi Hà Nội miệt mài bán bưởi quyết tìm con</a></h5>
                <span class="clock-icon">28/12/2018</span>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/2018-12-28_9-27-28-92x62.png" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="2018-12-28_9-27-28"></a>
                <h5><a href="https://afhanoi.com/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html">Chủ quan khi “vùng kín” con lớn bất thường, 2 năm sau cha mẹ vội đưa bé nhập viện</a></h5>
                <span class="clock-icon">26/12/2018</span>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/offline-clb-tim-con-yeu-so-7-29-12-2018.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/cba-92x62.png" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="cba"></a>
                <h5><a href="https://afhanoi.com/offline-clb-tim-con-yeu-so-7-29-12-2018.html">Offline CLB Tìm con yêu số 7 (29.12.2018)</a></h5>
                <span class="clock-icon">25/12/2018</span>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <div class="col-sm-3">
        <div class="widget">
            <a href="https://afhanoi.com/doi-ngu-chuyen-mon" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/doctor-icon.png">
                <p>Đội ngũ chuyên môn</p>
            </a>
            <a href="https://afhanoi.com/bang-gia-dich-vu" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/tag-icon.png">
                <p>Bảng giá dịch vụ</p>
            </a>
            <a href="https://afhanoi.com/ket-qua-xet-nghiem" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/song-icon.png">
                <p>Kết quả xét nghiệm</p>
            </a>
            <a href="https://afhanoi.com/dat-lich-kham" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/list-icon.png">
                <p>Đặt lịch khám</p>
            </a>
            <a href="https://afhanoi.com/lien-he" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/tel2-icon.png">
                <p>Liên hệ</p>
            </a>
            <a href="https://afhanoi.com/noi-ve-chung-toi" class="list-type text-center">
                <img src="https://afhanoi.com/wp-content/uploads/2016/02/list-icon2.png">
                <p>Nói về chúng tôi</p>
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="widget clearfix">
            <div class="top-article"><h2 class="title-1"><span>Đọc nhiều nhất</span></h2></div>
            <div class="fearture-art">
                <a href="https://afhanoi.com/lich-nghi-tet-nguyen-dan-ky-hoi-2019.html"><img width="248" height="157" src="https://afhanoi.com/wp-content/uploads/2019/01/cmnm-248x157.jpg" class="attachment-thumbnail-sidebar size-thumbnail-sidebar wp-post-image" alt="cmnm"></a>
                <h5><a href="https://afhanoi.com/lich-nghi-tet-nguyen-dan-ky-hoi-2019.html">Lịch nghỉ Tết Nguyên Đán Kỷ Hợi 2019</a></h5>
                <p class="excerpt">THÔNG BÁO (Lịch làm việc và nghỉ lễ Tết Nguyên Đán Kỷ Hợi 2019) Kính gửi Quý Khách hàng, Bệnh viện…</p>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349-92x62.jpg" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349"></a>
                <h5><a href="https://afhanoi.com/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html">Bị chế giễu “to béo mà mãi không chửa”, cặp đôi Hà Nội miệt mài bán bưởi quyết tìm con</a></h5>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/2018-12-28_9-27-28-92x62.png" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="2018-12-28_9-27-28"></a>
                <h5><a href="https://afhanoi.com/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html">Chủ quan khi “vùng kín” con lớn bất thường, 2 năm sau cha mẹ vội đưa bé nhập viện</a></h5>
            </div>
            <div class="list-art">
                <a href="https://afhanoi.com/offline-clb-tim-con-yeu-so-7-29-12-2018.html"><img width="92" height="62" src="https://afhanoi.com/wp-content/uploads/2018/12/cba-92x62.png" class="attachment-thumbnail-small size-thumbnail-small wp-post-image" alt="cba"></a>
                <h5><a href="https://afhanoi.com/offline-clb-tim-con-yeu-so-7-29-12-2018.html">Offline CLB Tìm con yêu số 7 (29.12.2018)</a></h5>
            </div>
        </div>
        <div class="widget">
            <a id="grad" class="grad-home" href="https://www.youtube.com/watch?v=2hIuE0yJUfM" style="padding: 20px 11px 27px; background:url('https://afhanoi.com/wp-content/uploads/2018/02/Homepage_banner_1170x510_v2a-e1517542640896.jpg') no-repeat center center;">
                <img src="https://afhanoi.com/wp-content/themes/mixcolors/images/ques2-icon.png" style="float: left; margin-right: 10px;"><span><b>CHUYÊN MỤC <br>AUDIO SỨC KHỎE</b></span>
            </a>
        </div>
        <div class="widget fanpage">
            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/afhanoi/?ref=hl" data-tabs="timeline" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=0&amp;container_width=259&amp;height=130&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fafhanoi%2F%3Fref%3Dhl&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 259px; height: 130px;"><iframe name="f14df249982f0ac" width="1000px" height="130px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v3.1/plugins/page.php?adapt_container_width=true&amp;app_id=0&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Df3ee0542c4d6434%26domain%3Dafhanoi.com%26origin%3Dhttps%253A%252F%252Fafhanoi.com%252Ff2006b4d8933b88%26relation%3Dparent.parent&amp;container_width=259&amp;height=130&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fafhanoi%2F%3Fref%3Dhl&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 259px; height: 130px;" class=""></iframe></span></div>
            <p><span>Lượt truy cập:</span><strong>1.990.657</strong></p>
            <p><span>Số người trực tuyến:</span><strong>67</strong></p>
            <a id="grad" class="text-center" href="https://afhanoi.com/dang-nhap">
                Thành viên đăng nhập
            </a>
            <div class="newsletter">
                <div class="top-article">
                    <h2 class="title-1">Đăng ký nhận bản tin mới nhất</h2>
                    <form action="" method="POST" id="newsletter">
                        <p>
                            <input name="news_email" placeholder="Email" type="text" class="form-control" required="required" oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="setCustomValidity('')">
                        </p>
                        <p>
                            <input name="news_phone" placeholder="Số điện thoại" type="text" class="form-control" required="required" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')" oninput="setCustomValidity('')">
                        </p>
                        <p>
                            <input type="submit" name="submit_newsletter" value="Đăng ký nhận tin">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
