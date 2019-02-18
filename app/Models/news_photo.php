<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class news_photo extends Model
{
    use SoftDeletes;

    public $table = 'news_photo';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'news_id',
        'single_photo_gallery',
        'icon',
       ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
   

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'single_photo_gallery' => 'required'
    ];

    
}
