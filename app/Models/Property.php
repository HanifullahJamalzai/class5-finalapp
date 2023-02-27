<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function propertyIndoor()
    {
        return $this->hasOne(PropertyIndoor::class);
        // return $this->hasOne(PropertyIndoor::class, 'property_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'property_tag', 'property_id', 'tag_id');
    }

}
