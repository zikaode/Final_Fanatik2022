<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlmVideografi extends Model
{
    use HasFactory;
    protected $table = 'klm_videografis';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function anggota()
    {
        return $this->hasMany("Videografi::class");
    }
}
