<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $table = 'galleries';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
		    'image' => 'required'
		];
		return $rules;
    }
}
