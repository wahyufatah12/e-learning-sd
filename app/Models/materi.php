<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class materi extends Model
{
    protected $materis = ['title','is_active'];
    use HasFactory;

    // Jika nama tabelmu bukan "materis", definisikan nama tabel di sini
    // protected $table = 'nama_tabel';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'judul',
        'deskripsi',
        'file_path',
    ];
}
