<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jabatan';

    // public function pegawai()
    // {
    //     return $this->belongsToMany(Pegawai::class, 'id_pegawai')
    //                 ->withPivot('nama', 'created_by', 'updated_by', 'deleted_by');
    // }
    public function jabatanPegawai()
    {
        return $this->hasMany(JabatanPegawai::class, 'id_jabatan');
    }

}
