<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{

    public function show()
    {
        $countNews = Category::withCount('news')->get();
        // dd($countNews);
        return view('newsapp/CategoryList', compact('countNews'));
    }
    public function CategoryForm()
    {
        return view('newsapp/AddCategory');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new Category();
        $category->name = $request->name;

        $category->save();

        return redirect()->route('CategoryList');
    }

    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        return view("newsapp/UpdateCategory", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->save();

        return redirect()->route("CategoryList");
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $post = $category->news();
        $post->delete();
        $category->delete();
        return redirect()->route("CategoryList");
    }

    //
}
