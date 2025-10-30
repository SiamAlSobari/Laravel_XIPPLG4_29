<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        "nis",
        "nama_lengkap",
        "jenis_kelamin",
        "nisn",
    ];
    //ini adalah model dari student
}
