<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use Illuminate\Support\Facades\Storage;

class Course extends BaseModel
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'price',
        'teacher',
        'photo',
        'course_description',
        'pointers',
        'short_description',
        'level',
        'duration',
        'lesson',
        'quizzes',
        'weekly_test',
        'certificate',
        'language',
        'status',
        'home_featured',
    ];

    protected $table = 'courses';

    protected $appends = ['photo_link', 'format_date'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function getPhotoLinkAttribute()
    {
        return $this->photo ? asset(Storage::url($this->photo)) : null;
    }

    public function getFormatDateAttribute()
    {
        return [
            'created_at' => formatDate($this->created_at, 'F d Y'),
            'publish_date' => formatDate($this->publish_date, 'F d Y')
        ];
    }
}