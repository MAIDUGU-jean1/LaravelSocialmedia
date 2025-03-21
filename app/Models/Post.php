<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $Fillable = ['user_id', 'content', 'file'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    //
}
