<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $table = 'memo';

    protected $fillable = [
        'id', 'title', 'content'
    ];

    public $timestamps = false;
}