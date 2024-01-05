<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CatatanPerkara extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'perkara_id',
        'jaksa_id',
        'tgl_catatan',
        'isicatatan',
    ];


    public function perkara()
    {
        return $this->belongsTo(Perkara::class, 'perkara_id');
    }

    /**
     * Get the jaksa associated with the catatan.
     */
    public function jaksa()
    {
        return $this->belongsTo(Jaksa::class, 'jaksa_id');
    }
}
