<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'name',
        'day',
        'time',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
