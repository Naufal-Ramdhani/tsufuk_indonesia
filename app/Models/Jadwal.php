<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lanahDetail()
    {
        return $this->belongsTo(LanahDetail::class, 'lanah_detail');
    }
}
