<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menucategory extends Model
{
    use SoftDeletes;

    protected $table = 'menucategories';
    protected $guarded = [];

    static function getValidationRules(){
    	$rules = [
            'title' => ['required', 'string', 'title', 'max:255', 'unique:menucategories'],
            'image' => 'required'
		];
		return $rules;
    }

    public function haveOurMenus()
    {
        return $this->hasMany(Ourmenu::class, 'menu_category_id', 'id');
    }
}
