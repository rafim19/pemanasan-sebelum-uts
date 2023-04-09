<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'TrDosen';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'dob', 'bio', 'email', 'major_id', 'ortu_id', 'created_at', 'updated_at'];

    public function major() {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function ortu() {
        return $this->belongsTo(Ortu::class, 'ortu_id', 'id');
    }
}
