<?php

namespace SubashRijal5\FilamentPageBuilder\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use SubashRijal5\FilamentPageBuilder\Models\Block;

trait HasBlocks
{
    public function blocks(): MorphMany
    {
        return $this->morphMany(Block::class, 'blockable');
    }
}
