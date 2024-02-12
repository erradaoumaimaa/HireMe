<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\PostDec;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'titre',
        'slug',
        'fname',
        'lname',
        'user_email',
        'user_phone',
        'body',
        'prix',
        'cat_id',
        'image',
        'image_user',
    ];
    public function category()
{
    return $this->belongsTo(Category::class, 'cat_id');
}

   public function getRouteKeyName()
   {
    return 'slug';
   }
}
