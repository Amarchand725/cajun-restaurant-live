<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Blog;
use DB;
use Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorize('blog-list');
        $per_page_records = 10;
        if(!empty(systemSetting())){
            $per_page_records = systemSetting()->per_page_record;
        }
        if($request->ajax()){
            $query = Blog::orderby('id', 'desc')->where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("slug", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            $models = $query->paginate($per_page_records);
            return (string) view('Admin.blogs._search', compact('models'));
        }

        $page_title = Menu::where('menu', 'blog')->first()->label;
        $models = Blog::orderby('id', 'desc')->paginate($per_page_records);
        $onlySoftDeleted = Blog::onlyTrashed()->get();
        return view('Admin.blogs.index', compact('models', 'page_title', 'onlySoftDeleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->authorize('blog-create');
        $page_title = Menu::where('menu', 'blog')->first()->label;
        return view('Admin.blogs.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, Blog::getValidationRules()
        );

        $input = $request->all();
        DB::beginTransaction();

        try{
            if (isset($request->image)) {
                $image = Str::random(5).date("d-m-Y-His").".".$request->file("image")->getClientOriginalExtension();
                $request->image->move(public_path("/admin/images/blogs"), $image);
                $input["image"] = $image;
            }
            $input['slug'] = Str::random(5);
	        Blog::create($input);

            DB::commit();
            return redirect()->route('blog.index')->with('message', 'Blog Added Successfully !');
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
        $page_title = Menu::where('menu', 'blog')->first()->label;
        $model = Blog::findOrFail($id);
      	return view('Admin.blogs.show', compact('page_title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $this->authorize('blog-edit');
        $page_title = Menu::where('menu', 'blog')->first()->label;
        $model = Blog::findOrFail($id);
        return view('Admin.blogs.edit', compact('page_title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Blog::findOrFail($id);

        $validation = Blog::getValidationRules();
        if($model->image){unset($validation["image"]);}
	    $this->validate($request, $validation);

        try{
            $input = [];
            foreach($request->toArray() as $key=>$req){
                if(gettype($req)=='object'){
                    if (isset($key)) {
                        $image = Str::random(5).date('d-m-Y-His').'.'.$request->file($key)->getClientOriginalExtension();
                        $request->$key->move(public_path('/admin/images/blogs'), $image);
                        $input[$key] = $image;
                    }
                }else{
                    $input[$key] = $req;
                }
            }
            $model['slug'] = Str::random(5);
	        $model->fill($input)->save();
            return redirect()->route('blog.index')->with('message', 'Blog update Successfully !');
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
        $this->authorize('blog-delete');
        $model = Blog::findOrFail($id)->delete();
        $onlySoftDeleted = Blog::onlyTrashed()->count();
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
            $query = Blog::where('id', '>', 0);
            if($request['search'] != ""){
                $query->where("title", "like", "%". $request["search"] ."%");$query->orWhere("slug", "like", "%". $request["search"] ."%");$query->orWhere("description", "like", "%". $request["search"] ."%");$query->orWhere("image", "like", "%". $request["search"] ."%");
            }
            if($request['status'] != "All"){
                $query->where('status', $request['status']);
            }
            $models = $query->where('deleted_at', '!=', NULL)->paginate($per_page_records);
            return (string) view('Admin.blogs.trash-search', compact('models'));
        }
        $models = Blog::onlyTrashed()->paginate($per_page_records);
        return view('Admin.blogs.trash-index', compact('models', 'page_title'));
    }
    public function restore($id)
    {
        Blog::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Record Restored Successfully.');
    }
}
