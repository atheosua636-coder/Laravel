<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PosStaff extends Model
{
    protected $table = 'pos_staff';

    protected $fillable = [
        'username',
        'full_name',
    ];
}
