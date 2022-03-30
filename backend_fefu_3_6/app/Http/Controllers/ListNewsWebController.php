<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class ListNewsWebController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $list_news_paginate = News::paginate(5);
        if ($list_news_paginate === null) {
            abort(404);
        }
        return view('listNews', ['list_news_paginate' => $list_news_paginate]);
    }
}
