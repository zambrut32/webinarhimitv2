<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryWebinar;
class Sertifikat extends Model
{
    protected $guarded = [];

    public function CategoryWebinar()
    {
        return $this->hasMany('App\CategoryWebinar', 'id', 'webinar_id');


    }
}
