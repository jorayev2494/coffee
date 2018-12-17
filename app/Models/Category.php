<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //


    public function admin_navigates()
    {
        return $this->belongsTo('App\Models\AdminNavigate', 'navigate_id', 'id'); // , 'foreign_key', 'other_key'
    }

}
