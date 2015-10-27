<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model {
    public function Messages() {
        return $this->hasMany('App\Message');
    }

    protected $guarded = ['id'];
}
