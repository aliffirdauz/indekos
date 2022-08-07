<?php

namespace App\Models;

use App\Models\Pemilik;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class);
    }
}
