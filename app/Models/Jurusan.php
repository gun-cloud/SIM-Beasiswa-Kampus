<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    public $fillable = ['jurusan'];
    public $timestamps = true;

    public function prodis()
    {
        return $this->hasMany(Prodi::class);
    }
}
