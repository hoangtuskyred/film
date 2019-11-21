<?php

namespace App\Http\Controllers;

use App\Category;
use App\Episode;
use App\Film;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $films = Film::orderBy('id', 'desc')->paginate(20);
        return view('film.index', compact('films'));
    }

    public function category($link)
    {
        $category = Category::where('link', $link)->first();
        $films = $category->films()->orderBy('id', 'desc')->paginate(20);
        return view('film.index', compact('films'));
    }

    public function detail($link)
    {
        preg_match_all('/\d+/', $link, $matches);
        $id = end($matches[0]);
        $film = Film::find($id);
        return view('film.detail', compact('film'));
    }

    public function watch($link)
    {
        preg_match_all('/\d+/', $link, $matches);
        $id = end($matches[0]);
        $film = Film::find($id);
        return view('film.watch', compact('film'));
    }

    public function getUrlFilm(Request $request)
    {
        $filmId = $request->get('filmId');
        $episode = $request->has('episode') ? $request->get('episode') : 1;
        return Episode::where('film_id', $filmId)->where('name', $episode)->first()->url;
    }

    public function data()
    {
        $episode = new Episode();
        $episode->name = 1;
        $episode->url = 'https://www.w3schools.com/html/mov_bbb.mp4';

        $episode1 = new Episode();
        $episode1->name = 2;
        $episode1->url = 'https://interactive-examples.mdn.mozilla.net/media/examples/flower.mp4';

        $film = new Film();
        $film->name = 'Thư Linh Ký';
        $film->poster = 'http://animehay.tv/uploads/images/2019/09/thu-linh-ky-thumbnail.jpg';
        $film->thumbnail = 'http://animehay.tv/uploads/images/2019/09/thu-linh-ky-cover.jpg';
        $film->year = 2019;
        $film->duration = '30';
        $film->description = 'Tại Doanh Châu giới, bách gia chư tử, Đường thi Tống từ,';
        $film->save();
        $film->episodes()->saveMany([$episode, $episode1]);
        $film->categories()->attach([1, 2]);

        $film1 = new Film();
        $film1->name = 'Vạn Giới Tiên Tung';
        $film1->poster = 'http://animehay.tv/uploads/images/2018/03/van-gioi-tien-tung-thumbnail.jpg';
        $film1->thumbnail = 'http://animehay.tv/uploads/images/2018/03/van-gioi-tien-tung-cover.jpg';
        $film1->year = 2019;
        $film1->duration = '30';
        $film1->description = 'Mỗi bông hoa là 1 thế giới, Phàm thế chỉ là một hạt cát bé nhỏ trong tay tiên ma Tiên ma nhất niệm, nhân thế vạn năm';
        $film1->save();
        $film1->episodes()->saveMany([$episode, $episode1]);
        $film1->categories()->attach([2, 3]);
    }
}
