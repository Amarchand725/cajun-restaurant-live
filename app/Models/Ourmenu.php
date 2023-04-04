<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;

class Ourmenu extends Model
{
    use SoftDeletes;

    protected $table = 'ourmenus';
    protected $guarded = [];

    static function getValidationRules($request){
        $menu_category_id = $request->menu_category_id;
    	$rules = [
            'title' => [
                'required',
                'max:255',
                Rule::unique('ourmenus')->where(function ($query) use ($menu_category_id) {
                    return $query->where('menu_category_id', $menu_category_id);
                }),
            ],
		];
		return $rules;
    }

    public function hasCategory()
    {
        return $this->hasOne(Menucategory::class, 'id', 'menu_category_id');
    }
}
