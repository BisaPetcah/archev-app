<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model

{
    use HasFactory;

    protected $fillable = [];

    // protected $with = ['members'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
