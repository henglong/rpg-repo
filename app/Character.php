<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class, 'character_items');
    }
    public function deity()
    {
        return $this->hasOne(Deity::class);
    }
    public function race()
    {
        return $this->hasOne(Race::class);
    }
}
