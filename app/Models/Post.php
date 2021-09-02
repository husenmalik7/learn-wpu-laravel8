<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'slug', 'excerpt', 'body'];
    //allow tinker to use mass assigment (post::create)

    // protected $guarded = ['id'];
    //allow tinker run all attr except id

}

    