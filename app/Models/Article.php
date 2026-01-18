<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'img'];

    public function user(){
        return $this->belongsTo(User::class);}
}
