@extends('layout')
@section('title', 'Phim ' . $film->name)

@section('main')

<div id="ah-pif">
    <div class="ah-pif-head">
        <div class="ah-pif-fname">
            <h1>
                <a href="http://animehay.tv/phim/enen-no-shouboutai-f2967.html" title="{{ $film->name }}">
                    <span itemprop="name">{{ $film->name }}</span>
                </a>
            </h1>
        </div>
        <div class="ah-clear-both relative cth">
            <div class="ah-pif-fthumbnail ah-bg-bd">
                <img src="{{ $film->poster }}" alt="{{ $film->name }}">
            </div>
            <div class="ah-pif-fcover ah-bg-bd">
                <img src="{{ $film->thumbnail }}" alt="{{ $film->name }}">
            </div>
        </div>
        <div class="ah-pif-ftool ah-bg-bd ah-clear-both">
            <div class="ah-float-left" style="float: none!important; text-align: center">
                <span>
                    <a href="/xem-phim/{{ convertNameToLink($film->name) }}-{{ $film->id }}.html" class="button-one">
                        <i class="fa fa-play-circle"></i> Xem Phim
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="ah-pif-body ah-clear-both">

        <div class="ah-pif-fdetails ah-bg-bd mg-5">
            <div class="ah-pif-title">Thông tin</div>
            <ul>
                <li><strong>Tên khác: </strong>{{ $film->name }}</li>
                <li><strong>Năm phát hành: </strong>{{ $film->year }}</li>
                <li>
                    <strong>Thể loại: </strong>
                    @foreach($film->categories as $category)
                        <span>
                            <a href="/the-loai/{{ $category->link }}" title="{{ $category->name }}">{{ $category->name }}</a>
                        </span>
                    @endforeach
                </li>
                <li><strong>Thời lượng: </strong>{{ $film->duration }} tập</li>
            </ul>
        </div>
        <div class="ah-pif-fcontent ah-bg-bd mg-5">
            <div class="ah-pif-title">Nội Dung</div>
            <p>{{ $film->description }}</p>
        </div>
    </div>
</div>

@endsection
<?php
function convertNameToLink(string $str)
{
    $str = mb_strtolower($str);
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = trim(preg_replace('/\s+/','-', $str));
    return $str;
}
?>
