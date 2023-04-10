<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Ourmenu;
use App\Models\Menucategory;
use DB;
use Str;

class OurmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('ourmenu-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Ourmenu::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("slug", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");$query->orWhere("price", "like", "%". $request["search"] ."%");$query->orWhere("discount_price", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.ourmenus._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'ourmenu')->first()->label;
        $models = Ourmenu::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Ourmenu::onlyTrashed()->get();
        return view('Admin.ourmenus.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('ourmenu-create');
        $page_title = Menu::where('menu', 'ourmenu')->first()->label;
        $menu_categories = Menucategory::where('status', 1)->get();
        return view('Admin.ourmenus.create', compact('page_title', 'menu_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Ourmenu::getValidationRules($request));
        $input = $request->all();
        DB::beginTransaction();

        try{
            $input['slug'] = Str::random(5);
	        Ourmenu::create($input);

            DB::commit();
            return redirect()->route('ourmenu.index')->with('message', 'Ourmenu Added Successfully !');
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
        $page_title = Menu::where('menu', 'ourmenu')->first()->label;
        $model = Ourmenu::findOrFail($id);
      	return view('Admin.ourmenus.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('ourmenu-edit');
        $page_title = Menu::where('menu', 'ourmenu')->first()->label;
        $model = Ourmenu::findOrFail($id);
        $menu_categories = Menucategory::where('status', 1)->get();
        return view('Admin.ourmenus.edit', compact('page_title', 'model', 'menu_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Ourmenu::findOrFail($id);

        $validation = Ourmenu::getValidationRules($request);

	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/ourmenus'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
            $model['slug'] = Str::random(5);
	        $model->fill($input)->save();
            return redirect()->route('ourmenu.index')->with('message', 'Ourmenu update Successfully !');
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
        $this->authorize('ourmenu-delete');
        $model = Ourmenu::findOrFail($id)->delete();
        $onlySoftDeleted = Ourmenu::onlyTrashed()->count();
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
            $query = Ourmenu::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("slug", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");$query->orWhere("price", "like", "%". $request["search"] ."%");$query->orWhere("discount_price", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.ourmenus.trash-search', compact('models'));
        }
        $models = Ourmenu::onlyTrashed()->paginate($per_page_records);
        return view('Admin.ourmenus.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Ourmenu::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
