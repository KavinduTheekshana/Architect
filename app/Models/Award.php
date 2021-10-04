<?php

namespace App\Models;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Award extends Model
{
    use HasFactory;
    protected $table = "awards";
    protected $fillable = ['url'];
    public function award_images(){
        return $this->hasMany(AwardImage::class);
    }
   
}
