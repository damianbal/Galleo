<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Core\Relations\HasImages;
use App\Core\Relations\BelongsToUser;

class Gallery extends Model
{
    protected $fillable = ['title', 'token', 'user_id'];
    
    use HasImages, BelongsToUser;
}
