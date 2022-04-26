<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('blogs.index', compact('blogs'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=> 'required',
            'author'=> 'required'
        ]);

        Blog::create($request->all());
        return redirect()->route('blogs.index')->with('success', 'Blog Created successfully');
    }

    public function show(Blog $blog): View
    {
    //$blog = Blog::find($id);

    return View('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog): View
    {
    return view('blogs.edit', compact('blog'));
    }

    public function update(Request  $request, $id): RedirectResponse
    {

        $request->validate([
            'title' => 'required',
            'author' => 'required'
        ]);

        $blog= Blog::find($id);
        $blog->title = $request->title;
        $blog->auhor = $request->author;
        $blog->description = $request->description;
        $blog->is_active = ($request->is_active) ?? 0;

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog): RedirectResponse
    {
    $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
