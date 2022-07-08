<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlmWeb extends Model
{
    use HasFactory;
    protected $table = 'klm_webs';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function web()
    {
        return $this->hasMany(Web::class, "klm_webs_id");
    }
}
