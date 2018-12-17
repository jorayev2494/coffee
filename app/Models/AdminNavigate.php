<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminNavigate extends Model
{

    protected $table = "admin_navigates";

    public function categories()
    {
        return $this->hasMany('App\Models\Category');   // , 'foreign_key', 'local_key'
    }

}
