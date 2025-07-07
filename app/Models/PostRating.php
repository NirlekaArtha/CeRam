<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\PostRatingObserver;

#[ObservedBy([PostRatingObserver::class])]

class PostRating extends Model
{

    protected $fillable = [
        'post_id',
        'user_id',
        'rating',
    ];

    public $timestamps = false;

    // protected $primaryKey = ['post_id', 'user_id'];

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}