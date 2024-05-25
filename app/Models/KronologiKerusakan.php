<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KronologiKerusakan extends Model
{
    use HasFactory;
    
    protected $table = 'kronologi_kerusakan';

    protected $fillable = [
        'nama_kronologi',
    ];

  public function kerusakan()
    {
        return $this->hasMany(Kerusakan::class, 'kronologi_id');
    }
}
