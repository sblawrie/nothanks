<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {
    public function Skills() {
        return $this->belongsToMany('App\Skill', 'message_skills');
    }

    public function Employee() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Recruiter() {
        return $this->belongsTo('App\Recruiter');
    }

    protected $guarded = ['id'];
}
