<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : '/storage/profile/OTzOnDin4IVKHW3riyklOSegkeodHh97M4dpH0Uw.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
