<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Section extends Model
{
    use HasFactory;
    protected $table="sections";
    protected $fillable = ["course_id","teacher_id","section_capacity"];
    public $timestamps = false;


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'registrations')
                    ->withTimestamps(); // Automatically handle created_at and updated_at in the pivot table
    }

}


