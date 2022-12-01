<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likepost extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','news_id', 'picture_id', 'day_id','user_id'];
}
