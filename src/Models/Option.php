<?php

namespace Mbsoft31\LaravelModelOptions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "value" => "json"
    ];

    public function optionable()
    {
        return $this->morphTo();
    }
}
