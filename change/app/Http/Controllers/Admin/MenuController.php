<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.web.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'url' => 'required',
                'is_footer' => 'required',
                'display_order' => 'required',
            ]);
            Menu::create($request->all());
            toastr()->success('Menu Added Successfully');
            return [
                'success' => true,
                'message' => 'Menu Added Successfully',
            ];
            // return redirect()->back();
        } catch (Exception $e) {
            // toastr()->error($e->getMessage());
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
            // return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $get_submenu = Menu::where('menu_id', '!=', null)->whereNull('submenu_id')->get();
        return view('admin.web.menu.edit', compact('menu', 'get_submenu'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'is_footer' => 'required',
            'display_order' => 'required',
        ]);
        $menu = Menu::find($id);
        $menu->update($request->all());
        toastr()->success('Menu Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        toastr()->success('Menu Deleted successfully');
        return redirect()->back();
    }

    public function getSubmenu(Request $request)
    {
        $get_submenu = Menu::where('menu_id', $request->menu_id)->where('submenu_id', '=', null)->get();
        return response()->json($get_submenu);
    }
}
