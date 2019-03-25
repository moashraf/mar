<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class categories_services extends Model
{
    use SoftDeletes;

    public $table = 'categories_services';
    

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
         'status' => 'string'
 
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
                'single_photo' => 'mimes:jpeg,jpg,png,gif'

    ];

   public function get_categories_services_ar_description()
{
  
 
        return $this->hasMany("App\Models\categories_services_ar", 'id_categories');

		}   
	
	
	
	
}
