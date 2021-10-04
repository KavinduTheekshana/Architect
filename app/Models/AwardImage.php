<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardImage extends Model
{
    use HasFactory;
    protected $table = "award_images";
    protected $fillable = ['url'];
    public function award(){
        return $this->belongsTo(Award::class);
    }

}
