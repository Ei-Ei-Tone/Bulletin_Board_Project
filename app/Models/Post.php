<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'posts';

    protected $dates = [ 'deleted_at' ];
    
    protected $fillable = [
        "title", 
        "description",
        "status",
        "created_user_id",
        "updated_user_id"
    ];  
}
