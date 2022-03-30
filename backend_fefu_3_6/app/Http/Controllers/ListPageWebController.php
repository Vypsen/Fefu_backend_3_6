<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ListPageWebController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $list_page_paginate = Page::paginate(5);
        if ($list_page_paginate === null) {
            abort(404);
        }
        return view('listPage', ['list_page_paginate' => $list_page_paginate]);
    }
}
