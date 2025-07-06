<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'rating',
        'votes',
        'slug',
        'category',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'decimal:2',
            'votes' => 'integer',
        ];
    }
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function savedByUsers() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'saved_posts', "post_id", "user_id");
    }
}
