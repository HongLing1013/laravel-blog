<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ 'title' , 'content' ]; // 可以被批量賦值的欄位

    public function user(){
        // 一對一關聯
        return $this->belongsTo('App\Models\User');
    }
}
