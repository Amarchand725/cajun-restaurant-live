<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutus extends Model
{
    use SoftDeletes;

    protected $table = 'aboutuses';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
		    'title' => 'required','short_description' => 'required'
		];
		return $rules;
    }
}
