<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {
    public function Messages() {
        return $this->belongsToMany('App\Message', 'message_skills');
    }

    protected $guarded = ['id'];
}
