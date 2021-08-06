<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class UserList extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_lists';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $date = [
        'deleted_at'
    ];
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'phone',
        'dob',
        'profile',
        'address',
        "created_user_id"
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    } 
}
