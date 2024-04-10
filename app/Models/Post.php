<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

  public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
   /* public function author()
    {
        return $this->join('users', 'posts.author_id', '=', 'users.id')
        ->select('users.name')
        ->from('pos')
        ->get();

    }*/
}
