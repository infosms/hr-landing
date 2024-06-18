<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class AboutCompany extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'about_company';
    protected $translatable = ['text', 'main_page'];
}
