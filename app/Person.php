<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $guarded = [];

    public function users()
    {
        return $this->hasOne('App\User');
    }

    public function contacts()
    {
        return $this->hasOne('App\Contact');
    }

    public function educations()
    {
        return $this->hasMany('App\Education');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }
    public function hobbies()
    {
        return $this->hasMany('App\Hobby');
    }

    public function languages()
    {
        return $this->hasMany('App\Language');
    }

    public function skills()
    {
        return $this->hasMany('App\Skill');
    }

    
}
