<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {
//        $title = 'Welcome To Laravel';
//        return view('pages/index'_->with($title);
        return view('pages/index');
    }

    public function about() {
        return view('pages/about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages/services')->with($data);
    }
}
