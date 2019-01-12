<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Article;
use Validator;
use File;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$artikel = Article::get();
    	return view('admin.index', compact('artikel'));
    }

    public function show_create()
    {
    	return view('admin.create');
    }

    public function create_artikel(Request $request)
    {
    	// return $request->all();
        $this->validate($request, [
            'artikel_title' => 'required',
            'artikel_desk' => 'required',
            'artikel_photo' => 'required|max:2048',
            'artikel_artikel' => 'required',
            'artikel_cate' => 'required'
        ]);
        if($request->hasFile('artikel_photo')){
            $image = $request->file('artikel_photo');
            $name = time().'.'.$image->getClientOriginalExtension();

            $bikin = Article::create([
            			'user_id' => Auth::user()->id,
            			'title' => $request->artikel_title,
            			'description' => $request->artikel_desk,
            			'article' => $request->artikel_artikel,
            			'category' => $request->artikel_cate,
            			'image' => '',
            			'viewer' => '0'
            		]);
            $destinationPath = public_path('/article/').$bikin->id;
            if(File::exists($destinationPath)){
                return redirect('/admin/create')->with('failed', 'kesalahan jaringan, silahkan ulangi kembali.');
            }
            $image->move($destinationPath, $name);
            $updateBikin = $bikin->update(['image' => "/article/$bikin->id/$name"]);
            if($bikin && $updateBikin){
            	return redirect('/admin')->with('success','Berhasil menambahkan artikel!');
            }else{
            	return redirect('/admin')->with('failed','Gagal menambahkan artikel!');
            }
        }
    }

    public function show_edit($id)
    {
    	$artikel = Article::findOrFail($id);
    	return view('admin.edit', compact('artikel'));
    }

    public function edit_artikel(Request $request)
    {
    	// return $request->all();
        $this->validate($request, [
            'artikel_title' => 'required',
            'artikel_desk' => 'required',
            'artikel_artikel' => 'required',
            'artikel_cate' => 'required'
        ]);
        $cariArtikel = Article::findOrFail($request->artikelid);
        if($cariArtikel){
        	$bikin = $cariArtikel->update([
	            'user_id' => Auth::user()->id,
	            'title' => $request->artikel_title,
	            'description' => $request->artikel_desk,
	            'article' => $request->artikel_artikel,
	            'category' => $request->artikel_cate,
	        ]);
	        if($request->hasFile('artikel_photo')){
	        	$image = $request->file('artikel_photo');
	            $name = time().'.'.$image->getClientOriginalExtension();
	            $destinationPath = public_path('/article/').$cariArtikel->id;
	            if(!File::exists($destinationPath)){
	                return redirect('/admin/create')->with('failed', 'kesalahan jaringan, silahkan ulangi kembali.');
	            }
	            $image->move($destinationPath, $name);
	            $updateBikin = $cariArtikel->update(['image' => "/article/$cariArtikel->id/$name"]);
	        }
	        if($bikin || $updateBikin){
	        	return redirect('/admin')->with('success','Berhasil menambahkan artikel!');
	       	}else{
	        	return redirect('/admin')->with('failed','Gagal menambahkan artikel!');
	       	}
	    }else{
	    	return redirect()->back();
	    }
    }

    public function delete_artikel(Request $request)
    {
    	$cariArtikel = Article::find($request->artikel);
    	if($cariArtikel == true){
    		$delete = $cariArtikel->delete();
    		if($delete){
    			return response()->json(['result'=>true,'msg'=>"Data has been deleted"],200);
    		}else{
    			return response()->json(['result'=>false,'msg'=>"Not deleted"],500);
    		}
    	}else{
    		return response()->json(['result'=>false,'msg'=>"Something wrong"],500);
    	}
    }
}
