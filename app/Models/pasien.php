<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function RekamMedis(){
        return $this->hasMany(RekamMedis::class);
    }
}
