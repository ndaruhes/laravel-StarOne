<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Field yang boleh dimasukkan ke dalam database
    protected $fillable = ['judul', 'publisher', 'deskripsi', 'tahun_rilis'];
}
