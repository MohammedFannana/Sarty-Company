<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'summaryOfCourse', 'courseLevelsNumber',
        'description', 'houresNumber', 'teacherName', 'image', 'url'
    ];


    public function getImageUrlAttribute()
    {
        // column image in database
        if (!$this->image) {
            return "https://aui.atlassian.com/aui/8.8/docs/images/avatar-person.svg";
        }

        // if $this->image start with http:// or https://
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        return asset('storage/' . $this->image);
    }
}
