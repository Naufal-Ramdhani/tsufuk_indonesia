<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lanah extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function lanahDetail()
    {
        return $this->hasMany(LanahDetail::class);
    }
}
