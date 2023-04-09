<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    protected $table = 'MsOrtu';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'umur', 'created_at', 'updated_at'];

    public function faculty() {
        return $this->hasOne(Dosen::class, 'id', 'ortu_id');
    }
}
