<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\HasImages;
use App\Core\BelongsToUser;

class Gallery extends Model
{
    protected $fillable = ['title', 'token', 'user_id'];
    
    use HasImages, BelongsToUser;
}
