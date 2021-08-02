<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $primaryKey = 'warga_id';
    protected $fillable = ['nik', 'nokk', 'name', 'ttl', 'kelamin', 'agama', 'pekerjaan', 'alamat'];
}
