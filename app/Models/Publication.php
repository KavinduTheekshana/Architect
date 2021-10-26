<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = "publications";
    protected $fillable = ['url'];
    public function publications_images(){
        return $this->hasMany(PublicationImage::class);
    }
}
