<?php

namespace App\Http\Controllers;

use App\Models\Main_category;
// use App\Models\Menu_category;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $main_cat_id = Main_category::id();
        $main_cat = Main_category::latest()->paginate(10);
        return view('admin.mainCategory',compact('main_cat'));
        // return $main_cat;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $main_categories = Main_category::get('main_cat_id','main_cat_name','main_cat_order','main_cat_img');
        // return view("admin.mainCategoryCreate",compact('main_categories'));
        return view("admin.mainCategoryCreate");
        // return "hello world";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return "hello world";
        // return Input::file('main_cat_img')->getClientOriginalName();
        // $image = $request->file('main_cat_img');
        // $imageName = $request->file('main_cat_img')->getClientOriginalName();
        // $imagePath = $request->file('main_cat_img')->storeAs('theme/images/main-category',$imageName,'public');
        // $image->move(base_path('theme\images'),$imageName);
        // return $imageName;
        // return $imagePath;
        // return $imagePath;
        // return $imageName;


        request()->validate([
            "main_cat_name" => "required",
            "main_cat_img" => "required|image",
        ]);
        $imageName = time().'.'.$request->main_cat_img->extension();
        $imagePath = "/images/main-category/{$imageName}";
        // return $imagePath;


        Main_category::create([
            "main_cat_name" => $request->main_cat_name,
            "main_cat_order" => $request->main_cat_order,
            "main_cat_img" => $imagePath,
            // "slug" => Str::slug($request->main_cat_name),
        //   Storage::disk('public')->putFile('theme/images/main-category', $imageName),

        ]);
            $request->main_cat_img->move(public_path('/images/main-category'),$imageName);
            // dd($request);
            // return $request;


        return redirect('/catalog/main-category');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function show(Main_category $main_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Main_category $main_category)
    {
        //
        // return $main_category;
        return view("admin.mainCategoryEdit", compact('main_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main_category $main_category)
    {

        request()->validate([
            "main_cat_name" => "required",
            "main_cat_img" => "required|image",
        ]);
        $imageName = time().'.'.$request->main_cat_img->extension();
        $imagePath = "/images/main-category/{$imageName}";

        Main_category::where('slug',$main_category->slug)->update([
            "main_cat_name" => $request->main_cat_name,
            "main_cat_order" => $request->main_cat_order,
            "main_cat_img" => $imagePath,
            // "slug" => Str::slug($request->main_cat_name),
        //   Storage::disk('public')->putFile('theme/images/main-category', $imageName),

        ]);
            $request->main_cat_img->move(public_path('/images/main-category'),$imageName);
            // dd($request);
            // return $request;
        return redirect('/catalog/main-category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main_category $main_category)
    {
        //
        Main_category::where('slug',$main_category->slug)->delete();
        return redirect('/catalog/main-category');

    }
}
