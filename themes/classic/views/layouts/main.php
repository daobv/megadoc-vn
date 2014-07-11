<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Book</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="generator" content="" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,500,600,700,700italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/idangerous.swiper.css"/>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mobile-1.3.1.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/idangerous.swiper-2.1.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jqm-inlinetabs.min.js"></script>
</head>
<body data-role="page">
<div id="wrapper">
    <div id="main">
        <!-- header -->
        <div id="header">
            <div class="header-row">
                <div class="header-logo"><a href="megadoc.vn" title=""><img alt="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" /></a></div>
                <div class="header-search-box">
                    <div class="search-box-container">
                        <div class="search-category">
                            <div class="search-category-container">
                                <span class="search-category-text">Danh sách</span>
                                <ul class="search-category-dropdown">
                                    <li>Tất cả</li>
                                    <li>Sách số</li>
                                    <li>Sách Audio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-box">
                            <input type="search" title="Search for:" name="s" value="" placeholder="Sách, bộ sưu tập, tài liệu ..." class="search-field"/>
                            <a class="search-submit"></a>
                        </div>
                    </div>
                </div>
                <div class="header-social"></div>
                <div class="header-person">
                    <div class="user-community person">
                        <a href="" title="">Cộng đồng</a>
                        <div class="count-notify">10</div>
                    </div>
                    <div class="user-login person">
                        <a href="">Đăng nhập</a>
                    </div>
                    <div class="user-register person">
                        <a href="">Đăng kí</a>
                    </div>
                </div>
            </div>
            <div id="header-menu">
                <div class="header-menu-container">
                    <ul class="main-nav">
                        <li class="active"><a href="" title="">Tài liệu</a></li>
                        <li>
                            <a href="" title="">Sách số</a>
                            <div class="nav-hover"></div>
                            <ul class="sub-menu">
                                <li><a href="google.com" title="">Văn học Việt Nam</a></li>
                                <li><a href="google.com" title="">Văn học Nước ngoài</a></li>
                                <li><a href="google.com" title="">Kinh doanh đầu tư</a></li>
                            </ul>
                        </li>
                        <li><a href="" title="">Sách nói</a></li>
                        <li><a href="" title="">Truyện tranh</a></li>
                        <li><a href="" title="">Bộ sưu tập</a></li>
                        <li><a href="" title="">Thành viên</a></li>
                    </ul>
                    <div class="tagline-upload">
                        <a class="tagline-text">Mỗi lần share, Mỗi lần bất ngờ</a>
                        <a class="button upload"><span>Tải lên</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ header -->
        <?php echo $content; ?>

        <!--/ body container -->
        <!-- footer container -->
        <div id="footer">
            <div class="footer-container">
                <div class="footer-row">
                    <div class="columns columns-left">
                        <div class="widget colum-four">
                            <div class="widget-container">
                                <div class="widget-text">
                                    <div class="widget-text-title">Giới thiệu</div>
                                    <div class="widget-text-body">
                                        <p><a>Megadoc là gì?</a></p>
                                        <p><a>Video giới thiệu</a></p>
                                        <p><a>Facebook</a></p>
                                        <p><a>Google+</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget colum-four">
                            <div class="widget-container">
                                <div class="widget-text">
                                    <div class="widget-text-title">Giúp đỡ</div>
                                    <div class="widget-text-body">
                                        <p><a>Câu hỏi thường gặp</a></p>
                                        <p><a>Điều khoản sử dụng</a></p>
                                        <p><a>Quy định chính sách bán tài liệu</a></p>
                                        <p><a>Hướng dẫn thanh toán</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget colum-four">
                            <div class="widget-container">
                                <div class="widget-text">
                                    <div class="widget-text-title">Hỗ trợ khách hàng</div>
                                    <div class="widget-text-body">
                                        <p><a>Email:info@abc.com</a></p>
                                        <p><a>Yahoo- Hỗ trợ</a></p>
                                        <p><a>Skyper-Hỗ trợ</a></p>
                                        <p><a>Hotline:0936.425.288</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget colum-four">
                            <div class="widget-container">
                                <div class="widget-text">
                                    <div class="widget-text-title">Document for you</div>
                                    <div class="widget-text-body">
                                        <p>Địa chỉ 91 Nguyễn tuân, thanh xuân, hà nội</p>
                                        <p>Số điện thoại:<span>+12324342</span></p>
                                        <p>Email:<a><span>document@gmail.com</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns columns-right">
                        <div class="widget">
                            <div class="widget-container">
                                <div class="widget-text">
                                    <a href="" title=""><img class="logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ footer container -->
    </div>
</div>

<script type="text/javascript">

</script>
</body>
</html>