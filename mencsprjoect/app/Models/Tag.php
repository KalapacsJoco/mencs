<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function hostels(): BelongsToMany
    {
        return $this->belongsToMany(Hostel::class, 'hostel_tag');
    }
}