<?php

namespace App\Models;
use App\Models\BaseModel;
use App\Models\Course;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;
    protected $fillable = ['status', 'name', 'slug', 'index', 'home_featured'];


    // app/Models/Category.php
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
