<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(4);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::get();
        $categories = Category::pluck('id', 'title');
        //dd($categories);

        $post = new Post();
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    //public function store(Request $request)
    {
        //dd($request);
        // echo $request->input('title');
        // echo $request->input('slug');
        // echo $request->input('content');
        // echo $request->input('description');
        // echo "<br>";
        // echo $request;

        //dd($request->all());

        //$validated = $request->validate(StoreRequest::myRules());

        //dd($validated);

        // $data = $request->validated();

        // $data['slug']=Str::slug($data['title']);

        // dd($data);

        //Post::create($request->all());


        // Post::create($request->validated());

        

        $data = $request->validated();

        if(isset($data["image"])){

            $data["image"] = $filename = time().".".$data["image"]->extension();

            $request->image->move(public_path("image"), $filename);

        }

        Post::create($data);

        return to_route("post.index")->with('status', "Registro creado");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        $categories = Category::pluck('id', 'title');
        
        echo view('dashboard.post.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post)
    {
        //dd($request->validated());
        $data = $request->validated();

        if(isset($data["image"])){

            $data["image"] = $filename = time().".".$data["image"]->extension();

            $request->image->move(public_path("image"), $filename);

        }


        $post->update($data);
        
        //$request->session()->flash('status', "Registro actualizado");
        return to_route("post.index")->with('status', "Registro actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete(); 
        return to_route("post.index")->with('status', "Registro eliminado");
    }
}
