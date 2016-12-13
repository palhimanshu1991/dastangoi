<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * @var string
     */
    protected $table = 'gallery';

    /**
     * @var string
     */
    protected $primaryKey = 'gallery_id';

    /**
     * @return mixed
     */
    public function getFullUrlAttribute()
    {
        return asset('uploads/' . $this->gallery_url);
    }

    /**
     * @return mixed
     */
    public function getTitleAttribute()
    {
        return $this->gallery_name;
    }
}
