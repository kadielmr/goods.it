<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;
    
    protected $fillable= [

        'title',
        'body',
        'price',
        'is_revisor_by',
        'user_id'

    ];

    public function category (){
        return $this->belongsTo(Category::class);
    }


    public function user (){
        return $this->belongsTo(User::class);
    }


    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }


    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->where('user_id', '!=', auth()->user()->id)->count();
    }


    public function toSearchableArray(){

        $category=$this->category;
        $array=[
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'category'=>$category,
        ];
        return $array;
    }

    public function isRevisorBy(){

        return $this->belongsTo(User::class);
    }

    public function revisorBy($id){

        $this->is_revisor_by = $id;

        $this->save();

        return true;
    }

    public function images(){
        
        return $this->hasmany(Image::class);
    }

}
