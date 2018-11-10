<?php
use App\Models\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/search_page',"SearchController@search_page")->name('search_page');
// Route::get('search_text', function () {
//     // 为查看方便都转成数组
//     dump(Article::all()->toArray());
//     dump('下面搜索的是：功能齐全的搜索引擎');
//     dump(Article::search('功能齐全的搜索引擎')->get()->toArray());
//     dump('此处把content改为：让全文检索变的简单而强大');
//     // 修改 content 测试索引是否会自动同步
//     $first = Article::find(1);
//     $first->content = '让全文检索变的简单而强大';
//     $first->save();
//     dump('下面搜索的是：功能齐全的搜索引擎');
//     dump(Article::search('功能齐全的搜索引擎')->get()->toArray());
//     dump('下面搜索的是：简单的检索');
//     dump(Article::search('简单的检索')->get()->toArray());
// });

Route::get("/search","SearchController@search")->name('search');
