<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Article;
use Symfony\Component\Console\Input\Input;
use File;


class ArticleController extends Controller {
    private function getLang($lang='ua') {
        return $lang;
    }
    private function pickLanguage($lang) {
        $path = dir_path('resources');
        $file_name = $lang;
        $file_extension = '.php';
        $file = $path.DIRECTORY_SEPARATOR.$file_name.$file_extension;
        $current_texts = [];
        if (File::exists($file)) {
            include $file;
            $page = (string)r();
            $texts = $texts[$page];
            $general_texts = $general;
            $current_texts = array_merge($texts, $general_texts);
        }
        return $current_texts;
    }
    private function getTexts($lang) {
        $lang = $this->getLang($lang);
        $texts_array = $this->pickLanguage($lang);
        if (!empty($texts_array)) {
            $texts = (object) $texts_array;
            return $texts;
        }
        return false;
    }

    public function articles($category, $category_name, $lang='ua') {
        $texts = $this->getTexts($lang);
        $article = new Article();
        $articles = $article->getArticlesByLang($category, $category_name, $lang);
        return v()->with([
            'articles'      => $articles,
            'lang'          => $this->getLang($lang),
            'category'      => $category,
            'category_name' => $category_name,
            'text'          => $texts
        ]);
    }
    public function article($article_id, $article, $lang='ua') {
        $texts = $this->getTexts($lang);
        $article = new Article();
        $article = $article->getArticle($article_id, $lang);
        $article->date = date('j-m-Y', strtotime($article->date));
        $articles = new Article();
        $same = $articles->getSameArticles($lang, 4, $article->category_code, $article->article_id);
        return v()->with([
            'article'       => $article,
            'nav_id'        => $article->article_id,
            'nav_url'       => s($article->title),
            'same_articles' => $same,
            'text'          => $texts,
            'lang'          => $this->getLang($lang),


        ]);
    }
    public function admin_articles() {
        $articles = new Article();
        $articles= $articles->getAllArticles();
        return v()->with([
           'articles'   => $articles,
        ]);
    }
    public function delete_article($article_id, $lang) {
        $article = new Article();
        $message = $article->deleteArticle($article_id, $lang);
        session()->flash('message', $message); //TODO:: fix this fucking problem with session!!!!!!!!!!
        return redirect()->back();
    }
    public function change_article($article_id) {
        $article = Article::find($article_id);
       return v()->with([
           'article'    => $article,
       ]);
    }
    public function update_article() {
        $data = Input::all();
        unset($data['_token']);
        $estate = Article::find($data['article_id'])->update($data);
        return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} изменена успешно!");
    }
    public function create_article() {

        return v();
    }

}