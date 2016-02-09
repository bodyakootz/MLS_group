<?php namespace App\Http\Controllers;

use App\Collect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Request;
use App\Article;
use App\Counter;
use File;

class MainController extends Controller {

    private function getFile($lang) {
        $path = dir_path('resources');
        $file_name = $lang;
        $file_extension = '.php';
        $file = $path.DIRECTORY_SEPARATOR.$file_name.$file_extension;
        return $file;
    }

    private function pickTextFile($lang) {
        $file = $this->getFile($lang);
        if (File::exists($file)) {
            include $file;
            $page = (string) r();
            $texts = $texts[$page];
            $general_texts = $general;
            $current_texts = array_merge($texts, $general_texts);
            return $current_texts;
        }
        return false;
    }

    private function getTexts($lang='ua') {
        $text_array = $this->pickTextFile($lang);
        if (!empty($text_array)) {
            $texts = (object) $text_array;
            return $texts;
        }
        return false;
    }

    public function index($lang='ua') {
        $article = new Article();
        $articles = $article->getLatestNews($lang, 4);
        if ($this->getTexts($lang)) {
            $texts = $this->getTexts($lang);
            $counter = new Counter;
            $counter = $counter->getCounter();
            $counter->date = date('m/j/Y H:m', strtotime($counter->date));
            return v()->with([
                'articles'   => $articles,
                'text'       => $texts,
                'lang'       => $lang,
                'counter'    => $counter,
            ]);
        } else {
            $error = 'NO SUCH LANGUAGE';
            return \View::make('errors/404', ['error' => $error]);
        }
    }
    public function about($lang='ua') {
        if ($this->getTexts($lang)) {
            $texts = $this->getTexts($lang);
            return v()->with([
                'lang'  => $lang,
                'text'  => $texts,
            ]);
        } else {
            $error = 'NO SUCH LANGUAGE';
            return \View::make('errors/404', ['error' => $error]);
        }
    }
    public function contacts($lang='ua') {
        if ($this->getTexts($lang)) {
            $texts = $this->getTexts($lang);
            return v()->with([
                'text' => $texts,
                'lang' => $lang
            ]);
        } else {
            $error = 'NO SUCH LANGUAGE';
            return \View::make('errors/404', ['error' => $error]);
        }
    }
    public function services($lang='ua') {
        if ($this->getTexts($lang)) {
            $texts = $this->getTexts($lang);
            return v()->with([
                'text' => $texts,
                'lang' => $lang
            ]);
        } else {
            $error = 'NO SUCH LANGUAGE';
            return \View::make('errors/404', ['error' => $error]);
        }
    }
    public function collect() {
        $email = htmlentities($_POST['email']);
        $collect = new Collect();
        $collect->email = $email;
        if($collect->save()) {
            $thanks = true;
        } else {
            $thanks = false;
        }
//        TODO::add send mail here;
        return back()->withMessage([
            'message' => $thanks,
            ]);
    }
    public function service($service, $lang='ua') {
        if ($this->getTexts($lang)) {
            $texts = $this->getTexts($lang);
            $service_texts = (object) $texts->$service;
            return v()->with([
                'text' => $texts,
                'service_name' => $service,
                'service' => $service_texts,
                'lang' => $lang,
            ]);
        } else {
            $error = 'NO SUCH LANGUAGE';
            return \View::make('errors/404', ['error' => $error]);
        }
    }

    public function admin() {
        if (Auth::check()) {
            return v();
        } else {
            return redirect()->route('login');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}