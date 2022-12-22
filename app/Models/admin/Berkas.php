<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;
    protected $fillable = [
        'photoWhiteBG','KTP','KTPArab','akte','akteArab','KK','surkes','surkesArab','SKKB','tazkiyah','SKCK','SKCKArab','paspor', 'ijazahIM','ijazahMA','transkripIjazahIM','transkripIjazahMA','raporMA','raporIM','rapor1AIM','rapor1BIM','rapor2AIM','rapor2BIM','rapor3AIM','rapor3BIM','rapor1AMA','rapor1BMA','rapor2AMA','rapor2BMA','rapor3AMA','rapor3BMA',
    ];
    public $timestamps = true;
}
