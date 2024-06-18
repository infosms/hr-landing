<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class ResourceVideo extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'resource_video';
    protected $translatable = ['title'];
}
