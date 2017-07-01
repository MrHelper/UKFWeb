<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ThietKeNoiThat;
use App\ThiCongNhaHang;
use App\Blog;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function TKNTCreate(){
		return view('admincp.tknt-create');
	}
	public function TKNTList(){
		$DuAn = ThietKeNoiThat::get();
        return view('admincp.tknt-list')->with(['DuAn'=>$DuAn]);
	}
    public function TKNTStore(Request $request){
    	$InputFile ="";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;
		}
		$content = $request->input('content');
    	$id = ThietKeNoiThat::create([
    		'title'=>$request->input('title'), 
	    	'description'=>$request->input('description'), 
	    	'image'=>$InputFile, 
	    	'content'=>$request->input('content'),
    		])->id;
    	return response()->json(['mess'=>'Success','id'=>$id,200]);
    }
    public function TKNTEdit(Request $request){
    	$ID = $request->input('id');
    	$InputFile = "";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;

			ThietKeNoiThat::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'description'=>$request->input('description'), 
		    	'image'=>$InputFile, 
		    	'content'=>$request->input('content'), 
			]);
		}else{
			ThietKeNoiThat::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'description'=>$request->input('description'), 
		    	'content'=>$request->input('content'), 
			]);
		}
    	return response()->json(['mess'=>'successful',200]);
    }
    public function TKNTGet($ID){
		$DuAn = ThietKeNoiThat::find($ID);
        return view('admincp.tknt-edit')->with(['DuAn'=>$DuAn]);
    }
    public function TKNTDelete(Request $request){
    	$ID = $request->input('id');
    	ThietKeNoiThat::find($ID)->delete();
    	return response()->json(['mess'=>'successful',200]);
    }

    /*----------------------------*/

    public function TCNHCreate(){
		return view('admincp.tcnh-create');
	}
	public function TCNHList(){
		$DuAn = ThiCongNhaHang::get();
        return view('admincp.tcnh-list')->with(['DuAn'=>$DuAn]);
	}
    public function TCNHStore(Request $request){
    	$InputFile ="";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;
		}
		$content = $request->input('content');
    	$id = ThiCongNhaHang::create([
    		'title'=>$request->input('title'), 
	    	'description'=>$request->input('description'), 
	    	'image'=>$InputFile, 
	    	'content'=>$request->input('content'),
    		])->id;
    	return response()->json(['mess'=>'Success','id'=>$id,200]);
    }
    public function TCNHEdit(Request $request){
    	$ID = $request->input('id');
    	$InputFile = "";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;

			ThiCongNhaHang::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'description'=>$request->input('description'), 
		    	'image'=>$InputFile, 
		    	'content'=>$request->input('content'), 
			]);
		}else{
			ThiCongNhaHang::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'description'=>$request->input('description'), 
		    	'content'=>$request->input('content'), 
			]);
		}
    	return response()->json(['mess'=>'successful',200]);
    }
    public function TCNHGet($ID){
		$DuAn = ThiCongNhaHang::find($ID);
        return view('admincp.tknt-edit')->with(['DuAn'=>$DuAn]);
    }
    public function TCNHDelete(Request $request){
    	$ID = $request->input('id');
    	ThiCongNhaHang::find($ID)->delete();
    	return response()->json(['mess'=>'successful',200]);
    }

    /*----------------------------*/

    public function BLOGCreate(){
		return view('admincp.blog-create');
	}
	public function BLOGList(){
		$Blog = Blog::get();
        return view('admincp.blog-list')->with(['Blog'=>$Blog]);
	}
    public function BLOGStore(Request $request){
    	$InputFile ="";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;
		}
		$content = $request->input('content');
    	$id = Blog::create([
    		'title'=>$request->input('title'), 
	    	'categlory'=>$request->input('categlory'), 
	    	'image'=>$InputFile, 
	    	'content'=>$request->input('content'),
    		])->id;
    	return response()->json(['mess'=>'Success','id'=>$id,200]);
    }
    public function BLOGEdit(Request $request){
    	$ID = $request->input('id');
    	$InputFile = "";
    	if ($request->hasFile('images')) {
    		$upfile = $request->file('images');
    		$fName = date("Ymdhis")."_".$upfile->getClientOriginalName();
			$path = Storage::putFileAs('public/images', $upfile, $fName);
			$url = Storage::url($path);
			$link = asset($url);
		    $InputFile = $link;

			Blog::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'categlory'=>$request->input('categlory'), 
		    	'image'=>$InputFile, 
		    	'content'=>$request->input('content'), 
			]);
		}else{
			ThiCongNhaHang::find($ID)->update([
				'title'=>$request->input('title'), 
		    	'categlory'=>$request->input('categlory'), 
		    	'content'=>$request->input('content'), 
			]);
		}
    	return response()->json(['mess'=>'successful',200]);
    }
    public function BLOGGet($ID){
		$Blog = Blog::find($ID);
        return view('admincp.blog-edit')->with(['Blog'=>$Blog]);
    }
    public function BLOGDelete(Request $request){
    	$ID = $request->input('id');
    	Blog::find($ID)->delete();
    	return response()->json(['mess'=>'successful',200]);
    }
}
