<?php namespace App;

use App\BaseModel;
use DB;
use Illuminate\Support\Facades\Input;

class Article extends BaseModel {
    protected $guarded = [];
    protected $primaryKey = 'article_id';
    public $timestamps = false;

    public function getLatestNews($lang, $quantity) {
        $last_articles = DB::table('articles')
            ->join('contents', 'articles.article_id', '=', 'contents.article_id')
            ->join('languages', 'contents.lang_id', '=', 'languages.id')
            ->where('lang_code', $lang)
            ->orderBy('date', 'desc')
            ->take($quantity)
            ->get();
        foreach ($last_articles as $last_article) {
            $last_article->date = date('d/m/Y', strtotime($last_article->date));
        }

        return $last_articles;
    }
    public function getSameArticles($lang, $quantity, $category, $article_id) {
        $articles = DB::table('articles')
            ->join('contents', 'articles.article_id', '=', 'contents.article_id')
            ->join('languages', 'contents.lang_id', '=', 'languages.id')
            ->where('category_code', $category)
            ->where('lang_code', $lang)
            ->where('articles.article_id', '!=', $article_id)
            ->orderBy('date', 'desc')
            ->take($quantity)
            ->get();
//        $articles = DB::table('articles')->where('language', $lang);
//        $articles = $articles->where('category', $category);
//        $articles = $articles->where('article_id', '!=', $article_id);
//        $articles = $articles->orderBy('date', 'desc');
//        $articles = $articles->take($quantity);
//        $articles = $articles->get();
        return $articles;
    }
    public function getArticlesByLang($category, $category_name, $lang) {
        $articles = DB::table('articles')
            ->join('contents', 'articles.article_id', '=', 'contents.article_id')
            ->join('languages', 'contents.lang_id', '=', 'languages.id')
            ->where('lang_code', $lang)
            ->where('category_code', $category)
            ->orderBy('date', 'desc')
            ->paginate(8);
        return $articles;
    }

    public function getArticle($article_id, $lang) {
//        $article = Article::find($article_id);
        $article = DB::table('articles')
            ->where('articles.article_id', $article_id)
            ->where('lang_code', $lang)
            ->join('contents', 'articles.article_id', '=', 'contents.article_id')
            ->join('languages', 'contents.lang_id', '=', 'languages.id')
            ->get();
//        print_r($article[0]);
//        exit;
        return $article[0];
    }

}