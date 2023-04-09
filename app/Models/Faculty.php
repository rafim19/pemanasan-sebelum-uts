<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'MsFaculties';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function major() {
        $this->hasMany(Major::class, 'id', 'faculty_id');
    }
}
