<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')
        ->get();
        return view('home.HomePage',compact('categories'));
    }
    public function RenderContent(Request $request)
    {
        $category_id = $request->category_id;
        $channel = DB::table('channel')
        ->select('id','channel_name','file','url')
        ->where('channel.category',$category_id)
        ->get();

        echo json_encode($channel);
    }
}
