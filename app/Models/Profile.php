<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

  public function user_profile()
    {
        return $this->belongsTo(User::class, 'id');
    }

    /**
     * Mass assignement : when you send an array to the model creation
     * Setting differents fields in a single go. 
     * 
     * $fillable : allowing updating
     * @var array //data type variable + specify $fillable is an array
     */

    protected $fillable = [
      'user_id', // When creating or updating profile, assign the value to user_id
      'profile_picture',
      'background_picture',
      'biography',
      'github_link',
  ];
  
}
