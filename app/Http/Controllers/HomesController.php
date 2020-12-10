<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $pages = Page::get();
        $pageDetail = Page::where('id', 1)->first();

        return view('web.home', ['pages' => $pages, 'pageDetail' => $pageDetail]);
    }

    public function page(Page $page)
    {
        $pages = Page::get();

        return view('web.home', ['pages' => $pages, 'pageDetail' => $page]);
    }
}
