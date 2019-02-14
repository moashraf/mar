<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories_news
 * @package App\Models
 * @version February 13, 2019, 1:09 pm UTC
 *
 * @property integer parentid
 * @property string single_photo
 * @property string status
 */
class categories_news extends Model
{
    use SoftDeletes;

    public $table = 'categories_news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'parentid',
        'single_photo',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parentid' => 'integer',
        'single_photo' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
