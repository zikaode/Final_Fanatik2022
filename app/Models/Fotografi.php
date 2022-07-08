<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografi extends Model
{
    use HasFactory;
    protected $table = 'fotografis';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
