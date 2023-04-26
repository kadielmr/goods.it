<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images=[];
    public $images=[];
    public $form_id;
    public $announcement;



    protected $rules=[
        'title'=>'required',
        'body'=>'required|min:10',
        'price'=>'required',
        'category'=>'required',
        'images.*'=>'image|required|max: 1000',
        'temporary_images.*'=>'image|required|max:1000',
        'temporary_images'=>'required',
    
    ];


    protected $messages=[
        'required'=>'Il campo è richiesto',
        'min'=>'Il campo richiede minimo 10 caratteri',
        'numeric'=>'Il campo deve essere un numero',
        'max'=>'l\'immagine deve essere inferiore a 1000kb',
    ];

    public function updatedTemporaryImages(){

        if($this->validate([
            'temporary_images.*'=>'image|required|max:1000',
        ])){

            foreach($this->temporary_images as $image){
                $this->images[]= $image;
            }
        }
        
    }
    
    // public function updateTemporaryImages(){
    //     if($this->validate([
    //         'temporary_images.*'=>'image|required|max:1000',
    //     ]))
    //     {
    //         foreach($this->temporary_images as $image){
    //             $this->images []= $image;
    //         }
    //     }
    // }
    

    public function store(){
        
        $this->validate();


        $category=Category::find($this->category);

        $announcement=$category->announcements()->create([
            

        'title'=>$this->title,
        'body'=>$this->body,
        'price'=>$this->price,
        'user_id'=>Auth::user()->id,
     ]);

     if(count($this->images)){
        foreach($this->images as $image){
            // $announcement->images()->create(['path'=>$image->store('images', 'public')]);
            $newFileName = "announcements/{$announcement->id}";
            $newImage=$announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

            RemoveFaces::withChain([
                new ResizeImage($newImage->path, 300, 300),
                new GoogleVisionSafeSearch($newImage->id),
                new GoogleVisionLabelImage($newImage->id),

            ])->dispatch($newImage->id);

        }

        File::deleteDirectory(storage_path('/app/livewire-tmp'));
     }

     $announcement->user()->associate(Auth::user());
     $announcement->save();

     Auth::user()->announcements()->save($announcement);
     
   

     session()->flash('message', 'Hai inserito correttamente il tuo annuncio!');
     $this->cleanForm();

     

    }

    public function cleanForm(){
        $this->title="";
        $this->body="";
        $this->price="";
        $this->category="";
        $this->images = [];
        $this->temporary_images = [];
   
    }

  
    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

}
