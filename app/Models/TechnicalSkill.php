<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'percent'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
