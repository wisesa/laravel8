<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Krider extends Model
{
    protected $guarded = ['id'];

    public function index($query, array $filters)
    {   
        Krider::all();
    }   
}
