<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->link = $this->convertNameToLink($category->name);
        $category->save();
        return response()->json($category, 200);
    }

    public function getCategoryById($id)
    {
        $category = Category::find($id);
        return response()->json($category, 200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    }

    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->link = $this->convertNameToLink($category->name);
        $category->save();
        return response()->json($category, 200);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response('Ok', 200);
    }

    private function convertNameToLink(string $str)
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
}
