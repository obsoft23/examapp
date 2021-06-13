<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
   // const UPDATED_AT = null;
    //const CREATED_AT = 'last_updated';
   protected $fillable = [
        'profile_picture',
        'user_id'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
