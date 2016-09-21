<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class, 'character_items');
    }
}
