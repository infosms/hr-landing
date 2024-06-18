<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class MainInfo extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'main_info';
    protected $translatable = ['title', 'text'];


}
