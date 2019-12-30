<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /** @test */
    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
