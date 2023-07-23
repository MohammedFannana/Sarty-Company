<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'gmail', 'phone', 'address', 'team_introduction',
        'contact_introduction', 'project_introduction', 'course_introduction',
        'service_introduction', 'about_company_details', 'about_company_introduction', 'header_text'
    ];
}
