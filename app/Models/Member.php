<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'status',
        'photo_path',
        'division_id',
        'generation_id',
        'user_id'
    ];

    // protected $with = ['division', 'generation'];


    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function generation()
    {
        return $this->belongsTo(Generation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
