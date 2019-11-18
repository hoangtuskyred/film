@extends('layout')
@section('title', 'Phim' . $film->name)

@section('main')

<div class="ah-watch-film">
    <div class="ah-wf-head">

        <div class="film-player ah-bg-bd">
            <div id="ah-player" class="ah-pd">
                <div id="video"></div>
            </div>
        </div>

        <div class="ah-wf-title">
            <h1><a href="/chi-tiet/{{ $film->id }}" title="{{ $film->name }}">{{ $film->name }}</a> Tập 1</h1>
        </div>

    </div>
    <div class="ah-wf-body">
        <div class="ah-wf-le ah-bg-bd">
            <div class="ah-le-server ah-le-fs35">
                <span>Tập phim</span>
            </div>
            <ul>
                @if($film->duration == '1')
                    <li>
                        <a class="active" href="javascript:void();">Full</a>
                    </li>
                @elseif($film->duration == '?')
                    @foreach($film->episodes as $episode)
                        <li>
                            <a class="episode-click @if ($loop->first) active @endif"
                               data-episode="{{ $episode->name }}"
                               href="javascript:void(0)"
                               title="Tập {{ $episode->name }}">{{ $episode->name }}</a>
                        </li>
                    @endforeach
                @else
                    @foreach($film->episodes as $episode)
                        <li>
                            <a class="episode-click @if ($loop->first) active @endif"
                               data-episode="{{ $episode->name }}"
                               href="javascript:void(0)"
                               title="@if($loop->last) Tập cuối @else Tập {{ $episode->name }} @endif">
                                @if($loop->last) Tập cuối @else {{ $episode->name }} @endif
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jwplayer.com/libraries/9elsu1mc.js"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var filmId = $(location).attr('pathname').split('/')[2];
        var thumbnail = '<?= $film->thumbnail ?>';
        var episode = 1;

        loadFilm(thumbnail, filmId, episode);

        $('.episode-click').click(function () {
            $('.episode-click').removeClass('active');
            $(this).addClass('active');
            episode = $(this).attr('data-episode');
            loadFilm(thumbnail, filmId, episode);
        });

    });

    function loadFilm(thumbnail, filmId, episode) {
        $.ajax({
            url: "/api/urlFilm",
            method: 'POST',
            data: {
                filmId: filmId,
                episode: episode
            }
        }).done(function(res) {
            jwplayer('video').setup({
                image: thumbnail,
                file: res
            });
        }).fail(function (error) {
            console.log(error);
        });
    }
</script>
@endsection
