<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswas";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'nis' , 'nama' , 'jk' , 'tempat_lahir' , 'tanggal_lahir' , 'alamat' , 'asal_sekolah' , 'kelas' , 'jurusan'];
}
