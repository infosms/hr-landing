<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class AboutProduct extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'about_product';
    protected $translatable = ['title', 'inner_title', 'text'];
    public function contents()
    {
        return $this->hasMany(BannerContent::class,'banner_id');
    }
}
