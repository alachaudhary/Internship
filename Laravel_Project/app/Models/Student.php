<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table="students";
    protected $fillable = ["name","father_name","gender","age","program","email","phone","address","section_id","image"];
    public $timestamps = false;
    public function sections()
    {
        return $this->belongsToMany(Section::class, 'registrations')
                    ->withTimestamps(); // Automatically handle created_at and updated_at in the pivot table
    }
    
}

