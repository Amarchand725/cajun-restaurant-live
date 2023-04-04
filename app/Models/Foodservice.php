<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Foodservice extends Model
{
    use SoftDeletes;

    protected $table = 'foodservices';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
		    'title' => 'required','image' => 'required'
		];
		return $rules;
    }
}
