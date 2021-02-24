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

    public function index(){
        $posts = Post::with('category:id,name')->latest()->paginate(10);
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
                // If File images is Not Exists Make A New One
                $createDirectory = Storage::makeDirectory('public/images');
                // Get All Directory In Storge/public/images
                $directory = Storage::directories('public/images');
                // Check If File post is Exists Or No
                if (Arr::has($directory, 'post') === false) {
                    // If File post is Not Exists Make A New One
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
                    // Make Sync Between Post & Image
                    $post->photo()->sync($photo);

                } // End Of If Check File post is Exists Or No

            } // End Of If Check File images is Exists Or No

        } else {
            // Choose Image From
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
