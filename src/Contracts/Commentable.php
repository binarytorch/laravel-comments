<?php

namespace BinaryTorch\Comments\Contracts;

interface Commentable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments();
}