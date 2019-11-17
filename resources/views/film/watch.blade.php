@extends('layout')
@section('title', 'Watch')

@section('main')

<div class="ah-watch-film">
    <div class="ah-wf-head">

        <div class="film-player ah-bg-bd">
            <div id="ah-player" class="ah-pd">
                <div style="position: relative;padding-bottom: 74.25%">
{{--                    Jwplayer--}}
                    <div id="video"></div>
                </div>
            </div>
        </div>

        <div class="ah-wf-title">
            <h1><a href="http://animehay.tv/phim/babylon-f3034.html" title="Babylon">Babylon</a> Tập 1</h1>
        </div>

    </div>
    <div class="ah-wf-body">
        <div class="ah-wf-le ah-bg-bd">
            <div class="ah-le-server ah-le-fs35"><span>Tập phim</span></div>
            <ul>
                <li><a href="http://animehay.tv/phim/babylon-tap-1-e91087.html" class="active">1</a></li>
                <li><a href="http://animehay.tv/phim/babylon-tap-2-e91117.html" class="">2</a></li>
                <li><a href="http://animehay.tv/phim/babylon-tap-3-e91225.html" class="">3</a></li>
                <li><a href="http://animehay.tv/phim/babylon-tap-4-e91288.html" class="">4</a></li>
                <li><a href="http://animehay.tv/phim/babylon-tap-5-e91354.html" class="">5</a></li>
                <li><a href="http://animehay.tv/phim/babylon-tap-6-e91421.html" class="">6</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection
