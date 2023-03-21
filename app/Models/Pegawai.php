<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pegawai';
    public function jabatan()
    {
        return $this->belongsToMany(Jabatan::class);
    }
}
