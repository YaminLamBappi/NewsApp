<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = News::with('category')->get();
        return view("newsapp/NewsList", compact("posts"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("newsapp/AddNews", compact("categories"));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "required|image",
            "category_id" => "required|exists:categories,id",
        ]);

        $post = new News();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->image = 'images/' . $imageName;
        }

        $post->save();

        return redirect()->route('NewsList');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = News::findOrFail($id);
        $post->views += 1;
        $post->save();

        return view('newsapp/ViewNews', compact('post'));

        //
    }

    public function edit($id)
    {
        $post = News::findOrFail($id);
        $categories = Category::all();
        return view('newsapp/UpdateNews', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "category_id" => "required|exists:categories,id",
            "image" => "nullable|image",
        ]);

        $post = News::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->image = 'images/' . $imageName;
        }

        $post->save();

        return redirect()->route('NewsList');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = News::findOrFail($id);
        $post->delete();

        return redirect()->route('NewsList');
        //
    }
    public function like($id)
    {
        //
    }
    public function view($id)
    {
        //
    }
    public function active($id)
    {
        $post = News::findOrFail($id);
        $post->status = 'Active';
        $post->save();

        return redirect()->back();
        //
    }
    public function inactive($id)
    {
        $post = News::findOrFail($id);
        $post->status = 'Inactive';
        $post->save();

        return redirect()->back();
        //
    }

    public function public_view()
    {
        $posts = News::with('category')->where('status', 'Active')->get();
        return view("welcome", compact("posts"));
    }

    public function public_single_view($id)
    {
        $post = News::findOrFail($id);
        $post->views += 1;
        $post->save();

        return view('PublicViewNews', compact('post'));
    }
}
