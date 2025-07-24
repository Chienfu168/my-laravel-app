<?php

// app/Models/Account.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['name', 'number', 'bank_name'];
}
