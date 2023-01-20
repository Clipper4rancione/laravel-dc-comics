<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(5);
        return view('comics.index', compact('comics'));
    }
}
