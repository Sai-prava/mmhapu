<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function Category(){
        $categories = CourseCategory::all();
        return view('admin.web.course-category.index', compact('categories'));
    }
    public function storeCategory(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $store_category = new CourseCategory();
        $store_category->name = $request->name;
        $store_category->save();
        toastr()->success('New Course Category Addedd Successfully');
        return redirect()->back();
    }
    public function updateCategory(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $update_category = CourseCategory::find($request->id);
        $update_category->name = $request->name;
        $update_category->save();
        toastr()->success('Course Category Updated Successfully');
        return redirect()->back();
    }
    public function deleteCategory($id){
        $delete_category = CourseCategory::find($id);
        $delete_category->delete();
        toastr()->success('Deleted Successfully');
        return redirect()->back();
    }
    public function course(){
        $courses = Course::all();
        $categories = CourseCategory::all();
        return view('admin.web.course.index', compact('courses','categories'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'couse_category_id' => 'required',
        ]);
        $store = new Course();
        $store->couse_category_id = $request->couse_category_id;
        $store->name = $request->name;
        $store->save();
        toastr()->success('Course Added Successfully');
        return redirect()->back();
    }
    public function update(Request $request){
        $update = Course::find($request->id);

        $update->couse_category_id = $request->couse_category_id;
        $update->name = $request->name;
        $update->save();
        toastr()->success('Course Updated Successfully');
        return redirect()->back();
    }
    public function delete($id){
        $delete = Course::find($id);
        $delete->delete();
        toastr()->success('Course Deleted Successfully');
        return redirect()->back();
    }
}
