<?php

// app/Models/Account.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
protected $fillable = [
    'name',
    'account_number',
    'bank',
    'balance',
    'note',
];
}
