@extends('layout')
@section('title', 'Home')

@section('main')

<div class="ah-row-film ah-clear-both">
    <div class="ah-head-film">
        <span class="tab-one active-tab"><i class="fa fa-star-half-o" aria-hidden="true"></i> Phim mới cập nhật</span>
    </div>
    @foreach($films as $film)
        <div class="ah-col-film">
            <div class="ah-pad-film">
                <div class="ah-effect-film">
                    <a href="/chi-tiet/{{ convertNameToLink($film->name) }}-{{ $film->id }}.html"></a>
                </div>
                <a href="/chi-tiet/{{ convertNameToLink($film->name) }}-{{ $film->id }}.html">
                    <img src="{{ $film->poster }}"/>
                    <span class="number-ep-film">{{ $film->duration }}</span>
                    <span class="name-film">{{ $film->name }}</span>
                </a>
            </div>
        </div>
    @endforeach
</div>

<div class="ah-pagenavi ah-bg-bd">
    {{ $films->links('film.paginator') }}
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
