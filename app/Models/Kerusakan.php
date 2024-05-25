<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KronologiKerusakan;

class Kerusakan extends Model
{
    use HasFactory;
    
    protected $table = 'kerusakan';

    protected $fillable = ['nama_kerusakan', 'keterangan', 'gambar', 'harga', 'kronologi_id'];

    public function kronologi()
    {
        return $this->belongsTo(KronologiKerusakan::class, 'kronologi_id');
    }
}
