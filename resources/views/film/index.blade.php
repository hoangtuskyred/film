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
                <div class="ah-effect-film"><a href="/detail/{{ $film->id }}"></a>
                </div>
                <a href="/detail/{{ $film->id }}">
                    <img src="{{ $film->poster }}"/>
                    <span class="number-ep-film">6/??</span>
                    <span class="rate-point">9.2</span>
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
