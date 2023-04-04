<?php 
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Gallery;
use DB;
use Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('gallery-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Gallery::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("image", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.galleries._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'gallery')->first()->label;
        $models = Gallery::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Gallery::onlyTrashed()->get();
        return view('Admin.galleries.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('gallery-create');
        $page_title = Menu::where('menu', 'gallery')->first()->label;
        return view('Admin.galleries.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Gallery::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            if (isset($request->image)) {$image = Str::random(5).date("d-m-Y-His").".".$request->file("image")->getClientOriginalExtension();$request->image->move(public_path("/admin/images/galleries"), $image);$input["image"] = $image;}
	        Gallery::create($input);

            DB::commit();
            return redirect()->route('gallery.index')->with('message', 'Gallery Added Successfully !');
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
        $page_title = Menu::where('menu', 'gallery')->first()->label;
        $model = Gallery::findOrFail($id);
      	return view('Admin.galleries.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('gallery-edit');
        $page_title = Menu::where('menu', 'gallery')->first()->label;
        $model = Gallery::findOrFail($id);
        return view('Admin.galleries.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Gallery::findOrFail($id);

        $validation = Gallery::getValidationRules();
        if($model->image){unset($validation["image"]);}
	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/galleries'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('gallery.index')->with('message', 'Gallery update Successfully !');
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
        $this->authorize('gallery-delete');
        $model = Gallery::findOrFail($id)->delete();
        $onlySoftDeleted = Gallery::onlyTrashed()->count();
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
            $query = Gallery::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("image", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.galleries.trash-search', compact('models'));
        }
        $models = Gallery::onlyTrashed()->paginate($per_page_records);
        return view('Admin.galleries.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Gallery::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
