<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kopi extends Model
{
    use HasFactory;
    protected $table = 'kopi';
    protected $fillable = ['nama', 'kopi', 'size'];
}
