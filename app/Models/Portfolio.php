<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable =['name_en','name_ar','description_en','description_ar','category_ar','category_en','client','Author','main_image','image_1','image_2','image_3','image_4','thumbnail_1','thumbnail_2','date'];
}
