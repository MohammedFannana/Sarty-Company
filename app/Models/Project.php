<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'slug', 'image', 'url'
    ];

    //Accessors
    //define ImageUrl but invoke image_url
    //get....Attribute
    public function getImageUrlAttribute()
    {
        // column image in database
        if (!$this->image) {
            return "https://www.incathlab.com/images/products/default_product.png";
        }

        // if $this->image start with http:// or https://
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        return asset('storage/' . $this->image);
    }
}
