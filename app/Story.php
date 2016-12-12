<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $guarded = ['id'];

    /**
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->story_id;
    }
}
