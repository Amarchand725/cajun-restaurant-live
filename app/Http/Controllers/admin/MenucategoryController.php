<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Menucategory;
use DB;
use Str;

class MenucategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('menucategory-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Menucategory::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("start_time", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.menucategories._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'menucategory')->first()->label;
        $models = Menucategory::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Menucategory::onlyTrashed()->get();
        return view('Admin.menucategories.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('menucategory-create');
        $page_title = Menu::where('menu', 'menucategory')->first()->label;
        return view('Admin.menucategories.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Menucategory::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            if (isset($request->image)) {
                $image = Str::random(5).date("d-m-Y-His").".".$request->file("image")->getClientOriginalExtension();
                $request->image->move(public_path("/admin/images/menucategories"), $image);$input["image"] = $image;}
	        Menucategory::create($input);

            DB::commit();
            return redirect()->route('menucategory.index')->with('message', 'Menucategory Added Successfully !');
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
        $page_title = Menu::where('menu', 'menucategory')->first()->label;
        $model = Menucategory::findOrFail($id);
      	return view('Admin.menucategories.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('menucategory-edit');
        $page_title = Menu::where('menu', 'menucategory')->first()->label;
        $model = Menucategory::findOrFail($id);
        return view('Admin.menucategories.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Menucategory::findOrFail($id);
        $input = $request->all();
        // $validation = Menucategory::getValidationRules();
        // if($model->image){unset($validation["image"]);}
	    // $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/menucategories'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('menucategory.index')->with('message', 'Menucategory update Successfully !');
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
        $this->authorize('menucategory-delete');
        $model = Menucategory::findOrFail($id)->delete();
        $onlySoftDeleted = Menucategory::onlyTrashed()->count();
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
            $query = Menucategory::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("start_time", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.menucategories.trash-search', compact('models'));
        }
        $models = Menucategory::onlyTrashed()->paginate($per_page_records);
        return view('Admin.menucategories.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Menucategory::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
