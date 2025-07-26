<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'amount',
        'description',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
