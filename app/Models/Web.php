<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;
    protected $table = 'webs';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function klm_web()
    {
        return $this->belongsTo(KlmWeb::class, "klm_webs_id");
    }
}
