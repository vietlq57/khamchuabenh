<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Khambenh_Theme
 */

get_header();
?>

    <div class="slider-main">
        <!-- START REVOLUTION SLIDER 4.3.6 fullwidth mode -->

        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:350px;">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:350px;height:350;">
                <ul>	<!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="/offline-clb-tim-con-yeu-so-7-29-12-2018.html"  >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/12/web.jpg"  alt="web"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/12/web-giang-sinh-2.jpg"  alt="web-giang-sinh-2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="/aff-cup-lua-do-nhat-dinh-se-dot-chay-vang-kim.html"  >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/12/DSC02427.jpg"  alt="DSC02427"  data-bgposition="center right" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="/offline-clb-tim-con-yeu-4-29-09-2018.html"  >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/05/banner-website-TCY-1.jpg"  alt="banner-website-TCY-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-link="/offline-clb-tim-con-yeu-3-28-07-2018.html"  >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/07/TCY-333-1.jpg"  alt="TCY-333-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" >
                        <!-- MAIN IMAGE -->
                        <img src="wp-content/uploads/2018/03/slider1.png"  alt="slider1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div>
        <script type="text/javascript">

            var tpj=jQuery;
            tpj.noConflict();
            var revapi1;

            tpj(document).ready(function() {

                if(tpj('#rev_slider_1_1').revolution == undefined)
                    revslider_showDoubleJqueryError('#rev_slider_1_1');
                else
                    revapi1 = tpj('#rev_slider_1_1').show().revolution(
                        {
                            dottedOverlay:"none",
                            delay:5000,
                            startwidth:960,
                            startheight:350,
                            hideThumbs:200,

                            thumbWidth:100,
                            thumbHeight:50,
                            thumbAmount:5,

                            navigationType:"none",
                            navigationArrows:"solo",
                            navigationStyle:"round",

                            touchenabled:"on",
                            onHoverStop:"on",

                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,

                            keyboardNavigation:"off",

                            navigationHAlign:"center",
                            navigationVAlign:"bottom",
                            navigationHOffset:0,
                            navigationVOffset:20,

                            soloArrowLeftHalign:"left",
                            soloArrowLeftValign:"center",
                            soloArrowLeftHOffset:20,
                            soloArrowLeftVOffset:0,

                            soloArrowRightHalign:"right",
                            soloArrowRightValign:"center",
                            soloArrowRightHOffset:20,
                            soloArrowRightVOffset:0,

                            shadow:0,
                            fullWidth:"on",
                            fullScreen:"off",

                            spinner:"spinner0",

                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,


                            shuffle:"off",

                            autoHeight:"off",
                            forceFullWidth:"off",


                            hideTimerBar:"on",
                            hideThumbsOnMobile:"off",
                            hideNavDelayOnMobile:1500,						hideBulletsOnMobile:"off",
                            hideArrowsOnMobile:"off",
                            hideThumbsUnderResolution:0,

                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            startWithSlide:0,
                            videoJsPath:"/wp-content/plugins/revslider/rs-plugin/videojs/",
                            fullScreenOffsetContainer: ""
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->		<div class="list-menu-featured">
            <a class="addon-button addon-button1 " href="/doi-ngu-chuyen-mon">
                <img src="wp-content/uploads/2016/02/addon1.png" />
                <p>Đội ngũ chuyên môn</p>
            </a>
            <a class="addon-button addon-button2 " href="/bang-gia-dich-vu">
                <img src="wp-content/uploads/2016/02/addon2.png" />
                <p>Bảng giá dịch vụ</p>
            </a>
            <a class="addon-button addon-button3 " href="/ket-qua-xet-nghiem">
                <img src="wp-content/uploads/2016/02/addon3.png" />
                <p>Kết quả xét nghiệm</p>
            </a>
            <a class="addon-button addon-button4 " href="/dat-lich-kham">
                <img src="wp-content/uploads/2016/02/addon4.png" />
                <p>Đặt lịch khám</p>
            </a>
            <a class="addon-button addon-button5 " href="/lien-he">
                <img src="wp-content/uploads/2016/02/addon5.png" />
                <p>Liên hệ</p>
            </a>
            <a class="addon-button addon-button6 last-child" href="/noi-ve-chung-toi">
                <img src="wp-content/uploads/2016/02/addon6.png" />
                <p>Nói về chúng tôi</p>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row section-home1">
        <div class="col-sm-5">
            <div class="left-element">
                <div class="col-md-6">
                    <div class="top-article">
                        <h2 class="title-1"><a href="/danh-muc/nam-hoc-va-gioi-tinh">Nam học và giới tính</a></h2>
                    </div>
                    <ul>
                        <li><a href="/893.html">Tổng quan về Nam khoa</a></li>
                        <li><a href="/804.html">Mãn dục Nam giới</a></li>
                        <li><a href="/roi-loan-cuong-duong.html">Rối loạn cương dương</a></li>
                        <li><a href="/xuat-tinh-som.html">Xuất tinh sớm</a></li>
                        <li><a href="/gian-tinh-mach-tinh.html">Giãn tĩnh mạch tinh</a></li>
                        <li><a href="/hep-bao-quy-dau.html">Hẹp bao quy đầu</a></li>
                        <li><a href="/roi-loan-tinh-duc-va-dieu-tri.html">Rối loạn tình dục và điều trị</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="top-article">
                        <h2 class="title-1"><a href="/danh-muc/hiem-muon">Hiếm muộn</a></h2>
                    </div>
                    <ul>
                        <li><a href="/tong-quan-ve-hiem-muon-2.html">Tổng quan về Hiếm muộn</a></li>
                        <li><a href="/thu-tinh-nhan-tao.html">Thụ tinh nhân tạo (IUI)</a></li>
                        <li><a href="/thu-tinh-ong-nghiem.html">Thụ tinh trong ống nghiệm</a></li>
                        <li><a href="/vo-sinh-do-khong-tinh-trung.html">Vô sinh do không tinh trùng</a></li>
                        <li><a href="/vo-sinh-nu-do-tac-voi-trung.html">Vô sinh Nữ do vòi trứng</a></li>
                        <li><a href="/suy-buong-trung.html">Suy buồng trứng</a></li>
                        <li><a href="/cac-nguyen-nhan-gay-say-thai.html">Nguyên nhân gây sảy thai</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6 text-justify">
                    <div class="top-article">
                        <h2 class="title-1"><a href="/hoi-dap">Hỏi đáp</a></h2>
                    </div>
                    <article>
                        <div class="title-article"><img src="wp-content/themes/mixcolors/images/ques-icon.png">Em đã làm IVF ở bệnh viện và hiện tại đang ở tuần 30 của thai kì. Các bác sĩ cho e hỏi làm IVF mà thai một thì sinh thường hay mổ ạ? Hay là IVF ai cũng sinh mổ ạ? (Minh Trang) <span>()</span></div>
                        <div class="excerpt-article"><span>TRẢ LỜI:</span> Chào bạn,Mọi người thường nói thai do IVF là thai quý, thai hiếm vì khó khăn lắm các mẹ mới có được con. Tuy nhiên, việc sinh thường hay sinh mổ không phụ thuộc vào phương pháp thụ tinh mà hoàn toàn phụ thuộc vào tình trạng thai và sức&hellip;</div>
                        <div class="text-right"><a href="/hoi-dap" class="more-all">Câu hỏi khác</a></div>
                    </article>
                </div>
                <div class="col-sm-6">
                    <div class="top-article">
                        <h5 class="title-1"><a href="/goc-tri-an">Góc tri ân</a></h5>
                    </div>
                    <ul class="slider-feedback">
                        <li>
                            <a href="/tri-an/nguyen-cat-tien"><img width="350" height="187" src="wp-content/uploads/2018/12/48386209_604527329965238_5361780233944956928_n-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="48386209_604527329965238_5361780233944956928_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Ba: Nguyễn Bá Thọ Mẹ: Dương Thị Trâm Con: Nguyễn Cát Tiên Ngày chuyển phôi: 19/12/2017 Ngày sinh: 30/8/2018  Địa chỉ: Tân Mai, Hoàng Mai, Hà Nội Sau 5 năm tìm kiếm, ba mẹ con biết đến Bệnh viện Nam học và Hiếm Muộn Hà Nội. Con đến với ba&hellip;</i>
                                <p>Nguyễn Cát Tiên</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/pham-manh-quan"><img width="350" height="187" src="wp-content/uploads/2018/12/28168699_956683054484870_8111353207158182695_n-1-e1545018719624-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="28168699_956683054484870_8111353207158182695_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Bố: Phạm Xuân Cương Mẹ: Triệu Hồng Mây Con trai: Phạm Mạnh Quân Con gái: Phạm Hồng Anh Ngày chuyển phôi: 22/5/2017 Ngày sinh: 22/01/2018 Quê quán: Thành phố Hạ Long, Quảng Ninh Để có được niềm hạnh phúc lớn lao như hôm nay, gia đình mình vô cùng cảm&hellip;</i>
                                <p>Phạm Mạnh Quân &#8211; Phạm Hồng Anh</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/hoang-trung-hai-hoang-hai-yen"><img width="350" height="187" src="wp-content/uploads/2018/12/48367172_559820127814396_6892874665526558720_n-1-e1545018353345-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="48367172_559820127814396_6892874665526558720_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Mẹ: Quàng Thị Phượng Bố: Hoàng Tài Tuyển Con: Hoàng Trung Hải Hoàng Hải Yến Ngày chuyển phôi: 15/9/2017 Ngày sinh: 11/5/2018. Quê quán: Sôp Cộp, Sơn La Hai vợ chồng em cảm ơn bệnh viện Nam học và Hiếm muộn Hà nội đã mang niềm hạnh phúc đến cho&hellip;</i>
                                <p>Hoàng Trung Hải &#8211; Hoàng Hải Yến</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/nguyen-trung-hieu-nguyen-trung-quan-nguyen-trung-kien"><img width="350" height="187" src="wp-content/uploads/2018/12/48045817_905809536277739_2479267569513529344_n-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="48045817_905809536277739_2479267569513529344_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Mẹ: Lê Thị Thủy Bố: Nguyễn Văn Chung. Con: Nguyễn Trung Hiếu Nguyễn Trung Quân Nguyễn Trung Kiên Quê: Ứng Hòa, Hà Nội Gia đình không biết nói gì hơn là cảm ơn toàn thể y bác sĩ Bệnh viện Nam học và Hiếm muộn Hà Nội, đặc biệt cảm&hellip;</i>
                                <p>Nguyễn Trung Hiếu &#8211; Nguyễn Trung Quân &#8211; Nguyễn Trung Kiên</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/tran-ngoc-quyen-tran-anh-quan"><img width="350" height="187" src="wp-content/uploads/2018/12/48046795_441916896340391_4248784921415385088_n-e1544501897757-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="48046795_441916896340391_4248784921415385088_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Bố: Trần Văn Thìn Mẹ: Nguyễn Thị Dung Con: Trần Ngọc Quyên Trần Anh Quân Ngày chuyển phôi: 07/12/2017 Ngày sinh: 19/08/2018 Quê: Đông Anh, Hà Nội Chân thành cảm ơn đội ngũ y bác sĩ của bệnh viện đã giúp gia đình em có thêm 2 thành viên mới,&hellip;</i>
                                <p>Trần Ngọc Quyên &#8211; Trần Anh Quân</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/nguyen-thanh-cuc-nguyen-thanh-nhi"><img width="350" height="187" src="wp-content/uploads/2018/12/47579807_375827849654551_3728419109172412416_n-e1544258107932-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="47579807_375827849654551_3728419109172412416_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Bố: Nguyễn Thanh Hà Mẹ: Nguyễn Thị Thuỷ Thành Con: Nguyễn Thanh Cúc (Bầu), Nguyễn Thanh Nhi (Bí), Sinh: Ngày 14/9/2018 Quê quán: thành phố Lào Cai, tỉnh Lào Cai. Gia đình thật sự cám ơn đội ngũ bác sĩ, đặc biệt là bác sĩ Hiền, và các nhân viên&hellip;</i>
                                <p>Nguyễn Thanh Cúc &#8211; Nguyễn Thanh Nhi</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/mai-thao-nguyen-mai-thanh-phong"><img width="350" height="187" src="wp-content/uploads/2018/12/47680152_1210032265818703_5670398257210064896_n-e1544256456818-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="47680152_1210032265818703_5670398257210064896_n" /></a>
                            <div class="testimonial-fearture">
                                <i>Bố: Mai Văn Nguyện Mẹ: Nguyễn Thị Phương Luy Con gái: Mai Thảo Nguyên Con trai: Mai Thanh Phong Ngày chuyển phôi: 12/12/2017 Ngày sinh: 21/06/2018 Cám ơn bệnh viện, cảm ơn tất cả các y bác sĩ bệnh viện đã đem niềm vui, niềm hạnh phúc tới gia đình.&hellip;</i>
                                <p>Mai Thảo Nguyên &#8211; Mai Thanh Phong</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/pham-thi-hai-yen"><img width="350" height="187" src="wp-content/uploads/2018/06/Hải-Yến-Phạm-Thị-01.05-e1544257033407-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="Hải Yến Phạm Thị 01.05" /></a>
                            <div class="testimonial-fearture">
                                <i>Gia đình em xin gửi lời cảm ơn chân thành đến toàn thể y bác sĩ Bệnh viện Nam học và Hiếm muộn Hà Nội. Đặc biệt là Bs.Hưởng; Bs.Kiên và Bs.Trung. Cảm ơn vì đã tìm được con yêu giúp vợ chồng em . Cháu được 3 tháng 15&hellip;</i>
                                <p>Phạm Thị Hải Yến</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/mong-ji-3"><img width="350" height="187" src="wp-content/uploads/2018/06/Mong-Ji-8.06-350x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="Mong Ji 8.06" /></a>
                            <div class="testimonial-fearture">
                                <i>Cảm ơn Bệnh viện Nam học và Hiếm muộn Hà Nội đã mang hạnh phúc đến gia đình em .Nay gà con nhà em vừa tròn 1 tuổi. (08.06.2018)</i>
                                <p>Mong Ji</p>
                            </div>
                        </li>
                        <li>
                            <a href="/tri-an/luong-thi-phuong"><img width="344" height="187" src="wp-content/uploads/2018/06/web-344x187.jpg" class="attachment-thumbnail-feedback size-thumbnail-feedback wp-post-image" alt="web" /></a>
                            <div class="testimonial-fearture">
                                <i>Cuối cùng ngày 8/6/2018 vào 22h3&#8242; bé Vi Lương Bảo Ngân và 22h4&#8242; bé Vi Lương Bảo Hà đã cất tiếng khóc chào đời sau khi chuyển phôi tươi ngày 12/10/2017. Gia đình tôi chân thành cảm ơn toàn thể đội ngũ y bác sỹ và nhân viên Bệnh viện&hellip;</i>
                                <p>Lương Thị Phượng</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row section-home2 section-custom">
        <div class="col-sm-9 ads">
            <a href="https://www.youtube.com/watch?v=Z2KPgBdPxBU"><img src="wp-content/uploads/2016/02/2-t.jpg"></a>
        </div>
        <div class="col-sm-3">
            <a id="grad" class="grad-home" href="https://www.youtube.com/watch?v=2hIuE0yJUfM" style="padding: 20px 11px 27px; background:url('wp-content/uploads/2018/02/Homepage_banner_1170x510_v2a-e1517542640896.jpg') no-repeat center center;">
                <img src="wp-content/themes/mixcolors/images/ques2-icon.png" style="float: left; margin-right: 10px;"><span><b>CHUYÊN MỤC <br>AUDIO SỨC KHỎE</b></span>
            </a>
        </div>
    </div>
    <div class="row section-home3 section-custom">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="top-article">
                        <h2 class="title-1"><a href="/danh-muc/tin-tuc/tin-chuyen-nganh">Tin chuyên ngành</a></h2>
                    </div>
                    <div class="fearture-art">
                        <a href="/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html"><img width="380" height="205" src="wp-content/uploads/2018/12/2018-12-28_9-27-28-380x205.png" class="attachment-thumbnail-home size-thumbnail-home wp-post-image" alt="2018-12-28_9-27-28" /></a>
                        <div class="content-box">
                            <h5><a href="/chu-quan-khi-vung-kin-con-lon-bat-thuong-2-nam-sau-cha-me-voi-dua-be-nhap-vien.html">Chủ quan khi &#8220;vùng kín&#8221; con lớn bất thường, 2 năm sau cha mẹ vội đưa bé nhập viện</a></h5>
                            <p class="excerpt">Các bé trai rất dễ gặp những dị tật về ống bẹn gây ảnh hưởng đến khả năng sinh sản và&hellip;</p>
                        </div>
                    </div>
                    <ul class="list-new-home">
                        <li>- <a href="/lao-cai-cac-phuong-phap-va-ky-thuat-tien-bo-trong-dieu-tri-nam-khoa-va-vo-sinh-hiem-muon.html">Phương hướng mới trong điều trị nam khoa, hiếm muộn (Hội thảo Lào Cai)</a></li>
                        <li>- <a href="/ky-thuat-moi-trong-dieu-tri-vo-tinh.html">Kỹ thuật mới trong điều trị vô tinh!</a></li>
                        <li>- <a href="/hoi-thao-cac-phuong-phap-ky-thuat-tien-bo-trong-dieu-tri-nam-khoa-va-vo-sinh-hiem-muon.html">Hội thảo các phương pháp kỹ thuật tiến bộ trong điều trị nam khoa và vô sinh hiếm muộn</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="top-article">
                        <h2 class="title-1"><a href="/danh-muc/tin-tuc/tin-noi-bo">Tin nội bộ</a></h2>
                    </div>
                    <div class="fearture-art">
                        <a href="/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html"><img width="380" height="205" src="wp-content/uploads/2018/12/chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349-380x205.jpg" class="attachment-thumbnail-home size-thumbnail-home wp-post-image" alt="chong-bi-tinh-trung-di-dang-100-vo-suy-buong-trung-hang-ngay-miet-mai-ban-buoi-de-tim-con-2-1545901721-556-width600height349" /></a>
                        <div class="content-box">
                            <h5><a href="/bi-che-gieu-to-beo-ma-mai-khong-chua-cap-doi-ha-noi-miet-mai-ban-buoi-quyet-tim-con.html">Bị chế giễu &#8220;to béo mà mãi không chửa&#8221;, cặp đôi Hà Nội miệt mài bán bưởi quyết tìm con</a></h5>
                            <p class="excerpt">4 lần hỗ trợ sinh sản không thành công, những tưởng phải đi xin trứng vì bị suy buồng trứng, chồng&hellip;</p>
                        </div>
                    </div>
                    <ul class="list-new-home">
                        <li>- <a href="/offline-clb-tim-con-yeu-so-7-29-12-2018.html">Offline CLB Tìm con yêu số 7 (29.12.2018)</a></li>
                        <li>- <a href="/thong-bao-lich-lam-viec-tet-duong-lich-2.html">Thông báo lịch làm việc Tết Dương Lịch</a></li>
                        <li>- <a href="/aff-cup-lua-do-nhat-dinh-se-dot-chay-vang-kim.html">AFF Cup: &#8220;Lửa đỏ nhất định sẽ ĐỐT CHÁY vàng kim&#8221;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 fanpage">
            <div class="top-article">
                <h2 class="title-1">Facebook</h2>
            </div>
            <div class="fb-page" data-href="https://www.facebook.com/afhanoi/?ref=hl" data-tabs="timeline" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
            <p><span>Lượt truy cập:</span><strong>1.986.567</strong></p>
            <p><span>Số người trực tuyến:</span><strong>57</strong></p>
            <a id="grad" class="text-center" href="/dang-nhap" >
                Thành viên đăng nhập
            </a>
            <div class="newsletter">
                <div class="top-article">
                    <h2 class="title-1">Đăng ký nhận bản tin mới nhất</h2>
                    <form action="" method="POST" id="newsletter">
                        <p>
                            <input name="news_email" placeholder="Email" type="text" class="form-control" required="required" oninvalid="this.setCustomValidity('Vui lòng nhập email')" oninput="setCustomValidity('')" />
                        </p>
                        <p>
                            <input name="news_phone" placeholder="Số điện thoại" type="text" class="form-control" required="required" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')" oninput="setCustomValidity('')" />
                        </p>
                        <p>
                            <input type="submit" name="submit_newsletter" value="Đăng ký nhận tin" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row section-home2">
        <div class="col-sm-12">
            <a class="map-click" href="javascript:void(0)">Tìm chúng tôi trên bản đồ</a>
        </div>
        <div class="col-sm-12 map-click-element">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2394122932387!2d105.86402041445388!3d20.983038094714587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1876ece2eb%3A0x902b5095d8f38382!2zQuG7h25oIHZp4buHbiBjaHV5w6puIGtob2EgbmFtIGjhu41jIHbDoCBoaeG6v20gbXXhu5luIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1455940637870" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    </div>
    <div class="container hr"></div>

<?php
get_sidebar();
get_footer();
