<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    public $fillable = ['prodi', 'id_jurusan'];
    public $timestamp = true;

    function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
