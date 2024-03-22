<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $fillable = [
        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */

        'jenislap',
        'date',
        'time',
        'durasi',

    ];
}
