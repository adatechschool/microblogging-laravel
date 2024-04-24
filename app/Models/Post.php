<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    public function author(): BelongsTo
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

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
