<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    public function art()
    {
        $artikel = Article::where('category','art')->inRandomOrder()->get();
        return view('page.art', compact('artikel'));
    }

    public function culinary()
    {
        $artikel = Article::where('category','culinary')->inRandomOrder()->get();
        return view('page.culinary', compact('artikel'));
    }

    public function history()
    {
        $artikel = Article::where('category','history')->inRandomOrder()->get();
        return view('page.history', compact('artikel'));
    }

    public function place()
    {
        $artikel = Article::where('category','place')->inRandomOrder()->get();
        return view('page.place', compact('artikel'));
    }

    public function show_artikel($id)
    {
        $expl = explode('artikel-', $id);
        if(!isset($expl[1])){
            return redirect('/');
        }
        $artikel_judul = $expl[1];

        // return unSlug($artikel_judul);
        $judul = unSlug($artikel_judul);
        $cariArtikel = Article::where('title', $judul)->first();
        if($cariArtikel){
            $updateView = $cariArtikel->update(['viewer' => $cariArtikel->viewer + 1]);
            return view('page.detail', compact('cariArtikel'));
        }else{
            return "/";
        }
    }
}
