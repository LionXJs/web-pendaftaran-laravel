<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'telepon', 'kerusakan'];
    protected $table = 'client';
    public $timestamps = false;
}
