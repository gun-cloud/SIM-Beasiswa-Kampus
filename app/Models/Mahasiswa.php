<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    public $fillable = ['nim', 'nama', 'semester', 'id_prodi', 'status'];
    public $timestamp = true;

    function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }
}
