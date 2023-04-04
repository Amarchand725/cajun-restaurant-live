<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Aboutus;
use DB;
use Str;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('aboutus-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Aboutus::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("short_description", "like", "%". $request["search"] ."%");$query->orWhere("about_us", "like", "%". $request["search"] ."%");$query->orWhere("week_days_timing", "like", "%". $request["search"] ."%");$query->orWhere("saturday_timing", "like", "%". $request["search"] ."%");$query->orWhere("sunday_timing", "like", "%". $request["search"] ."%");$query->orWhere("call_now", "like", "%". $request["search"] ."%");$query->orWhere("short_description_logo", "like", "%". $request["search"] ."%");$query->orWhere("signature", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.aboutuses._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'aboutus')->first()->label;
        $models = Aboutus::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Aboutus::onlyTrashed()->get();
        return view('Admin.aboutuses.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('aboutus-create');
        $page_title = Menu::where('menu', 'aboutus')->first()->label;
        return view('Admin.aboutuses.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Aboutus::getValidationRules());
        $input = $request->all();
        DB::beginTransaction();

        try{
            if (isset($request->short_description_logo)) {
                $short_description_logo = Str::random(5).date("d-m-Y-His").".".$request->file("short_description_logo")->getClientOriginalExtension();
                $request->short_description_logo->move(public_path("/admin/images/aboutuses"), $short_description_logo);
                $input["short_description_logo"] = $short_description_logo;}if (isset($request->signature)) {$signature = Str::random(5).date("d-m-Y-His").".".$request->file("signature")->getClientOriginalExtension();$request->signature->move(public_path("/admin/images/aboutuses"), $signature);$input["signature"] = $signature;}
	        Aboutus::create($input);

            DB::commit();
            return redirect()->route('aboutus.index')->with('message', 'Aboutus Added Successfully !');
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
        $page_title = Menu::where('menu', 'aboutus')->first()->label;
        $model = Aboutus::findOrFail($id);
      	return view('Admin.aboutuses.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('aboutus-edit');
        $page_title = Menu::where('menu', 'aboutus')->first()->label;
        $model = Aboutus::findOrFail($id);
        return view('Admin.aboutuses.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Aboutus::findOrFail($id);

        $validation = Aboutus::getValidationRules();
        if($model->short_description_logo){unset($validation["short_description_logo"]);}if($model->signature){unset($validation["signature"]);}
	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/aboutuses'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
	        $model->fill($input)->save();
            return redirect()->route('aboutus.index')->with('message', 'Aboutus update Successfully !');
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
        $this->authorize('aboutus-delete');
        $model = Aboutus::findOrFail($id)->delete();
        $onlySoftDeleted = Aboutus::onlyTrashed()->count();
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
            $query = Aboutus::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("short_description", "like", "%". $request["search"] ."%");$query->orWhere("about_us", "like", "%". $request["search"] ."%");$query->orWhere("week_days_timing", "like", "%". $request["search"] ."%");$query->orWhere("saturday_timing", "like", "%". $request["search"] ."%");$query->orWhere("sunday_timing", "like", "%". $request["search"] ."%");$query->orWhere("call_now", "like", "%". $request["search"] ."%");$query->orWhere("short_description_logo", "like", "%". $request["search"] ."%");$query->orWhere("signature", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.aboutuses.trash-search', compact('models'));
        }
        $models = Aboutus::onlyTrashed()->paginate($per_page_records);
        return view('Admin.aboutuses.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Aboutus::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
