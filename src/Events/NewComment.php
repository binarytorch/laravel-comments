<?php

namespace BinaryTorch\Comments\Events;

use Illuminate\Queue\SerializesModels;
use BinaryTorch\Comments\Models\Comment;
use Illuminate\Foundation\Events\Dispatchable;

class NewComment
{
    use Dispatchable, SerializesModels;

    public $comment;

    /**
     * Create a new event instance.
     *
     * @param Comment $comment
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
}
