<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArsipPerkara extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'perkara_id',
        'tgl_arsip',
        'file_1',
        'type_1',
        'size_1',
        'file_2',
        'type_2',
        'size_2',
        'file_3',
        'type_3',
        'size_3',
        'file_4',
        'type_4',
        'size_4',
        'file_5',
        'type_5',
        'size_5',
    ];

    public function perkara()
    {
        return $this->belongsTo(Perkara::class);
    }
}
