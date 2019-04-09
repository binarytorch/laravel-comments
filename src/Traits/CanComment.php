<?php

namespace BinaryTorch\Comments\Traits;

use BinaryTorch\Comments\Models\Comment;
use BinaryTorch\Comments\Events\NewComment;
use BinaryTorch\Comments\Contracts\Commentable;

trait CanComment
{
    /**
     * @param $commentable
     * @param string $comment
     * @return $this
     */
    public function comment(Commentable $commentable, $comment)
    {
        $comment = new Comment([
            'comment'        => $comment,
            'commentator_id'   => $this->id,
            'commentator_type' => $this->getMorphClass()
        ]);

        $commentable->comments()->save($comment);

        NewComment::dispatch($comment);

        return $comment;
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentator');
    }
}