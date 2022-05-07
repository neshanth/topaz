<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("blogs.index", ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_body' => 'required',
            'blog_image' => 'max:10000|mimes:png,jpeg,jpg,svg',
        ]);
        $fileName = null;
        if ($request->file('blog_image')) {
            $fileName = $request->file('blog_image')->getClientOriginalName();
            $request->file('blog_image')->storeAs('public/blog', $fileName);
        }
        $data = [
            'blog_title' => $request->blog_title,
            'blog_body' => $request->blog_body,
            'blog_image' => $fileName,

        ];
        Blog::create($data);
        return redirect()->back()->with('success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view("Blogs.show", ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::where("id", $id)->get();
        return view("Blogs.edit", ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_title' => "required|unique:blogs,blog_title,$id",
            'blog_body' => 'required',
            'blog_image' => 'max:10000|mimes:png,jpeg,jpg,svg',
        ]);
        $fileName = null;
        if ($request->hasFile('blog_image') && !$this->checkIfImageExists($id, $request)) {
            $fileName = $request->file('blog_image')->getClientOriginalName();
            $existingImage = $this->getImage($id);
            $this->deleteImage($existingImage);
            $request->file("blog_image")->storeAs('public/blog', $fileName);
        } else {
            $fileName = $request->file('blog_image')->getClientOriginalName();
        }
        $data = [
            'blog_title' => $request->blog_title,
            'blog_body' => $request->blog_body,
            'blog_image' => $fileName,

        ];
        Blog::find($id)->update($data);
        return redirect()->back()->with("success", "Blog Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imageName =  $this->getImage($id);
        $this->deleteImage($imageName);
        Blog::destroy($id);
        return redirect()->action([BlogController::class, 'index']);
    }
    public function home()
    {
        $blogs = Blog::all();
        return view("Blogs.home", ['blogs' => $blogs]);
    }
    private function checkIfImageExists($id, Request $request): bool
    {
        $blog = Blog::find($id);
        return $blog->blog_image == $request->file('blog_image')->getClientOriginalName();
    }
    private function deleteImage($imageName)
    {
        Storage::delete("/public/blog/" . $imageName);
    }
    private function getImage($id)
    {
        $blog = Blog::find($id);
        return $blog->blog_image;
    }
}
