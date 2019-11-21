<!DOCTYPE html>
<html lang="vi">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Pridi|Roboto" rel="stylesheet">
    <link href={{ asset('css/styleweb.css') }} rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/libs/jquery-3.4.1.min.js') }}"></script>
</head>
<body>
<div id="ah-wrapper">
    <header class="ah-menu-top">
        <div id="ah-menu" class="ah-clear-both">
            <div class="top">
                <div class="logo-container">
                    <div id="logo"></div>
                </div>
                <div id="ah-cat">
                    <div class="ah-menu ah-clear-both">
                        <ul class="nav">
                            <li class="ah-text-logo ah-float-left"><a href="/">ANIME<span class="ah-tls">HAY</span></a>
                            </li>
                            <li class="ah-lsm ah-float-right" onClick="menuDropdown(this)">
                                <a class="non-routed" href="javascript:void(0);">Danh mục</a>
                                <i class="non-routed fa fa-align-justify"></i>
                            </li>
                            <ul class="ah-ulsm">
                                <li class="ah-lsm ah-drop-ft" onClick="menuDropdown(this)">
                                    <a class="non-routed" href="/the-loai/phim-anime">Anime</a>
                                    <i class="fa fa-chevron-down ah-rtnav" aria-hidden="true"></i>
                                </li>
                                <ul class="ah-ulsm">
                                    <li><a href="/the-loai/phim-anime/hanh-dong" title="Hành động">Hành động</a></li>
                                    <li><a href="/the-loai/phim-anime/tinh-cam" title="Tình Cảm">Tình Cảm</a></li>
                                    <li><a href="/the-loai/phim-anime/lich-su" title="Lịch sử">Lịch sử</a></li>
                                    <li><a href="/the-loai/phim-anime/hai-huoc" title="Hài Hước">Hài Hước</a></li>
                                    <li><a href="/the-loai/phim-anime/vien-tuong" title="Viễn Tưởng">Viễn Tưởng</a></li>
                                    <li><a href="/the-loai/phim-anime/vo-thuat" title="Võ Thuật">Võ Thuật</a></li>
                                    <li><a href="/the-loai/phim-anime/gia-tuong" title="Giả tưởng">Giả tưởng</a></li>
                                    <li><a href="/the-loai/phim-anime/kinh-di" title="Kinh Dị">Kinh Dị</a></li>
                                    <li><a href="/the-loai/phim-anime/phieu-luu" title="Phiêu Lưu">Phiêu Lưu</a></li>
                                    <li><a href="/the-loai/phim-anime/hoc-duong" title="Học Đường">Học Đường</a></li>
                                    <li><a href="/the-loai/phim-anime/doi-thuong" title="Đời Thường">Đời Thường</a></li>
                                    <li><a href="/the-loai/phim-anime/sieu-nhien" title="Siêu nhiên">Siêu nhiên</a></li>
                                    <li><a href="/the-loai/phim-anime/harem" title="Harem">Harem</a></li>
                                    <li><a href="/the-loai/phim-anime/ecchi" title="Ecchi">Ecchi</a></li>
                                    <li><a href="/the-loai/phim-anime/shounen" title="Shounen">Shounen</a></li>
                                    <li><a href="/the-loai/phim-anime/phep-thuat" title="Phép Thuật">Phép Thuật</a></li>
                                    <li><a href="/the-loai/phim-anime/tro-choi" title="Trò chơi">Trò chơi</a></li>
                                    <li><a href="/the-loai/phim-anime/tham-tu" title="Thám Tử">Thám Tử</a></li>
                                    <li><a href="/the-loai/phim-anime/mystery" title="Mystery">Mystery</a></li>
                                    <li><a href="/the-loai/phim-anime/drama" title="Drama">Drama</a></li>
                                    <li><a href="/the-loai/phim-anime/seinen" title="Seinen">Seinen</a></li>
                                    <li><a href="/the-loai/phim-anime/ac-quy" title="Ác quỷ">Ác quỷ</a></li>
                                    <li><a href="/the-loai/phim-anime/ma-ca-rong" title="Ma cà rồng">Ma cà rồng</a></li>
                                    <li><a href="/the-loai/phim-anime/psychological" title="Psychological">Psychological</a></li>
                                    <li><a href="/the-loai/phim-anime/shoujo" title="Shoujo">Shoujo</a></li>
                                    <li><a href="/the-loai/phim-anime/shounen-ai" title="Shounen Ai">Shounen Ai</a></li>
                                    <li><a href="/the-loai/phim-anime/tragedy" title="Tragedy">Tragedy</a></li>
                                    <li><a href="/the-loai/phim-anime/mecha" title="Mecha">Mecha</a></li>
                                    <li><a href="/the-loai/phim-anime/sieu-nang-luc" title="Siêu năng lực">Siêu năng lực</a></li>
                                    <li><a href="/the-loai/phim-anime/parody" title="Parody">Parody</a></li>
                                    <li><a href="/the-loai/phim-anime/quan-doi" title="Quân đội">Quân đội</a></li>
                                    <li><a href="/the-loai/phim-anime/live-action" title="Live Action">Live Action</a></li>
                                    <li><a href="/the-loai/phim-anime/shoujo-ai" title="Shoujo AI">Shoujo AI</a></li>
                                    <li><a href="/the-loai/phim-anime/josei" title="Josei">Josei</a></li>
                                    <li><a href="/the-loai/phim-anime/the-thao" title="Thể Thao">Thể Thao</a></li>
                                    <li><a href="/the-loai/phim-anime/am-nhac" title="Âm nhạc">Âm nhạc</a></li>
                                    <li><a href="/the-loai/phim-anime/samurai" title="Samurai">Samurai</a></li>
                                    <li><a href="/the-loai/phim-anime/tokusatsu" title="Tokusatsu">Tokusatsu</a></li>
                                    <li><a href="/the-loai/phim-anime/space" title="Space">Space</a></li>
                                    <li><a href="/the-loai/phim-anime/thriller" title="Thriller">Thriller</a></li>
                                </ul>

                                <li class="ah-lsm ah-drop-ft" onClick="menuDropdown(this)">
                                    <a class="non-routed" href="/the-loai/hoat-hinh-trung-quoc">CN Animation</a>
                                    <i class="fa fa-chevron-down ah-rtnav" aria-hidden="true"></i>
                                </li>
                                <ul class="ah-ulsm">
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/tien-hiep" title="Tiên Hiệp">Tiên Hiệp</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/kiem-hiep" title="Kiếm Hiệp">Kiếm Hiệp</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/xuyen-khong" title="Xuyên Không">Xuyên Không</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/trung-sinh" title="Trùng Sinh">Trùng Sinh</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/huyen-ao" title="Huyền Ảo">Huyền Ảo</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/ngon-tinh" title="Ngôn Tình">Ngôn Tình</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/di-gioi" title="Dị Giới">Dị Giới</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/khoa-huyen" title="Khoa Huyễn">Khoa Huyễn</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/hai-huoc-cn" title="Hài Hước[CN]">Hài Hước[CN]</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/huyen-huyen" title="Huyền Huyễn">Huyền Huyễn</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/dam-my" title="Đam Mỹ">Đam Mỹ</a></li>
                                    <li><a href="/the-loai/hoat-hinh-trung-quoc/vo-hiep" title="Võ Hiệp">Võ Hiệp</a></li>
                                </ul>
                                <li class="ah-lsm ah-drop-ft" onClick="menuDropdown(this)">
                                    <a class="non-routed" href="/the-loai/phim-hoat-hinh">Hoạt Hình</a>
                                    <i class="fa fa-chevron-down ah-rtnav" aria-hidden="true"></i>
                                </li>
                                <ul class="ah-ulsm">
                                    <li><a href="/the-loai/phim-hoat-hinh/my" title="Mỹ">Mỹ</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/han-quoc" title="Hàn Quốc">Hàn Quốc</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/malaysia" title="Malaysia">Malaysia</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/anh" title="Anh">Anh</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/phap" title="Pháp">Pháp</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/dai-loan" title="Đài loan">Đài loan</a></li>
                                    <li><a href="/the-loai/phim-hoat-hinh/khac" title="Khác">Khác</a></li>
                                </ul>
                                <li class="ah-lsm ah-drop-ft" onClick="menuDropdown(this)">
                                    <a class="non-routed" href="#">Năm Phát Hành</a>
                                    <i class="fa fa-chevron-down ah-rtnav" aria-hidden="true"></i>
                                </li>
                                <ul class="ah-ulsm">
                                    <li><a href="/phim-phat-hanh/2019" title="Phim phát hành năm 2019">2019</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2018" title="Phim phát hành năm 2018">2018</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2017" title="Phim phát hành năm 2017">2017</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2016" title="Phim phát hành năm 2016">2016</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2015" title="Phim phát hành năm 2015">2015</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2014" title="Phim phát hành năm 2014">2014</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2013" title="Phim phát hành năm 2013">2013</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/2012" title="Phim phát hành năm 2012">2012</a>
                                    </li>
                                    <li><a href="/phim-phat-hanh/-2012" title="Phim phát hành trước năm 2012">Trước 2012</a>
                                    </li>
                                </ul>
                                <li>
                                    <a class="non-routed" href="/phim-bo">Phim Bộ</a>
                                </li>
                                <li>
                                    <a class="non-routed" href="/phim-le">Phim Lẻ</a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <script>
                        function menuDropdown(t)
                        {
                            if(t.classList.contains("active"))
                            {
                                t.classList.remove("active");
                            }
                            else
                            {
                                t.classList.add("active");
                            }
                        }
                    </script>

                    <div>
                        <div class="ah-mn2 ah-clear-both">
                            <div class="menu-child">
                                <div class="fa ah-float-left ah-search" attr-title="Tìm kiếm">
                                    <form class="form-search-z" role="search" action="/tim-kiem">
                                        <input type="text" class="form-control" name="q" min="1" max="50" id="keyword" autocomplete="off" placeholder="Nhập và Enter" value="">

                                    </form>
                                </div>
                            </div>
                            <div class="ah-button-login ah-float-right" attr-title="Đăng nhập"><a href="/dang-nhap?ref=/">Đăng nhập</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ah-clear-both">

        @section('main')
        @show

    </div>
    <footer>
        <div id="ah-footer">
            <div class="ah-clear-both">
                <div class="ah-ft-links">
                    <div class="ah-ft-head">Liên kết phim</div>
                    <ul>
                        <li><a href="/phim/dao-hai-tac-one-piece-i3-f92.html">One Piece</a></li>
                        <li><a href="/phim/boruto-naruto-next-generations-i2-f1877.html">Boruto</a></li>
                        <li><a href="/phim/tham-tu-lung-danh-conan-animehay-f439.html">Conan</a></li>
                        <li><a href="/phim/naruto-shippuuden-i2-f300.html">Naruto</a></li>
                        <li><a href="/phim/pokemon-tong-hop-animehay-f1632.html">Pokemon</a></li>
                        <li><a href="/phim/gintama-k2-animehay-f354.html">Gintama</a></li>
                    </ul>
                </div>
                <div class="ah-ft-contact">
                    <div class="ah-ft-head">Liên hệ</div>
                    <ul>
                        <li><i class="fa fa-envelope-square"></i> Đang cập nhập</li>
                        <li><i class="fa fa-facebook-official"></i> Đang cập nhập</li>
                        <li><i class="fa fa-copyright"></i> <a href="#">Chính Sách</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
