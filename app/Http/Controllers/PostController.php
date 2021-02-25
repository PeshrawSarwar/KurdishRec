<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Photo;



class PostController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth')->only('edit', 'delete', 'update');


    }

    public function index(){
        $posts = Post::with('category:id,name')->latest()->paginate(9);
        return view('post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store(Request $request){
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        $post->category()->sync($request->categories);

        if ($request->photo) {

            // Get All Directory In Storge/public
            $directories = Storage::directories('public');

            // Check If File images is Exists Or No
            if (Arr::has($directories, 'images') === false) {

                $createDirectory = Storage::makeDirectory('public/images');

                $directory = Storage::directories('public/images');

                if (Arr::has($directory, 'post') === false) {

                    $createDirectory = Storage::makeDirectory('public/images/post');

                    // Add New Image
                    $photo = new Photo;
                    $image = $request->photo;
                    $fakeName = time() . '-' . Str::random(10) . '-' . $image->getClientOriginalName(); // Image Name
                    Image::make($image)
                        ->resize(1024, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save(storage_path('app/public/images/post/' . $fakeName));

                    $photo->image = $fakeName;
                    $photo->save();

                    $post->photo()->sync($photo);

                }

            }

        } else {

            $post->photo()->sync($request->imgs);

        }
        return redirect()->Route('post.index');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post ->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){

        $post           = Post::findOrFail($id);
        $post->title    = $request->title;
        $post->content  = $request->content;
        $post->save();

        $post->category()->sync($request->categories);

        if ($request->photo) {

            // Add New Image

            $photo = new Photo;
            $image = $request->photo;
            $fakeName = time() . '-' . Str::random(10) . '-' . $image->getClientOriginalName(); // Image Name
            Image::make($image)
                ->resize(1024, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(storage_path('app/public/images/post/' . $fakeName));

            $photo->image = $fakeName;
            $photo->save();
            // Make Sync Between Post & Image
            $post->photo()->sync($photo);

        } elseif($request->imgs) {
            // Choose Image From
            $post->photo()->sync($request->imgs);

        } // End If

        return redirect()->Route('post.index');

    }



}
