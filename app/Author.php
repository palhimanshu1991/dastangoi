<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public $timestamps = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'authors';
    protected $primaryKey = 'id';

    /**
     * @return mixed
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->image == null || empty($this->image) || $this->image == '') {
            return asset('/images/default.jpg');
        }

        return asset('uploads/authors/' . $this->id . '/' . $this->image);
    }
}
