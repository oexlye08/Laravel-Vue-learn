<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function test()
    {
        $pages = Page::all();
        foreach ($pages as $page) {
            echo "$page->name - ($page->created_at)";
            echo '<br>';
        }
    }
}
