<?php

namespace BinaryTorch\Comments\Traits;

use BinaryTorch\Comments\Models\Comment;

trait HasComments
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}