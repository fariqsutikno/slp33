<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaranUIM extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentName', 'musyrifName', 'jadwalDidaftarkan', 'selesaiDidaftarkan'
    ];
    public $timestamps = true;
}
