<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class BannerContent extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'banner_content';
    protected $translatable = ['text'];

    public function about()
    {
        return $this->belongsTo(AboutProduct::class);
    }
}
