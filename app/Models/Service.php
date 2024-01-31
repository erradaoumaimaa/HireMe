<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\PostDec;

class Service extends Model
{
    use HasFactory;
    public function category()
{
    return $this->belongsTo(Category::class, 'cat_id');
}

    public function show($slug){

        $service = Service::find($slug);
        return view('show')->with(['service' => $service]);
    }
}
