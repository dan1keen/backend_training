<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $items = DB::table('tbl_news')->limit(10)->get();
        return response()->json([
            'items' => $items,
            'user'  => Auth::user(),
        ]);
    }
    public function test()
    {
        return response()->json([
            'user'  => Auth::user(),
        ]);
    }
}
