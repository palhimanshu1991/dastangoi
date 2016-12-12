<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public $timestamps = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';
    protected $primaryKey = 'event_id';

    /**
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->event_id;
    }

}
