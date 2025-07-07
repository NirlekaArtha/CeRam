<?php

namespace App\Observers;

use App\Models\PostRating;

class PostRatingObserver
{
    /**
     * Handle the PostRating "created" event.
     */
    public function created(PostRating $postRating): void
    {
        $this->updatePostRating($postRating);
    }

    /**
     * Handle the PostRating "updated" event.
     */
    public function updated(PostRating $postRating): void
    {
        $this->updatePostRating($postRating);
    }

    /**
     * Handle the PostRating "deleted" event.
     */
    public function deleted(PostRating $postRating): void
    {
        $this->updatePostRating($postRating);
    }

    private function updatePostRating(PostRating $postRating): void
    {
        $post = $postRating->post;
        $post->rating = round($post->ratedByUsers()->avg('rating'), 2) ?: 0; // Default to 0 if no ratings exist
        $post->votes = $post->ratedByUsers()->count();
        $post->save();
    }
}
