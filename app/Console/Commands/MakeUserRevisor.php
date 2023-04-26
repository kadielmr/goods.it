<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:MakeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente revisore';

    /**
     * Execute the console command.
     */

    public function __construct(){
        parent::__construct();
    }

    
    public function handle(): void
    {

        $user = User::where('email', $this->argument('email'))->first();
            if(!$user){
            $this->error('Utente non trovato');
            return;
            }

        $user->is_revisor=true;
        $user->save();
        $this->info("L'utente {$user->name} è ora un revisore!");
    }

    }

