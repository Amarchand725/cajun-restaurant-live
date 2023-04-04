<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Foodservice;
use DB;
use Str;

class FoodserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('foodservice-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Foodservice::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.foodservices._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'foodservice')->first()->label;
        $models = Foodservice::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Foodservice::onlyTrashed()->get();
        return view('Admin.foodservices.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('foodservice-create');
        $page_title = Menu::where('menu', 'foodservice')->first()->label;
        return view('Admin.foodservices.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Foodservice::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            if (isset($request->image)) {$image = Str::random(5).date("d-m-Y-His").".".$request->file("image")->getClientOriginalExtension();
                $request->image->move(public_path("/admin/images/foodservices"), $image);$input["image"] = $image;}
	        Foodservice::create($input);

            DB::commit();
            return redirect()->route('foodservice.index')->with('message', 'Foodservice Added Successfully !');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $page_title = Menu::where('menu', 'foodservice')->first()->label;
        $model = Foodservice::findOrFail($id);
      	return view('Admin.foodservices.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('foodservice-edit');
        $page_title = Menu::where('menu', 'foodservice')->first()->label;
        $model = Foodservice::findOrFail($id);
        return view('Admin.foodservices.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Foodservice::findOrFail($id);

        $validation = Foodservice::getValidationRules();
        if($model->image){unset($validation["image"]);}
	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/foodservices'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('foodservice.index')->with('message', 'Foodservice update Successfully !');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error. '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->authorize('foodservice-delete');
        $model = Foodservice::findOrFail($id)->delete();
        $onlySoftDeleted = Foodservice::onlyTrashed()->count();
        if($model){
            return response()->json([
                'status' => true,
                'trash_records' => $onlySoftDeleted
            ]);
        }
    }

    public function trashRecords(Request $request)
    {
        $page_title = 'All Trashed Records';
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Foodservice::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.foodservices.trash-search', compact('models'));
        }
        $models = Foodservice::onlyTrashed()->paginate($per_page_records);
        return view('Admin.foodservices.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Foodservice::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
