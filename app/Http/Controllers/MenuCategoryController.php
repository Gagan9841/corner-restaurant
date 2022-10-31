<?php

namespace App\Http\Controllers;

use App\Models\Menu_category;
use App\Models\Main_category;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $menu_cat = Menu_category::with('main_category')->where('main_category',1);
        // $menu_cat = Menu_category::with('main_category')->where('main_category')->firstOrFail();
        // return view('admin.menuCategory',[
            //     'menu_cat' => $menu_cat,
            // ]);
            // $menu_cat = Menu_category::with('Main_category')->where('main_cat_id','');
            // $menu_cat = Menu_category::all();
            // $cat_id= Main_category::with('menuCategor')->$this->index('main_cat_id');
            // $cat_id = Menu_category::with('Main_category
            // return $cat_id;
            // die();
            // $menu_cat = Menu_category::with('Main_category')->where('main_category',)->get();
            $menu_cat = Menu_category::with('mainCategory')->latest()->paginate(10);
            // dd($menu_cat);
            // return $menu_cat ;
            return view('admin.menuCategory',compact('menu_cat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function show(Menu_category $menu_category)
    {
        //
        // $menu_cat = Menu_category::with('main_category')->where('main_category',$menu_category)->firstOrFail();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu_category $menu_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu_category $menu_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu_category $menu_category)
    {
        //
    }
}
