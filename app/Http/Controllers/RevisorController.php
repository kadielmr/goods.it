<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(User $user){
        $announcement_to_check=Announcement::where('is_accepted', null)->first();
        // dd(auth()->id());
        // dd(Announcement::where('is_accepted', null)->where('is_revisor_by', null)->orWhere('is_revisor_by', '!=', auth()->id())->get());
        $announcement_to_recheck=Announcement::where('is_accepted', null)->where('is_revisor_by', null)->where('user_id', '!=', auth()->id())->get();
        return view('revisor.index', compact('announcement_to_recheck'));
        
    }


    public function acceptAnnouncement(Announcement $announcement, User $user){
        $announcement->setAccepted(true);
        $announcement->revisorBy(Auth::user()->id);
        return redirect()->back()->with('message', 'Ti ringraziamo per aver accettato l\'annuncio');
    }


    public function rejectAnnouncement(Announcement $announcement, User $user){
        $announcement->setAccepted(false);
        $announcement->revisorBy(Auth::user()->id);
        return redirect()->back()->with('message', 'Hai rifiutato l\'annuncio correttamente');
    }

    

    public function becomeRevisor(){

    Mail::to('admin@presto.it')->send(new BecomeRevisor (Auth::user()));

    return redirect('/')->with('message', 'Hai richiesto di diventare revisore correttamente');

    }


    public function makeRevisor(User $user){

        Artisan::call('presto:MakeUserRevisor', ["email"=>$user->email]);
        
        return redirect('/')->with('message', 'L\'utente è diventato revisore');
        
    }
}
