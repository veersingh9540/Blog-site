<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel dude';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);

    }

    public function about(){
        $title = 'About US';
        return view('pages.about')->with('title',$title);
    }

    public function service(){
        $data = [
            'title' => 'services',
            'para' => 'This is Paragraph Page',
            'services'=>[
                'Wed Design', 'App development', 'Mobile apk convesion'
            ],

        ];
        return view('pages.service')->with($data);
    }
}
