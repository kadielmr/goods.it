<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        
        $announcements= Announcement::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');
        return view('home', compact('announcements'));
    }
    
    public function show(Category $category){
        return view('categories.show', compact('category'));
    }
    
    public function searchAnnouncements (Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(10);
        return view('announcements.index',compact('announcements'));
    }

    public function workWithUs(){
        return view('workWithUs');
    }

    // public function __construct(){
    //     $this->middleware('verified');
    // }

    public function setLanguage($lang){
        // dd($lang);
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
