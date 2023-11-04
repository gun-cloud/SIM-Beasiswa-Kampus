<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Mahasiswa extends Model
{
    use HasFactory, Searchable;
    // protected $guarded = ['id'];
    public $fillable = ['nim', 'nama', 'semester', 'id_prodi', 'status'];
    public $timestamp = true;

    function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function toSearchableArray()
    {
        return[
            'nim' =>$this->nim,
            'nama' =>$this->nama,
        ];
    }
}
