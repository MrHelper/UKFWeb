<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ThietKeNoiThat;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
	public function TKNTCreate(){
		return view('admincp.tknt-create');
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
}
