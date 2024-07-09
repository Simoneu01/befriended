<?php

namespace Rennokki\Befriended\Test\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimplePage extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = [
        'name',
    ];
}
