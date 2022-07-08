<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videografi extends Model
{
    use HasFactory;
    protected $table = 'videografis';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function kelompok()
    {
        return $this->belongsTo("KlmVideografi::class");
    }
}
