<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    // add fillable
    protected $fillable = ['title', 'description', 'event_date'];    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('response')->withTimestamps();
    }
}
