<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;
    protected $fillable = ['dokter_id', 'pasien_id', 'slug', 'status', 'suhu'];
    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }
}
