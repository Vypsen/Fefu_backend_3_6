<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PageNewsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $slug)
    {
        $page_news = News::query()
            ->where('slug', $slug)->first();

        if ($page_news === null) {
            abort(404);
        }
        return view('pageNews', ['page_news' => $page_news]);
    }
}
