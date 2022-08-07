<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanahDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lanah()
    {
        return $this->belongsTo(Lanah::class, 'lanah_id');
    }

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class, 'pelatih_id');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}

    
