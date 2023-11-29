<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'body', 'image'];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
