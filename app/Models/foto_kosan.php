<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_kosan extends Model
{
    use HasFactory;
    protected $table = 'foto_kosans';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
