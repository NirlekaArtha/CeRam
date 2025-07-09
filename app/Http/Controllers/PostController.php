<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * route: /posts
     * method: GET
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view("posts");
    }

    /**
     * Show the form for creating a new resource.
     * route: /posts/create
     * method: GET
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view("post-form", [
            'action' => route('posts.store'),
            'post' => new Post(),
            'allCategories' => Category::all()->pluck('name')->toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * route: /posts
     * method: POST
     * 
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories' => 'required|array|max:3',
            'categories.*' => 'string|max:255|distinct|exists:categories,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120', // max 5MB
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueName = uniqid('img_', true) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $uniqueName);
            $validatedData['image'] = $uniqueName;
        }

        $user = Auth::user();
        $validatedData['user_id'] = $user->id;

        // Save the post
        $post = Post::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $validatedData['image'],
            'user_id' => $validatedData['user_id'],
            'slug' => Str::slug($validatedData['title']),
        ]);
        
        $categoryIds = \App\Models\Category::whereIn('name', $validatedData['categories'])->pluck('id')->toArray();

        $post->categories()->attach($categoryIds);

        return redirect()->route('posts.show', ['post' => $post->slug]);
        
    }

    /**
     * Display the specified resource.
     * route: /posts/{slug}
     * method: GET
     * 
     * @param Post $post
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @return \Illuminate\View\View
     */
    public function show(Post $post)
    {   
        return view('post', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     * route: /posts/{id}/edit
     * method: GET
     * 
     * @param Post $post
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @return \Illuminate\View\View
     */
    public function edit(Post $post)
    {
        // Ensure the authenticated user is the owner of the post
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $allCategories = Category::all()->pluck('name')->toArray();
        return view('post-form', ['post' => $post, 'action' => route('posts.update', $post->id), 'allCategories' => $allCategories]);
    }

    /**
     * Update the specified resource in storage.
     * route: /posts/{id}
     * method: PUT/PATCH
     * 
     * @param \Illuminate\Http\Request $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categories' => 'required|array|max:3',
            'categories.*' => 'string|max:255|distinct|exists:categories,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120', // max 5MB
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueName = uniqid('img_', true) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $uniqueName);
            $validatedData['image'] = $uniqueName;
        } else {
            // If no new image is provided, keep the existing image
            $validatedData['image'] = $post->image; 
        }

        // Update the post
        $post->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $validatedData['image'],
            'slug' => Str::slug($validatedData['title']),
        ]);

        $categoryIds = Category::whereIn('name', $validatedData['categories'])->pluck('id')->toArray();

        $post->categories()->sync($categoryIds);

        return redirect()->route('posts.show', ['post' => $post->slug])->with('success', 'Post updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     * route: /posts/{id}
     * method: DELETE
     * 
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
