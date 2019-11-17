@extends('layout')
@section('title', $film->name)

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
                <img src="{{ $film->poster }}"
                     alt="{{ $film->name }}">
            </div>
            <div class="ah-pif-fcover ah-bg-bd">
                <img src="{{ $film->thumbnail }}"
                     alt="{{ $film->name }}">
            </div>
        </div>
        <div class="ah-pif-ftool ah-bg-bd ah-clear-both">
            <div class="ah-float-left" style="float: none!important; text-align: center">
                <span><a href="" class="button-one"><i class="fa fa-play-circle"></i> Xem Phim</a>
                </span>
            </div>


        </div>
    </div>

    <div class="ah-pif-body ah-clear-both">

        <div class="ah-pif-fdetails ah-bg-bd mg-5">
            <div class="ah-pif-title">Thông tin</div>
            <ul>
                <li>
                    <strong>Tên khác :</strong>
                    Enn Enn no Shouboutai
                </li>
                <li>
                    <strong>Năm phát hành :</strong>
                    {{ $film->year }}
                </li>
                <li>
                    <strong>Thể loại :</strong>
                    @foreach($film->categories as $category)
                        <span><a href="http://animehay.tv/the-loai/phim-anime" title="{{ $category->name }}">{{ $category->name }}</a></span>
                    @endforeach
                </li>
                <li>
                    <strong>Thời lượng :</strong>
                    {{ $film->duration }} Tập
                </li>
            </ul>
        </div>
        <div class="ah-pif-fcontent ah-bg-bd mg-5">
            <div class="ah-pif-title">Nội Dung</div>
            <p>{{ $film->description }}</p>
        </div>
    </div>
</div>

@endsection
