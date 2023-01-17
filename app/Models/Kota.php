<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resep;

class Kota extends Model
{
    use HasFactory;
    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
