<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){

       return view('announcements.create');

    }
    
    public function show(Announcement $announcement){
        return view('announcements.show', compact('announcement'));
    }

    public function index(){
        $announcements= Announcement::where('is_accepted',true)->orderByDesc('created_at')->paginate(12);
        return view('announcements.index', compact('announcements'));
        
    }
}
