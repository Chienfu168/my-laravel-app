<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'budget',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function pettyCashes()
    {
        return $this->hasMany(PettyCash::class);
    }
}
