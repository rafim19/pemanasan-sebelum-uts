<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = 'TrMajors';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'faculty_id', 'created_at', 'updated_at'];

    public function faculty() {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }

    public function dosen() {
        return $this->hasMany(Dosen::class, 'id', 'major_id');
    }
}
