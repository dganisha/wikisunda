<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function show_create()
    {
    	return view('admin.create');
    }

    public function create_artikel(Request $request)
    {
    	// return $request->all();
    	$validator = Validator::make($request->all(), [
            'artikel_title' => 'required',
            'artikel_desk' => 'required',
            'artikel_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'artikel_artikel' => 'required'
        ]);
        if ($validator->fails()) {
          return redirect('/admin/create')->with('failed', 'Kolom ada yang belum terisi atau format file image salah.');           
        }
        if($request->hasFile('images')){
            $image = $request->file('images');
            $name = time().'.'.$image->getClientOriginalExtension();
            
            $bikin = Article::create([
            			'user_id' => Auth::user()->id,
            			'title' => $request->artikel_title,
            			'description' => $request->artikel_desk,
            			'article' => $request->artikel_artikel,
            			'category' => $request->artikel_category
            		]);
        }
    }
}
