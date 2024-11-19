<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function show()
    {
        $categories = Category::all();

        return view('newsapp/CategoryList', compact('categories'));
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
        $category->delete();
        return redirect()->route("CategoryList");
    }

    //
}
